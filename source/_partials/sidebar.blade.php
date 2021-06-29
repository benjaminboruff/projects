<div id="sidebar" class="fixed md:relative w-36 lg:w-40 xl:w-48 bg-gray-600  top-0 z-40 transform -translate-x-full md:translate-x-0">
    <nav>
        <div class="grid grid-cols-1 min-h-screen">
            <div class="">
                <div class="hidden lg:block">
                    <a class="block pt-4 text-center text-yellow-200" href="/">
                        <span class="sr-only">Benjamin H Boruff</span>
                        {{ $page->site_title }}
                    </a>
                    <div class="text-center text-xs text-yellow-200">Developer</div>
                </div>
                <div class="mt-20 md:mt-10">
                    <ul id="menu" class="grid grid-flow-row text-center font-semibold">
                        <li class="pt-8 pb-4"><a href="/#home" class="text-yellow-200 hover:underline tracking-wider">Home</a></li>
                        <li class="py-4"><a href="/#about" class="text-yellow-200 hover:underline tracking-wider">About</a></li>
                        <li class="py-4"><a href="/#contact" class="text-yellow-200 hover:underline tracking-wider">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
