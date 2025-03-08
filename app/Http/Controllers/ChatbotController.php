<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ChatbotRule;
use App\Models\DefaultRespon;

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

        // Ambil semua data dari tabel chatbot_rules
        $dataList = ChatbotRule::all();

        foreach ($dataList as $data) { 
            $keywords = $data->keywords; // Tidak perlu json_decode()
            $answers = $data->answer;    // Tidak perlu json_decode()

            foreach ($keywords as $index => $keyword) { 
                $keyword = strtolower(trim($keyword));
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
                    $matchedAnswers = [$matchedAnswers]; 
                }

                // Pilih jawaban secara acak
                $matchedAnswer = $matchedAnswers[array_rand($matchedAnswers)];
                break; // Berhenti mencari ke ID lain setelah menemukan jawaban
            }
        }

        // Jika tidak ada jawaban yang cocok, ambil dari default_responses
        if (!$matchedAnswer) {
            $defaultResponse = DefaultRespon::first();
            if ($defaultResponse) {
                $defaultResponses = $defaultResponse->responses; // Tidak perlu json_decode()
                if (!empty($defaultResponses)) {
                    $matchedAnswer = $defaultResponses[array_rand($defaultResponses)];
                }
            }
        }

        return response()->json(['response' => $matchedAnswer]);
    }
}
