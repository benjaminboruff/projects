---
pagination:
    collection: projects
    perPage: 5
---
@extends('_layouts.landing')

@section('body')
<div>
    <div class="lg:-mt-5">
        <div class="m-2 lg:m-4">
            <p class="text-center text-lg tracking-widest">Projects</p>
            <hr />
        </div>
        <div class="md:grid md:grid-cols-3">
            <span></span>
            <ul class="md:-mx-24">
                @foreach ($pagination->items as $project)
                <div class="m-4">
                    <li class="rounded overflow-hidden shadow-lg">
                        <a class="px-2 project-text text-xl tracking-wide hover:underline " href="{{ $project->getUrl() }}">{{ $project->title }}</a>
                        <p class="px-2 prose">{{ $project->description }}</p>
                    </li>
                </div>
                @endforeach
            </ul>
            <span class="w-3/4"></span>
        </div>
    </div>
    <div class="lg:order-first">@include('_partials.about')</div>
    <div class="lg:order-last">@include('_partials.contact')</div>
</div>
@endsection
