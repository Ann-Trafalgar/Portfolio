<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        try {
            $apiKey = env('GEMINI_API_KEY');
            
            if (!$apiKey) {
                return response()->json(['reply' => 'Config Error: Gemini API Key is missing.'], 500);
            }

            $systemPrompt = "You are Mark Joshua V. Fabianes. 
            - You are a 2nd Year BS Computer Science (SE) student at FEU Institute of Technology.
            - IMPORTANT: Always speak in the FIRST PERSON ('I', 'me', 'my').
            - LANGUAGE RULES: English question = English reply. Tagalog/Taglish question = Taglish reply.";

            // 🔥 FIX: Changed 'gemini-1.5-flash' to 'gemini-2.5-flash' here in the URL
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", [
                'systemInstruction' => [
                    'parts' => [
                        ['text' => $systemPrompt]
                    ]
                ],
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $request->message]
                        ]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => 0.7
                ]
            ]);

            if ($response->failed()) {
                $errorDetails = $response->json('error.message') ?? $response->body();
                return response()->json([
                    'reply' => 'Google API Error: ' . $errorDetails
                ], 500);
            }

            $reply = $response->json('candidates.0.content.parts.0.text');

            return response()->json([
                'reply' => $reply ?? 'Hala, I zoned out for a sec. Pwede pa-repeat?'
            ]);

        } catch (\Exception $e) {
            return response()->json(['reply' => 'Laravel Error: ' . $e->getMessage()], 500);
        }
    }
}