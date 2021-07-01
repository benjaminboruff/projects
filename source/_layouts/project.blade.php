@extends('_layouts.main')

@section('body')
<div class="flex-auto mx-auto">
    <div class="prose">
        <div class="flex flex-col justify-center">
            <div class="-mt-4">
                <p class="text-2xl text-center font-semibold"> {{ $page->title }} </p>
            </div>
            <div class="self-center">
                <a class="" href="{{ $page->githubUrl }}">
                    <svg class="fill-current text-gray-600" width="33" height="33" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 
                        0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 
                        1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 
                        0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 
                        3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 
                        1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                </a>
            </div>
        </div>
        <a href="{{ $page->liveUrl }}">
            <img class="mx-auto" src="{{ '/assets/images/'.$page->image }}" alt="{{ $page->alt }}" width="320" height="240">
        </a>
        <div class="px-4">
            <p class="text-center "> {{ $page->description }}</p>
            @yield('projectContent')
        </div>
    </div>
    <div class="flex items-center justify-center gap-4">
        <div class="m-3">
            @if ($page->getPrevious())
            <a class="m-1" href="{{ $page->getFirst()->getPath() }}">
                <button title="First" class=" bg-gray-600 text-yellow-100  rounded-full h-10 w-10 shadow font-semibold">&lt;&lt;</button>
            </a>
            <a class="m-1" href="{{ $page->getPrevious()->getPath() }}">
                <button title="Previous" class="bg-gray-600 text-yellow-100 rounded-full h-10 w-10 shadow font-semibold">&lt;</button>
            </a>
            @endif
        </div>
        <div>
            <a href="/#">
                <svg class="fill-current text-gray-600" width="36" height="36" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 463.89 438.88" version="1.0">
                    <g id="layer1" transform="translate(-42.339 -276.34)">
                        <title>Home</title>
                        <path id="rect2391" d="m437.15 499.44zl-162.82-144.19-162.9 144.25v206.12c0 5.33 4.3 9.6 9.62 9.6h101.81v-90.38c0-5.32 
                        4.27-9.62 9.6-9.62h83.65c5.33 0 9.6 4.3 9.6 9.62v90.38h101.84c5.32 0 9.6-4.27 9.6-9.6v-206.18zm-325.72 0.06z" />
                        <path id="path2399" d="m273.39 276.34l-231.05 204.59 24.338 27.45 207.65-183.88 207.61 183.88 24.29-27.45-231-204.59-0.9 
                        1.04-0.94-1.04z" />
                        <path id="rect2404" d="m111.43 305.79h58.57l-0.51 34.69-58.06 52.45v-87.14z" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="m-3">
            @if ($page->getNext())
            <a class="m-1" href="{{ $page->getNext()->getPath() }}">
                <button title="Next" class="bg-gray-600 text-yellow-100 rounded-full h-10 w-10 shadow font-semibold">&gt;</button>
            </a>
            <a class="m-1" href="{{ $page->getLast()->getPath() }}">
                <button title="Last" class="bg-gray-600 text-yellow-100 rounded-full h-10 w-10 shadow font-semibold">&gt;&gt;</button>
            </a>
            @endif
        </div>
    </div>
</div>
@endsection
