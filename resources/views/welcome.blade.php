<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/sidebar.js'])
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="antialiased m-0">

    <section>
        <div class="w-full relative pb-10 px-6 xl:px-0">
            <img class="absolute w-full inset-0 dark:hidden h-full object-cover object-center"
                src="https://cdn.tuk.dev/assets/templates/weCare/hero2-bg.png" alt="we care family" />
            <nav class="lg:hidden relative z-40">
                <div class="flex py-6 justify-between items-center px-4">
                    <div>
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/right_aligned_with_searchbar_Svg3.svg"
                            alt="logo" />
                    </div>
                    <div class="flex items-center">
                        <ul id="list"
                            class="hidden p-2 border-r bg-white absolute rounded top-0 left-0 right-0 shadow mt-16 md:mt-16">
                            <li
                                class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <a href="javascript:void(0)">
                                    <span class="ml-2 font-bold">Product</span>
                                </a>
                            </li>
                            <li
                                class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <a href="javascript:void(0)">
                                    <span class="ml-2 font-bold">Informasi Transaksi</span>
                                </a>
                            </li>
                            <li class="flex flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center"
                                onclick="dropdownHandler(this)">
                                <a href="javascript:void(0)">
                                    <span class="ml-2 font-bold">Informasi Akun</span>
                                </a>
                            </li>
                            <li
                                class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <a href="javascript:void(0)">
                                    <span class="ml-2 font-bold">Dashboard</span>
                                </a>
                            </li>
                            <li class="flex flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center"
                                onclick="dropdownHandler(this)">
                                <a href="javascript:void(0)">
                                    <span class="ml-2 font-bold">Bantuan</span>
                                </a>
                            </li>
                            <li class="flex flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center"
                                onclick="dropdownHandler(this)">
                                <a href="javascript:void(0)">
                                    <span class="ml-2 font-bold">Logout</span>
                                </a>
                            </li>
                        </ul>
                        <div class="xl:hidden dark:bg-white">
                            <img id="open" onclick="MenuHandler(true)"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/right_aligned_with_searchbar_Svg1.svg"
                                alt="menu" />
                            <div id="close" class="hidden close-m-menu" onclick="MenuHandler(false)">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/right_aligned_with_searchbar_Svg2.svg"
                                    alt="cross" />
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav role="navigation" aria-label="Main" tabindex="0"
                class="hidden relative z-10 w-full lg:flex justify-between items-center p-20">
                <div class="w-1/6">
                    <a tabindex="0" aria-label="we care company logo" href="javascript:void(0)">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/right_aligned_with_searchbar_Svg3.svg"
                            alt="logo" />
                    </a>
                </div>
                <div class="w-5/6">
                    <div class="flex items-center justify-center">
                        <ul class="text-gray-800 lg:space-x-8 flex items-center leading-none">
                            <li>
                                <a class="hover:text-indigo-500 text-lg focus:text-indigo-500"
                                    href="#product">Products</a>
                            </li>
                            <li class="ml-4 hover:text-indigo-500 ">
                                <a class="focus:text-indigo-500 text-lg" href="javascript:void(0)">Informasi</a>
                            </li>
                            <li class="ml-4 hover:text-indigo-500 focus:text-indigo-500">
                                <a class="focus:text-indigo-500 text-lg" href="javascript:void(0)">Bantuan</a>
                            </li>
                            <li class="ml-4 hover:text-indigo-500 focus:text-indigo-500">
                                <a class="focus:text-indigo-500 text-lg" href='#contact'>Contact</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="w-fit justify-end relative inline-block text-left">
                    @auth
                        {{-- Tombol logout atau aksi lain --}}
                        @if (auth()->user() && auth()->user()->image == '')
                            <img type="button" id="menu-button" aria-expanded="true" aria-haspopup="true"
                                class="rounded-full cursor-pointer dropdown-toggle" width="45"
                                src="data:image/png;base64,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"
                                alt="">
                        @else
                            <img id="menu-button" aria-expanded="true" aria-haspopup="true"
                                class="rounded-full cursor-pointer" width="45"
                                src="{{ asset('${auth()->user()->image}') }}" alt="">
                        @endforelse
                    @else
                        <div class="pl-40">
                            <a href="{{ route('login') }}">
                                <button role="button" aria-label="live chat"
                                    class="focus:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 hover:bg-indigo-600 text-white px-6 py-2 font-semibold rounded focus:outline-none">Login/Register</button>
                            </a>
                        </div>
                    </div>
                @endauth

        </div>
        </nav>
        <div class="pt-32 md:pb-32 pb-20 lg:flex items-center relative z-10 container mx-auto">
            <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0">
                <img tabindex="0" role="img" aria-label="people smiling" class="mx-auto"
                    src="{{ asset('image/mobil.png') }}" alt="people smiling" />
            </div>
            <div role="contentinfo" class="w-full lg:w-1/2 h-full pl-4 md:pl-12">
                <p tabindex="0" class="text-indigo-700 uppercase text-1xl mb-4">Sewa Mobil Jadi Lebih Mudah
                    bersama</p>
                <h1 tabindex="0" class="text-indigo-700 text-5xl lg:text-6xl font-black mb-8">Sewa Mobil Bogor
                </h1>

            </div>
        </div>
        </div>
    </section>
    <section id="product">

        <div class="mx-auto container px-6 xl:px-0 py-12">
            <div class="flex flex-col">
                <div class="flex flex-col justify-center">
                    <div class="relative">
                        <img class="sm:block w-full" src="{{ asset('image/iklan.png') }}" alt="sofa" />
                    </div>
                </div>
                <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center">
                    @foreach ($mobils as $mobil)
                        <a href="{{ route('mobil.show', $mobil->id) }}">
                            <div
                                class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-100 dark:hover:bg-gray-700 sm:p-2 py-3 px-1 flex justify-center items-center">
                                <img class="group-hover:opacity-60 transition duration-500" src="{{ $mobil->image }}"
                                    alt="sofa-2" />
                                <div
                                    class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                                    <div>
                                        <p
                                            class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 ">
                                            {{ $mobil->merk }}</p>
                                    </div>
                                    <div>
                                        <p
                                            class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 ">
                                            {{ $mobil->model }}</p>
                                    </div>
                                </div>
                                <div
                                    class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                                    <button
                                        class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5">
                                        @if ($mobil->status == 'Ready')
                                            Mobil Ready
                                        @else
                                            Mobil Not Ready
                                        @endif
                                    </button>

                                    {{-- <button --}}
                                    {{-- class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button> --}}
                                </div>
                                <div
                                    class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                                    <button>
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg"
                                            alt="add">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg"
                                            alt="add">
                                    </button>
                                    <button>
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg"
                                            alt="view">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                            alt="view">
                                    </button>
                                    <button>
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg"
                                            alt="like">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg"
                                            alt="like" />
                                    </button>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <footer id="contact">

        <div class="pt-12 xl:pt-14 bg-gray-800">
            <div tabindex="0" aria-label="footer"
                class="focus:outline-none w-full bg-gray-800 border-gray-300 dark:border-gray-700 border-t lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto">
                <div class="container py-12">
                    <div class="xl:flex lg:flex md:flex pt-6">
                        <div class="w-11/12 xl:w-3/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0">
                            <div class="flex items-center mb-6 xl:mb-0 lg:mb-0">
                                <div aria-label="logo" role="img">
                                    {{-- <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg1.svg" alt="logo"> --}}
                                </div>
                                <p tabindex="0" class="focus:outline-none ml-3 dark:text-white font-bold text-xl">
                                    Sewa Mobil</p>
                            </div>
                        </div>
                        <div
                            class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex flex-col xl:justify-start pl-3 sm:pl-0">
                            <h2 tabindex="0"
                                class="focus:outline-none text-gray-800 dark:text-white font-bold text-xl mb-6">
                                Community</h2>
                            <ul>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">About Us</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Guidelines and how to</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Quote from the best</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">How to start a blog</a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex flex-col xl:justify-start pl-3 sm:pl-0">
                            <h2 tabindex="0"
                                class="focus:outline-none text-gray-800 dark:text-white font-bold text-xl mb-6">Getting
                                Started</h2>
                            <ul>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">About Us</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Guidelines and how to</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Quote from the best</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">How to start a blog</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Quote from the best</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Guidelines and how to</a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex flex-col xl:justify-start pl-3 sm:pl-0">
                            <h2 tabindex="0"
                                class="focus:outline-none text-gray-800 dark:text-white font-bold text-xl mb-6">
                                Resources</h2>
                            <ul>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Accessibility</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Usability</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Marketplace</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Design & Dev</a>
                                </li>
                                <li class="text-base text-gray-800 dark:text-gray-200 hover:text-gray-700 mb-5">
                                    <a tabindex="0" class="focus:underline focus:outline-none"
                                        href="javascript:void(0)">Marketplace</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="xl:flex flex-wrap justify-between xl:mt-24 mt-16 pb-6 pl-3 sm:pl-0">
                        <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0">
                            <p tabindex="0" class="focus:outline-none text-gray-800 dark:text-white text-base">2020
                                Sewa Mobil. All Rights Reserved</p>
                        </div>
                        <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0">
                            <ul class="xl:flex lg:flex md:flex sm:flex justify-between">
                                <li class="text-gray-800 dark:text-white hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a class="focus:outline-none focus:underline" href="javascript:void(0)">Terms of
                                        service</a>
                                </li>
                                <li class="text-gray-800 dark:text-white hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a class="focus:outline-none focus:underline" href="javascript:void(0)">Privacy
                                        Policy</a>
                                </li>
                                <li class="text-gray-800 dark:text-white hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a class="focus:outline-none focus:underline"
                                        href="javascript:void(0)">Security</a>
                                </li>
                                <li class="text-gray-800 dark:text-white hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a class="focus:outline-none focus:underline"
                                        href="javascript:void(0)">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0 mt-8 lg:mt-8 xl:mt-0">
                            <div
                                class="flex justify-start sm:justify-start xl:justify-end space-x-6 pr-2 xl:pr-0 lg:pr-0 md:pr-0 sm:pr-0">
                                <div>
                                    <a aria-label="Twitter" role="link" href="javascript:void(0)">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg2.svg"
                                            alt="Twitter">
                                    </a>
                                </div>
                                <div>
                                    <a aria-label="Instagram" role="link" href="javascript:void(0)">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg3.svg"
                                            alt="Instagram">
                                    </a>
                                </div>
                                <div>
                                    <a aria-label="Dribble" role="link" href="javascript:void(0)">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg4.svg"
                                            alt="Dribble">
                                    </a>
                                </div>
                                <div>
                                    <a aria-label="Github" role="link" href="javascript:void(0)">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg5.svg"
                                            alt="Github">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <style>
        /* Top menu */
        .top-100 {
            animation: slideDown 0.5s ease-in-out;
        }

        @keyframes slideDown {
            0% {
                top: -50%;
            }

            100% {
                top: 0;
            }
        }

        * {
            outline: none !important;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-tap-highlight-color: transparent;
        }
    </style>


    <script>
        // Top menu
        const MenuHandler = (flag) => {
            if (flag) {
                document.getElementById("list").classList.add("top-100");
                document.getElementById("list").classList.remove("hidden");
                document.getElementById("close").classList.remove("hidden");
                document.getElementById("open").classList.add("hidden");
            } else {
                document.getElementById("list").classList.remove("top-100");
                document.getElementById("list").classList.add("hidden");
                document.getElementById("close").classList.add("hidden");
                document.getElementById("open").classList.remove("hidden");
            }
        };
    </script>
</body>

</html>
