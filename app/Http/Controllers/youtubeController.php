<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class youtubeController extends Controller
{
    public function index(){
        // if (session('search_query')) {
        //     $videoLists = $this->_videoLists(session('search_query'));
        // } else {
        //     $videoLists = $this->_videoLists('U-SIBI: Sistem Penerjemah Bahasa isyarat');
        // }

        $playlistId = 'PL4ObnhtKd0DcImL9Q0Eh4jYyN3uho_2el';
        $videoLists = $this->_videoLists($playlistId);
        return view('index', compact('videoLists','playlistId'));
    }
    
    public function results(Request $request)
    {
        session(['search_query' => $request->search_query]);
        $videoLists = $this->_videoLists($request->search_query);
        return view('results', compact('videoLists'));
    }
    public function watch($videoId, $playlistId)
    {
        $videoLists = $this->_videoLists($playlistId);
        $singleVideo = $this->_singleVideo($videoId);
        // if (session('search_query')) {
        //     $videoLists = $this->_videoLists(session('search_query'));
        // } else {
        //     $videoLists = $this->_videoLists('laravel chat');
        // }
        return view('watch', compact('singleVideo', 'videoLists', 'playlistId'));
    }

    protected function _videoLists($playlistId){
        
        $part = 'snippet';
        $country = 'BD';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 12;
        // $youTubeEndPoint = config('services.youtube.search_endpoint');
        $youTubeEndPoint = 'https://www.googleapis.com/youtube/v3/playlistItems';
        $type = 'video'; 

        // $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$keywords";
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&playlistId=$playlistId&regionCode=$country&type=$type&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        
        File::put(storage_path() . '/app/public/results.json', $response->body());
        return $results;

        if (isset($results->items)) {
            return $results;
        } else {
            return null;
        }

    }

    protected function _singleVideo($id)
    {
        $apiKey = config('services.youtube.api_key');
        $part = 'snippet';
        $url = "https://www.googleapis.com/youtube/v3/videos?part=$part&id=$id&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        // Will create a json file to see our single video details
        File::put(storage_path() . '/app/public/single.json', $response->body());
        return $results;

        if (isset($results->items)) {
            return $results;
        } else {
            return null;
        }
    }
}
