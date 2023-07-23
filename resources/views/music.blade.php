<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="https://avatars.githubusercontent.com/u/101597779?s=200&v=4" rel="icon">

  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ReVanced</title>
</head>

<body>
  <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center">
        <img src="https://avatars.githubusercontent.com/u/101597779?s=200&v=4" class="h-8 mr-3" alt="ReVanced Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ReVanced</span>
      </a>
      <div class="flex md:order-2">
        <div>
          <button class="buttonmsc" onclick="toggleMusic()" id="btn-playback" data-play="false">
            <i class="fa fa-play"></i>
          </button>
          <audio id="audio" src="https://cloud.ryzendesu.com/api/name/Orange.mp3?path=/media/Orange.mp3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <a type="button" href="mailto:support@ryzendesu.com"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Email
          Me</a>
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul
          class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#home"
              class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
          </li>
          <li>
            <a href="#overview"
              class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Overview</a>
          </li>
          <li>
            <a href="#feature"
              class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Feature</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="home">
    <br>
    <br>
    <br>
    <br>
    <!-- Start of ouo.io banner code -->
    <div class="iklan">
      <a href="http://ouo.io/ref/MTXqxQ2y"><img src="http://ouo.io/images/banners/r1.jpg"
          title="ouo.io - Make short links and earn the biggest money" /></a>
    </div>
    <!-- End of ouo.io banner code -->
    <br>
    <div class="tengah aos-init aos-animate" data-aos="fade-down">
      <h3 class="text-3xl font-bold negro">Youtube ReVanced</h3>
      <br>
      <p class="font-bold negro judul">YouTube ReVanced is a modded version which offers Background Playback,
        Ad-Free content, SponsorBlock, Return YouTube Dislike and many more.</p>
      <br>
      <tr>
        <td>
          <span id="music_direct">
            <a type="button" target="_blank" href="{{ $direct_link }}"
              class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center tombolkanan">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
              </svg>{{ $button_direct }}</a>
          </span>
        </td>
        <br>
        <br>
        <td>
          <span id="music_mirror1">
            <a type="button" target="_blank" href="{{ $mirror_1 }}"
              class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center tombolkanan">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
              </svg>{{ $button_mirror1 }}</a>
          </span>
        </td>
        <td>
          <span id="music_mirror2">
            <a type="button" target="_blank" href="{{ $mirror_2 }}"
              class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center tombolkanan">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
              </svg>{{ $button_mirror2 }}</a>
          </span>
        </td>
      </tr>
      <p class="negro tengah">{{ $version }}
      </p>
      <br>
      <tr>
        <td>
          <a type="button" href="https://ouo.io/pm65tq" target="_blank"
            class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center tombolkanan">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
            </svg>MicroG</a>
        </td>
      </tr>
      <p class="negro tengah">MicroG</p>
      <p>
        <br>
        <img style="display: inline" loading="lazy" src="img/revanced/music1.jpg" alt="" width="140"
          height="300">
        <img style="display: inline" loading="lazy" src="img/revanced/music2.jpg" alt="" width="140"
          height="300">
        <img style="display: inline" loading="lazy" src="img/revanced/music3.jpg" alt="" width="140"
          height="300">
      </p>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- Start of ouo.io banner code -->
  <div class="iklan">
    <a href="http://ouo.io/ref/MTXqxQ2y"><img src="http://ouo.io/images/banners/r3.jpg"
        title="ouo.io - Make short links and earn the biggest money" /></a>
  </div>
  <!-- End of ouo.io banner code -->
  <section id="overview">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="tengah aos-init aos-animate" data-aos="fade-down">
      <h3 class="text-3xl font-bold negro">What is Revanced APK?</h3>
      <br>
      <p class="negro tengah teksmid">YouTube ReVanced is a free, customizable YouTube client that replaces the
        discontinued YouTube Vanced, providing users with similar app features and other additional modes. It also
        includes ReVanced Music, which allows users to stream their ideal music genres with all the benefits of YouTube
        Music Premium. However, the ReVanced APK is currently in its infancy and is not available as an APK, but as a
        builder that you can use to build your own apps.
      </p>
      <br>
      <p class="negro tengah teksmid">
        YouTube ReVanced is an updated project of the most liked Youtube Vanced, that includes background playback,
        ad-free content, SponsorBlock, Reverse YouTube Dislike and more.
      </p>
      <br>
      <p class="negro tengah teksmid">
        YouTube Vanced is dead and we will always cherish the simplicity it created for everyone on the platform. But we
        can’t sit back and wait for its resurgence when many other viable alternatives offer similar features and a
        better user experience. One of the most anticipated alternatives to Vanced is the official YouTube ReVanced APK
        replacement. The app is still in its infancy, but it offers some impressive tweaks to keep the core YouTube
        Vanced features and Vanced legacy alive. In this post, you will learn everything you need to know about the
        YouTube ReVanced app.
      </p>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section id="feature">
    <br>
    <br>
    <br>
    <br>
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-md mb-8 lg:mb-16 aos-init aos-animate" data-aos="fade-down">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Features</h2>
        <p class="text-gray-500 sm:text-xl dark:text-gray-400">ReVanced offering many features that original app not
          have.</p>
      </div>
      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        <div class="aos-init aos-animate" data-aos="fade-down">
          <h3 class="mb-2 text-xl font-bold dark:text-white">Secondary YouTube</h3>
          <p class="text-gray-500 dark:text-gray-400">Like YouTube Vanced, you can download Revanced as a secondary
            YouTube on your Android device unless you don’t want to delete the original version. The benefit of this
            feature is that you can revert to an older version if you need to debug a new but unfinished Revanced app.
          </p>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-down">
          <h3 class="mb-2 text-xl font-bold dark:text-white">Root and Non-Root Devices</h3>
          <p class="text-gray-500 dark:text-gray-400">You can install YouTube Revanced on both rooted and non-rooted
            devices by following a few simple steps. Still, many Android users found that the official app had not yet
            been released and abandoned the idea of creating their own Revanced APK.</p>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-down">
          <h3 class="mb-2 text-xl font-bold dark:text-white">Disable Ads</h3>
          <p class="text-gray-500 dark:text-gray-400">Revanced allows users to disable generic and video ads from the
            platform, allowing users to watch content without interruption. This enhances your app’s user experience
            through convenient and seamless streaming. I recognize the important role these ads play, especially for
            creators of the content I follow.</p>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-down">
          <h3 class="mb-2 text-xl font-bold dark:text-white">Background Play</h3>
          <p class="text-gray-500 dark:text-gray-400">You can watch YouTube videos while browsing other apps without
            sharing your screen. This is beneficial for users who want to focus on other tasks such as browsing or
            chatting while watching videos on a minimized floating screen in the background. Users can also place the
            floating screen anywhere on the Android screen.</p>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-down">
          <h3 class="mb-2 text-xl font-bold dark:text-white">Custom Branding</h3>
          <p class="text-gray-500 dark:text-gray-400">The Revanced app now lets you change the YouTube launcher icon and
            name to your liking. Custom branding redefines open source customization by giving users complete control
            over their user interface and allowing them to build the platform they prefer.</p>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-down">
          <h3 class="mb-2 text-xl font-bold dark:text-white">Old Layout</h3>
          <p class="text-gray-500 dark:text-gray-400">Some people hate change, no matter how small. I don’t blame them
            as it can be difficult to adapt to new changes.So YouTube Revanced allows you to choose old quality layouts
            on your platform as long as they are compatible with your device. These options contain 240p, 480p, 1080p,
            1440p, and more.</p>
        </div>
      </div>
    </div>
    <!-- Start of ouo.io banner code -->
    <div class="iklan">
      <a href="http://ouo.io/ref/MTXqxQ2y"><img src="http://ouo.io/images/banners/r1.jpg"
          title="ouo.io - Make short links and earn the biggest money" /></a>
    </div>
    <!-- End of ouo.io banner code -->
    <br>
    <footer class="bg-white dark:bg-gray-900">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="/" class="flex items-center">
              <img src="https://avatars.githubusercontent.com/u/101597779?s=200&v=4" class="h-8 mr-3" alt="Shirokami" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ReVanced</span>
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                </li>
                <li>
                  <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="/privacy" class="hover:underline">Privacy Policy</a>
                </li>
                <li>
                  <a href="/privacy" class="hover:underline">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://revanced.app"
              class="hover:underline">ReVanced Team</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://www.facebook.com/Nao.Tomori.UwU"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a href="https://www.instagram.com/ryzen_vermillion"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Instagram page</span>
            </a>
            <!--<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                      </svg>
                      <span class="sr-only">Twitter page</span>
                  </a>-->
            <a href="https://github.com/ShirokamiRyzen" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
            <!--<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path fill-rule="evenodd"
                              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                              clip-rule="evenodd" />
                      </svg>
                      <span class="sr-only">Dribbble account</span>
                  </a>-->
          </div>
        </div>
      </div>
    </footer>

    <!--Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/music.js"></script>
    <script>AOS.init();</script>
</body>

</html>