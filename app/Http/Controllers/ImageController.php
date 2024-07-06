<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// class ImageController extends Controller
// {
//     public function upload(Request $request)
//     {
//         $request->validate([
//             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         $image = $request->file('image');
//         $response = Http::attach('file', file_get_contents($image), $image->getClientOriginalName())
//                         ->post('http://localhost:5000/predict');

//         return view('resultCNN', ['response' => $response->json()]);
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $response = Http::attach('file', file_get_contents($image), $image->getClientOriginalName())
                        ->post('http://localhost:5000/predict');

        return back()->with('response', $response->json());
    }
}

