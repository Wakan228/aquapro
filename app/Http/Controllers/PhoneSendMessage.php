<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhoneSendMessage extends Controller
{
    //
    static public function send($phone, $text)
    {
        // Данные для отправки
        $data = [
            'phone' => [$phone],
            'message' => "$text",
            "src_addr" => config("phone_auth.src_addr")
        ];

        // Заголовки запроса
        $headers = [
            'Authorization' => 'Bearer ' . config("phone_auth.authorize_token"),
            'Content-Type' => 'application/json',
        ];

        // Отправка POST-запроса с JSON-данными и заголовками
        $response = Http::withHeaders($headers)
            ->post(config("phone_auth.link"), $data);

        // Получение ответа
        $responseBody = $response->body();
        $responseStatusCode = $response->status();
        return $responseStatusCode;
    }
}
