<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Index",

        //music link variable
        "music_link" => "https://cloud.ryzendesu.com/api/raw/?path=/Media/music/7!!-Orange_(Instrumental).mp3"
    ]);
});

Route::get('/privacy', function () {
    return view('eula', [
        "title" => "Privacy"
    ]);
});

Route::get('/revanced', function () {
    return view('revanced', [
        "direct_link" => "https://cloud.ryzendesu.com/api/raw/?path=/ReVanced/youtube/youtube-revanced_v18.23.35.apk",
        "mirror_1" => "https://github.com/ShirokamiRyzen/revanced-creator/releases/download/Youtube/youtube-revanced_v18.23.35.apk",
        "mirror_2" => "https://bayfiles.com/oaY6M43dze/youtube_revanced_v18_23_35_apk",
    ],[
        "button_direct" => "Direct Link",
        "button_mirror1" => "Mirror Link 1",
        "button_mirror2" => "Mirror Link 2",

        "version" => "Version: 18.23.35"
    ]);
});

Route::get('/ytmusic', function () {
    return view('music', [
        "direct_link" => "https://cloud.ryzendesu.com/api/raw/?path=/ReVanced/youtube_music/youtube-music-revanced_v5.51.50.apk",
        "mirror_1" => "https://github.com/ShirokamiRyzen/revanced-creator/releases/download/YT_Music/youtube-music-revanced_v5.51.50.apk",
        "mirror_2" => "https://bayfiles.com/Y8XaM534z8/youtube_music_revanced_v5_51_50_apk"
    ],[
        "button_direct" => "Direct Link",
        "button_mirror1" => "Mirror Link 1",
        "button_mirror2" => "Mirror Link 2",

        "version" => "Version: 5.51.50"
    ]);
});

Route::get('/spotify', function () {
    return view('spotify', [
        "direct_link" => "https://cloud.ryzendesu.com/api/raw/?path=/Spotify/Spotify.v8.8.48.523.Merged.apk",
        "mirror_1" => "https://github.com/ShirokamiRyzen/revanced-creator/releases/download/Spotify/Spotify.v8.8.48.523.Merged.apk",
        "mirror_2" => "https://bayfiles.com/i3YaMf38z5/Spotify_v8_8_48_523_Merged_apk"
    ],[
        "button_direct" => "Direct Link",
        "button_mirror1" => "Mirror Link 1",
        "button_mirror2" => "Mirror Link 2",

        "version" => "Version: 8.8.48.523"
    ]);
});