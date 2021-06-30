@extends('_layouts.main')

@section('body')
<div class="flex-auto mx-auto">
    <div class="prose mt-6">
        <h1 class="text-center"> {{ $page->title }} </h1>
        <a href="{{ $page->liveUrl }}">
            <img class="mx-auto" src="{{ '/assets/images/'.$page->image }}" alt="{{ $page->alt }}" width="320" height="240">
        </a>
        <div class="px-4">
            <h2> {{ $page->description }}</h2>
            <a href="{{ $page->githubUrl }}">on github</a>

            @yield('projectContent')
        </div>
    </div>
    <div class="flex items-center justify-center gap-4">
        <div class="m-6">
            @if ($page->getPrevious())
            <a class="m-1" href="{{ $page->getFirst()->getPath() }}">
                <button class=" bg-gray-600 text-yellow-100  rounded-full h-10 w-10 shadow font-semibold">&lt;&lt;</button>
            </a>
            <a class="m-1" href="{{ $page->getPrevious()->getPath() }}">
                <button class="bg-gray-600 text-yellow-100 rounded-full h-10 w-10 shadow font-semibold">&lt;</button>
            </a>
            @endif
        </div>
        <div class="m-6">
            @if ($page->getNext())
            <a class="m-1" href="{{ $page->getNext()->getPath() }}">
                <button class="bg-gray-600 text-yellow-100 rounded-full h-10 w-10 shadow font-semibold">&gt;</button>
            </a>
            <a class="m-1" href="{{ $page->getLast()->getPath() }}">
                <button class="bg-gray-600 text-yellow-100 rounded-full h-10 w-10 shadow font-semibold">&gt;&gt;</button>
            </a>
            @endif
        </div>
    </div>
</div>
@endsection
