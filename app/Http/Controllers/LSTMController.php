<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LSTMController extends Controller
{
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $response = Http::get('http://localhost:5000/probabilities');
            return response()->json($response->json());
        } else {
            return view('live');
        }
    }
}
