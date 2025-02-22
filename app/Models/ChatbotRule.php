<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OpenAI\Client as OpenAI;


class ChatbotRule extends Model
{
    protected $table = 'chatbot_rules';
    protected $fillable = ['keywords', 'answer'];
    protected $casts = [
        'keywords' => 'array',
        'answer' => 'array'
    ];
}
