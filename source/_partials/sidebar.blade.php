<div id="sidebar" class="fixed w-36 bg-gray-600  top-0 z-40 transform -translate-x-full md:translate-x-0">
    <nav>
        <div class="grid grid-cols-1 min-h-screen">
            <div class="">
                <div class="hidden">
                    <a class="block pt-4 text-center text-yellow-200" href="/">
                        <span class="sr-only">Benjamin H Boruff</span>
                        {{ $page->site_title }}
                    </a>
                    <div class="text-center text-xs text-yellow-200">Developer</div>
                </div>
                <div class="mt-20">
                    <ul id="menu" class="grid grid-flow-row text-center font-semibold">
                        <li class="pt-8 pb-4"><a href="/#home" class="text-yellow-200 tracking-wider hover:underline">Home</a></li>
                        <li class="py-4"><a href="/#about" class="text-yellow-200 tracking-wider hover:underline">About</a></li>
                        <li class="py-4"><a href="/#contact" class="text-yellow-200 tracking-wider hover:underline">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
