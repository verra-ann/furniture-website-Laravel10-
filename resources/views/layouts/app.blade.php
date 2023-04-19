<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    {{-- Navbar Content --}}
    <header class="backdrop-blur-md bg-white-opacity-30 fixed w-full top-0 left-0 right-0 z-20 border-b border-gray-200 dark:border-gray-600">
    {{-- <header class="absolute top-0 left-0 right-0 z-20"> --}}
        <nav class="container px-6 py-4 mx-auto md:px-12">
            <div class="items-center justify-between md:flex">
                <div class="flex items-center justify-between">
                    <a href="/" class="text-white">
                        <svg class="w-8 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Capa 1" viewBox="0 0 16.16 12.57">
                            <defs>
                            </defs>
                            <path d="M14.02 4.77v7.8H9.33V8.8h-2.5v3.77H2.14v-7.8h11.88z">
                            </path>
                            <path d="M16.16 5.82H0L8.08 0l8.08 5.82z">
                            </path>
                        </svg>
                    </a>
                    {{-- <div class="md:hidden"> --}}
                        <button class="text-white focus:outline-none md:hidden" data-collapse-toggle="mobile-menu" type="button">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </button>
                    {{-- </div> --}}
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300" href="/about">About us</a>
                        </li>
                        <li>
                            <a class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300" href="/blog">Blog</a>
                        </li>
                        <li>
                            <a class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300" href="/contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('home')
    @yield('about')
    @yield('blog')
</body>
<!-- Nav JavaScript -->
<script>
    const toggleButton = document.querySelector('[data-collapse-toggle="mobile-menu"]');
    const menu = document.querySelector('#mobile-menu');
    
    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>
<!-- Nav JavaScript -->

    <footer class="bg-white dark:bg-gray-800 pt-4 pb-8 xl:pt-8">
        <div class="max-w-screen-lg px-4 mx-auto text-gray-400 xl:max-w-screen-xl sm:px-6 md:px-8 dark:text-gray-300">
            @yield('contact')
        </div>
    </footer>
</html>