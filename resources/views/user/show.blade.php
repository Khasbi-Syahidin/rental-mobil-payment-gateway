<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8">

            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 flex lg:flex-row flex-col lg:gap-8 sm:gap-6 gap-4">
                <img src="{{ asset($mobil->image) }}" alt="Mobiil">
            </div>
            <!-- Description Div -->

            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 items-center">
                <p
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 font-normal text-base leading-4 text-gray-600  ">
                    Merk : {{ $mobil->merk }}</p>
                <h2 class="font-semibold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 mt-4">Model : {{ $mobil->model }}</h2>



                <p class="font-normal text-base leading-6 text-gray-600  mt-7">
                    Status : {{ $mobil->status }}</p>
                <p class="font-normal text-base leading-6 text-gray-600  mt-7">
                    Ready Dari Tanggal : {{ $mobil->tanggal_awal_ready }} Sampai {{ $mobil->tanggal_akhir_ready }}</p>
                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 mt-6">Tarif : Rp.{{ $mobil->tarif }}</p>

                <div class="lg:mt-11 mt-10">
                    <div class="flex flex-col justify-between">
                        <p class="font-medium text-base leading-4 text-gray-600 ">Select quantity</p>
                        <div class="flex justify-between my-3">

                            <input type="date" name="tanggal_awal_pinjam" id="tanggal_awal_pinjam" width="100%">
                            <input type="date" name="tanggal_awal_pinjam" id="tanggal_awal_pinjam" width="100%">
                        </div>
                    </div>
                    <hr class="bg-gray-200 w-full my-2" />
                </div>

                <button
                    class="focus:outline-none focus:ring-2 hover:bg-black focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-gray-800 w-full py-5 lg:mt-12 mt-6 ">
                Pinjam Mobil
                </button>
            </div>

            <!-- Preview Images Div For larger Screen-->
        </div>
    </div>
    <footer>

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
    {{-- <img src="{{ asset($mobil->image) }}" alt="Mobiil"> --}}
    <script>
        function plus() {
            var preValue = document.getElementById("counter").value;
            document.getElementById("counter").value = parseInt(preValue) + 1;
        }

        function minus() {
            var preValue = document.getElementById("counter").value;
            if (parseInt(preValue) != 0) {
                document.getElementById("counter").value = parseInt(preValue) - 1;
            }
        }

        function rotate() {
            document.getElementById("rotateSVG").classList.toggle("rotate-180");
        }
    </script>

</body>

</html>
