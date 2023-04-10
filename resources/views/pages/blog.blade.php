@extends('layouts.app')
@section('blog')
    
<div class="w-full p-16 bg-gray-400">
    <div class="flex items-end justify-between mb-12 header">
        <div class="title">
            <p class="mb-4 text-4xl font-bold text-gray-800">
                Lastest articles
            </p>
            {{-- <p class="text-2xl font-light text-white-100">
                All article are verified by 2 experts and valdiate by the CTO
            </p> --}}
        </div>
        {{-- <div class="text-end">
            <form class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
                <div class=" relative ">
                    <input type="text" id="&quot;form-subscribe-Search" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter a title"/>
                </div>
                    <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-gray-800 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                        Search
                    </button>
            </form>
        </div> --}}
        </div>
        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 xl:grid-cols-3">
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80">
                <a href="#" class="block w-full h-full">
                    <img alt="blog photo" src="/images/blog1.png" class="object-cover w-full max-h-40"/>
                    <div class="w-full p-4 bg-white dark:bg-gray-800">
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">
                            Work at home
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            Work at home, remote, is the new age of the job, every person can work at home....
                        </p>
                        <div class="flex items-center mt-4">
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 March 2023 - 6 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80">
                <a href="#" class="block w-full h-full">
                    <img alt="blog photo" src="/images/blog2.png" class="object-cover w-full max-h-40"/>
                    <div class="w-full p-4 bg-white dark:bg-gray-800">
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">
                            Mix and Match
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            Learn how to mix and match your favorite furniture!
                        </p>
                        <div class="flex items-center mt-4">
                            
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 March 2023 - 6 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80">
                <a href="#" class="block w-full h-full">
                    <img alt="blog photo" src="/images/blog3.png" class="object-cover w-full max-h-40"/>
                    <div class="w-full p-4 bg-white dark:bg-gray-800">
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">
                            Interior Design
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            Learn few types of interior design that's popular nowadays!
                        </p>
                        <div class="flex items-center mt-4">
                            
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 March 2023 - 6 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80">
                <a href="#" class="block w-full h-full">
                    <img alt="blog photo" src="/images/blog4.png" class="object-cover w-full max-h-40"/>
                    <div class="w-full p-4 bg-white dark:bg-gray-800">
                        <p class="font-medium text-indigo-500 text-md">
                        </p>
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">
                            Home Decor
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            These 5 things have no place in your home once you turn 30!
                        </p>
                        <div class="flex items-center mt-4">
                            
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 March 2023 - 6 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80">
                <a href="#" class="block w-full h-full">
                    <img alt="blog photo" src="/images/blog5.png" class="object-cover w-full max-h-40"/>
                    <div class="w-full p-4 bg-white dark:bg-gray-800">
                        <p class="font-medium text-indigo-500 text-md">
                        </p>
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">
                            Total Hack
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            Learn furniture hacks for revamping what you already have (on a tight budget)
                        </p>
                        <div class="flex items-center mt-4">
                           
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 mars 2029 - 6 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80">
                <a href="#" class="block w-full h-full">
                    <img alt="blog photo" src="/images/blog6.png" class="object-cover w-full max-h-40"/>
                    <div class="w-full p-4 bg-white dark:bg-gray-800">
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">
                            Choosing Furniture
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            These 10 ways on how to choose the right furniture for you!
                        </p>
                        <div class="flex items-center mt-4">
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    Jean Jacques
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    20 March 2023 - 6 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    
@endsection