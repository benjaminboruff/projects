@extends('_layouts.main')

@section('body')
<div class="flex-auto mx-auto">
    <div class="prose">
        <h1 class="text-center"> {{ $page->title }} </h1>
        <a href="{{ $page->liveUrl }}">
            <img class="mx-auto" src="{{ '/assets/images/'.$page->image }}" alt="pomodoro timer image">
        </a>
        <div class="px-4">
            <h2> {{ $page->description }}</h2>
            <a href="{{ $page->githubUrl }}">on github</a>

            @yield('projectContent')
        </div>
    </div>
</div>
@endsection
