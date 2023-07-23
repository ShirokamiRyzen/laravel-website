<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('webmaster', function () {
    $this->comment("
     ____                          _                                           
    |  _ \ _   _ _______ _ __   __| | ___  ___ _   _        ___ ___  _ __ ___  
    | |_) | | | |_  / _ \ '_ \ / _` |/ _ \/ __| | | |      / __/ _ \| '_ ` _ \ 
    |  _ <| |_| |/ /  __/ | | | (_| |  __/\__ \ |_| |  _  | (_| (_) | | | | | |
    |_| \_\\__, /___\___|_| |_|\__,_|\___||___/\__,_| (_)  \___\___/|_| |_| |_|
           |___/                                                               
    LARAVEL WEB BY SHIROKAMI RYZEN
    ");
})->purpose('Display an inspiring quote');
