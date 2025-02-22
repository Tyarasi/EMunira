<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ChatbotRule;

class ChatbotController extends Controller
{
    // public function respond(Request $request)
    // {
    //     $message = $request->input('message');
    
    //     // Hapus spasi berlebih di awal, akhir, dan sebelum tanda baca
    //     $message = trim(preg_replace('/\s+([?.!,])/u', '$1', $message));
    
    //     $rule = ChatbotRule::where('keyword', 'LIKE', "%$message%")->first();
    
    //     if ($rule) {
    //         return response()->json([
    //             'response' => $rule->response
    //         ]);
    //     } else {
    //         return response()->json([
    //             'response' => 'Maaf, saya tidak mengerti. Bisa diperjelas ?'
    //         ]);
    //     }
    // }

    public function respond(Request $request)
    {
        $userMessage = strtolower(trim($request->input('message')));
        $matchedAnswer = null;
        $highestSimilarity = 0;
        $bestMatchIndex = null;
        $similarityThreshold = 75; // Ambang batas kemiripan (dalam persen)

        $data = ChatbotRule::first();

        if ($data) {
            $keywords = $data->keywords;
            $answers = $data->answer;

            foreach ($keywords as $index => $keyword) { // Loop dengan indeks
                $keyword = strtolower(trim($keyword));

                // Hitung kemiripan antara user input dan keyword menggunakan similar_text()
                similar_text($userMessage, $keyword, $percent);

                if ($percent > $highestSimilarity && $percent >= $similarityThreshold) {
                    $highestSimilarity = $percent;
                    $bestMatchIndex = $index;
                }
            }

            if ($bestMatchIndex !== null && isset($answers[$bestMatchIndex])) {
                $matchedAnswers = $answers[$bestMatchIndex];

                // Pastikan jawaban dalam format array
                if (!is_array($matchedAnswers)) {
                    $matchedAnswers = [$matchedAnswers]; // Ubah menjadi array jika hanya satu jawaban
                }

                $matchedAnswer = $matchedAnswers[array_rand($matchedAnswers)];
            }
        }

        if (!$matchedAnswer) {
            $matchedAnswer = "Maaf, saya tidak mengerti. Bisa dijelaskan lebih lanjut?";
        }

        return response()->json(['response' => $matchedAnswer]);
    }
}
