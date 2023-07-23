@extends('layouts.main')

@section('container')
<section id="home">
    <br>
    <br>
    <br>
    <br>
    <div class="tengah aos-init aos-animate" data-aos="fade-down">
        <h3 class="text-3xl font-bold negro">Home Page</h3>
        <br>
        <div id="clockdate">
            <div class="clockdate-wrapper">
                <div id="clock"></div>
                <div id="date"></div>
                <br>
                <h1 style="color: white" id="temperature"></h1>
                <h2 style="color: white" id="description"></h2>
                <p style="color: white" id="location"></p>
            </div>
        </div>
        <br>
        <!--<tr>
            <td>
                <button
                    class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                    </svg>
                    <a href="revanced.html">ReVanced APK (root)</a>
                </button>
            </td>
            <br>
            <br>
            <td>
            -->
        <button onclick="location.href='revanced'" type="button"
            class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
            </svg>
            YT ReVanced APK
        </button>
        </td>
        <td>
            <button onclick="location.href='ytmusic'" type="button"
                class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                </svg>
                Music ReVanced APK
            </button>
        </td>
        <br>
        <br>
        <td>
            <button onclick="location.href='spotify'" type="button"
                class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                </svg>
                Spotify Mod APK
            </button>
        </td>
        </tr>
        <br>
    </div>
</section>
<br>
<br>
<br>

<!--Javascript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/clockdate.js"></script>
<script src="js/music.js"></script>
<script src="js/weather.js"></script>
@endsection