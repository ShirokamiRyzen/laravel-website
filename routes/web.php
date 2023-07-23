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
    return view('index');
});

Route::get('/privacy', function () {
    return view('eula');
});

Route::get('/revanced', function () {
    return view('revanced', [
        "direct_link" => "https://cloud.ryzendesu.com/api/raw/?path=/YT_ReVanced/youtube-revanced_v18.23.35.apk",
        "mirror_1" => "https://github.com/ShirokamiRyzen/revanced-creator/releases/download/Youtube/youtube-revanced_v18.23.35.apk",
        "mirror_2" => "#"
    ],
    [
        "button_direct" => "Direct Link",
        "button_mirror1" => "Mirror Link 1",
        "button_mirror2" => "(Broken) Link 2",

        "version" => "Version: 18.23.35"
    ]);
});

Route::get('/ytmusic', function () {
    return view('music', [
        "direct_link" => "https://cloud.ryzendesu.com/api/raw/?path=/Music_ReVanced/youtube-music-revanced_v5.51.50.apk",
        "mirror_1" => "https://github.com/ShirokamiRyzen/revanced-creator/releases/download/YT_Music/youtube-music-revanced_v5.51.50.apk",
        "mirror_2" => "#"
    ],
    [
        "button_direct" => "Direct Link",
        "button_mirror1" => "Mirror Link 1",
        "button_mirror2" => "(Broken) Link 2",

        "version" => "Version: 5.51.50"
    ]);
});

Route::get('/spotify', function () {
    return view('spotify', [
        "direct_link" => "https://cloud.ryzendesu.com/api/raw/?path=/Spotify/Spotify%20v8.8.48.523%20(Merged).apk",
        "mirror_1" => "https://github.com/ShirokamiRyzen/revanced-creator/releases/download/Spotify/Spotify.v8.8.48.523.Merged.apk",
        "mirror_2" => "#"
    ],
    [
        "button_direct" => "Direct Link",
        "button_mirror1" => "Mirror Link 1",
        "button_mirror2" => "(Broken) Link 2",

        "version" => "Version: 8.8.48.523"
    ]);
});