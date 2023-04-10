@extends('layouts.app')
@section('about')

{{-- Start Block --}}
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Furniture Manufacturing <br>products & brands.</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"> The furniture manufacturing industry that deals with the designing, fabrication, processing and preparation of furniture. What started small, with a single discount store and the simple idea of selling more for less, has grown over the last 50 years into the largest retailer in the world.</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                {{-- <a href="https://github.com/themesberg/landwind" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg> View on GitHub
                </a> 
                <a href="https://www.figma.com/community/file/1125744163617429490" class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg class="w-4 h-4 mr-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 300" width="1667" height="2500"><style type="text/css">.st0{fill:#0acf83}.st1{fill:#a259ff}.st2{fill:#f24e1e}.st3{fill:#ff7262}.st4{fill:#1abcfe}</style><title>Figma.logo</title><desc>Created using Figma</desc><path id="path0_fill" class="st0" d="M50 300c27.6 0 50-22.4 50-50v-50H50c-27.6 0-50 22.4-50 50s22.4 50 50 50z"/><path id="path1_fill" class="st1" d="M0 150c0-27.6 22.4-50 50-50h50v100H50c-27.6 0-50-22.4-50-50z"/><path id="path1_fill_1_" class="st2" d="M0 50C0 22.4 22.4 0 50 0h50v100H50C22.4 100 0 77.6 0 50z"/><path id="path2_fill" class="st3" d="M100 0h50c27.6 0 50 22.4 50 50s-22.4 50-50 50h-50V0z"/><path id="path3_fill" class="st4" d="M200 150c0 27.6-22.4 50-50 50s-50-22.4-50-50 22.4-50 50-50 50 22.4 50 50z"/></svg> Get Figma file
                </a> --}}
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="/images/vision.jpg" alt="hero image">
        </div>                
    </div>
</section>
{{-- End Block --}}

{{-- <section class="h-screen bg-gradient-to-b from-gray-50 to-gray-200" >
    <div class="relative p-4 bg-white dark:bg-gray-700">
        <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
            <div class="lg:col-start-2 md:pl-20">
                <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 dark:text-white sm:leading-9">
                    About Us
                </h4>
                <ul class="mt-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-bold leading-6 text-gray-900 dark:text-white">
                                    Furniture Manufacturing Industry
                                </h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 dark:text-gray-300">
                                    The furniture manufacturing industry that deals with the designing, fabrication, processing and preparation of furniture.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-bold leading-6 text-gray-900 dark:text-white">
                                    Orders, managed
                                </h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 dark:text-gray-300">
                                    All your orders in one place so you can manage your delivery, collection, asap and pre-orders in one place.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-bold leading-6 text-gray-900 dark:text-white">
                                    Email &amp; SMS Notifications
                                </h5>
                                <p class="mt-2 text-base leading-6 text-gray-500 dark:text-gray-300">
                                    Never miss a new order with notifications via your dashboard, by sound, and to your email and phone.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative mt-10 -mx-4 md:-mx-8 lg:mt-0 lg:col-start-1">
                <img src="/images/vision.jpg" alt="illustration" class="relative w-auto mx-auto rounded shadow-lg"/>
            </div>
        </div>
    </div>
</section> --}}

<div class="h-screen bg-gradient-to-b from-gray-300 to-gray-200">
    <div class="flex-wrap items-center justify-center gap-8 text-center sm:flex">
        <div class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 dark:bg-gray-800">
            <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                        </path>
                    </svg>
                </div>
            </div>
            <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                Vision
            </h3>
            <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                To provide innovative and quality products to our customer meeting their expectations.
            </p>
        </div>
        <div class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 sm:mt-16 md:mt-20 lg:mt-24 dark:bg-gray-800">
            <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                        </path>
                    </svg>
                </div>
            </div>
            <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                Mission
            </h3>
            <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                To be committed to seek growth and prosperity achieving a sustainable competitive share of the industry.
            </p>
        </div>
        <div class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 dark:bg-gray-800">
            <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                        </path>
                    </svg>
                </div>
            </div>
            <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                Values
            </h3>
            <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                To continue to bring improvements in quality, productivity, and innovative product offerings.
            </p>
        </div>
    </div>
</div>


    
@endsection