@extends('_layouts.main')

@section('body')
<div class="flex-auto mx-auto">
    <div class="prose">
        <h1> {{ $page->title }} </h1>
        <h2>by {{ $page->author }}</h2>

        @yield('projectContent')
    </div>
</div>
@endsection