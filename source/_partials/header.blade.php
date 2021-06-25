<header>
    <div class="bg-gray-600 p-5">
        <nav class="flex justify-between">
            <div class="pr-8 md:pr-o">
                <a class="block text-yellow-200" href="/">
                    <span class="sr-only">Benjamin H Boruff</span>
                    {{ $page->site_title }}
                </a>
                <div class="text-center text-xs text-yellow-200">Developer</div>
            </div>
            <div class="order-first md:order-2 pt-2 md:pt-0">
                <svg id="menu-arrow" class="md:invisible fill-current text-yellow-200 transition duration-500 ease-in-out transform" viewBox='0 0 140 140' width='24' height='24' xmlns='http://www.w3.org/2000/svg'>
                    <g>
                        <path d='m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z' fill='' />
                    </g>
                </svg>
            </div>
            <div class="md:order-last">
                <ul id="menu" class="hidden md:flex md:flex-row font-semibold">
                    <li><a href="/#home" class="text-yellow-200 hover:underline pr-5">Home</a></li>
                    <li><a href="/#about" class="text-yellow-200 hover:underline pr-5">About</a></li>
                    <li><a href="/#contact" class="text-yellow-200 hover:underline pr-5">Contact</a></li>
                </ul>
            </div>

        </nav>
    </div>
</header>
