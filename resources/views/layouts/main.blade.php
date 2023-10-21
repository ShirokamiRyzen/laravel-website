<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="https://avatars.githubusercontent.com/u/76462435?v=4" rel="icon">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ $title }}</title>
    <meta name="keywords" content="ReVanced, Vanced, revanced, vanced, ytvanced, yt" />
    <meta name="description" content="Youtube ReVanced. continue the legacy of Vanced Mod" />
    <!--<script type='text/javascript' src='//midgerelativelyhoax.com/d9/5a/c6/d95ac63d8325eff1ea250cf07dbbbea0.js'></script>-->
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        BODY {
            font: 400 14px / 1.5rem system-ui, -apple-system, BlinkMacSystemFont, 'Roboto', 'Ubuntu', 'Segoe UI', 'Oxygen-Sans', 'Helvetica Neue', Arial, sans-serif;
        }

        .ignielAdBlock {
            background-color: rgba(0, 0, 0, .75);
            position: fixed;
            z-index: 999;
        }

        .ignielAdBlock svg {
            height: 8rem;
            width: 8rem;
        }

        .ignielAdBlock path {
            fill: #b82929;
        }

        .adblock-outer {
            margin: auto;
            max-height: 90vh;
            max-width: 512px;
            padding: 2rem;
            position: absolute;
        }

        .adblock-inner {
            background-color: #f4f4f4;
            border-radius: 15px;
            overflow: auto;
            padding: 2rem;
        }

        .ignielAdBlock,
        .adblock-outer {
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
        }

        .adblock-outer,
        .adblock-inner {
            align-items: center;
            display: flex;
            display: inline-flex;
        }

        .adblock-wrapper {
            margin-left: 1rem;
        }

        .adblock-title {
            font-size: 2rem;
            font-weight: bolder;
            line-height: 2.5rem;
        }

        .adblock-text {
            margin-top: 1rem;
        }

        @media screen and (max-width: 640px) {
            .adblock-outer {
                max-width: 90vw;
            }

            .ignielAdBlock svg {
                height: 5rem;
                width: 5rem;
            }

            .adblock-title {
                font-size: 1.75rem;
                line-height: 2rem;
            }
        }

        @media screen and (max-width: 480px) {
            .adblock-inner {
                flex-direction: column;
            }

            .adblock-wrapper {
                margin-left: 0;
                margin-top: 1rem;
                text-align: center;
            }
        }
    </style>
    <script>
        (function ignielAdBlock() {
            let adTitle = 'Adblock detection',
                adText = 'Please disable adblock or whitelist Ryzendesu site.',
                adPub = 'xxx',
                ad = document.createElement('script');
            ad.src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-' + adPub;
            ad.async = true;
            ad.setAttribute('crossorigin', 'anonymous');
            ad.onerror = function() {
                let a = document.createElement('div');
                a.className = 'ignielAdBlock';
                a.innerHTML =
                    '<div class=\"adblock-outer\"><div class=\"adblock-inner\"><div class=\"adblock-icon\"><svg viewBox=\"0 0 24 24\"><path d=\"M3 10.5V15.5C3 20.19 6.81 24 11.5 24S20 20.19 20 15.5V7C20 5.62 18.88 4.5 17.5 4.5C17.33 4.5 17.16 4.5 17 4.55V4C17 2.62 15.88 1.5 14.5 1.5C14.27 1.5 14.04 1.53 13.83 1.59C13.46 .66 12.56 0 11.5 0C10.27 0 9.25 .89 9.04 2.06C8.87 2 8.69 2 8.5 2C7.12 2 6 3.12 6 4.5V8.05C5.84 8 5.67 8 5.5 8C4.12 8 3 9.12 3 10.5M5 10.5C5 10.22 5.22 10 5.5 10S6 10.22 6 10.5V15C7.66 15 9 16.34 9 18H11C11 15.95 9.77 14.19 8 13.42V4.5C8 4.22 8.22 4 8.5 4S9 4.22 9 4.5V11H11V2.5C11 2.22 11.22 2 11.5 2S12 2.22 12 2.5V11H14V4C14 3.72 14.22 3.5 14.5 3.5S15 3.72 15 4V12H17V7C17 6.72 17.22 6.5 17.5 6.5S18 6.72 18 7V15.5C18 19.09 15.09 22 11.5 22S5 19.09 5 15.5V10.5Z\"></path></svg></div><div class=\"adblock-wrapper\"><div class=\"adblock-title\">' +
                    adTitle + '</div><div class=\"adblock-text\">' + adText + '</div></div></div></div>';
                document.body.append(a);
                document.body.style.overflow = 'hidden';
            };
            document.head.appendChild(ad);
        })();
    </script>
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="https://avatars.githubusercontent.com/u/76462435?v=4" class="h-8 mr-3" alt="shirokami">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ShirokamiRyzen</span>
            </a>
            <div class="flex md:order-2">
                <div>
                    <button class="buttonmsc" onclick="toggleMusic()" id="btn-playback" data-play="false">
                        <i class="fa fa-play"></i>
                    </button>
                    <audio id="audio" src="{{ $music_link }}">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </div>
                <a type="button" href="mailto:support@ryzendesu.com"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Email
                    Me</a>
            </div>
        </div>
    </nav>

    @yield('container')

    <!-- Start of ouo.io banner code -->
    <div class="iklan">
        <<script type="text/javascript">
            atOptions = {
                'key': '16fefe43179a255f17bf99cf33bf6e32',
                'format': 'iframe',
                'height': 90,
                'width': 728,
                'params': {}
            };
            document.write('<scr' +
                'ipt type="text/javascript" src="//midgerelativelyhoax.com/16fefe43179a255f17bf99cf33bf6e32/invoke.js"></scr' +
                'ipt>');
        </script>
    </div>
    <!-- End of ouo.io banner code -->
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ $github }}" class="flex items-center">
                        <img src="https://avatars.githubusercontent.com/u/76462435?v=4" class="h-8 mr-3"
                            alt="Shirokami" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ShirokamiRyzen</span>
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
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="{{ $github }}" class="hover:underline">Shirokami Ryzen</a>. All Rights
                    Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="{{ $facebook }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="{{ $instagram }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="{{ $github }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
