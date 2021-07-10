---
pagination:
    collection: projects
    perPage: 5
---
@extends('_layouts.landing')

@section('body')
<div>
    <div>
        <div>
            <div class="p-2 lg:p-4">
                <p class="text-center text-lg tracking-widest">Projects</p>
                <hr/>
            </div>
            <ul class="flex flex-col p-4">
                @foreach ($pagination->items as $project)
                <div class="md:mx-12  lg:mx-44 xl:mx-96 ">
                    <li class="rounded overflow-hidden shadow-lg py-4 xl:mx-56">
                        <a class="px-2 project-text text-xl tracking-wide hover:underline " href="{{ $project->getUrl() }}">{{ $project->title }}</a>
                        <p class="px-2 prose">{{ $project->description }}</p>
                    </li>
                </div>
                @endforeach
            </ul>
        </div>
        <div class="lg:order-first">@include('_partials.about')</div>
        <div class="lg:order-last">@include('_partials.contact')</div>
    </div>
</div>
@endsection
