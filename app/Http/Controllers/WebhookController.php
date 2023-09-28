<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('webhook');
    }

    public function webhook(Request $request)
    {
        if ($request['method'] == "getUpdates" || $request['method'] == "getMe") {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $request['token'] . "/" . $request['method']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $results = curl_exec($ch);
            return view('webhook', compact('results'));
        }elseif ($request['method'] == "setWebhook") {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $request['token'] . "/" . $request['method'] . "?url=" . $request['address']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $results = curl_exec($ch);
            return view('webhook', compact('results'));
        }
    }
}
