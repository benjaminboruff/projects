---
pagination:
    collection: projects
    perPage: 3
---
@extends('_layouts.main')

@section('body')
<div class="flex-auto container mx-auto">
    {{-- <h1 class="text-3xl text-center py-2">Project Portfolio</h1> --}}
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 md:gap-4">
        <div>
            <div class="pt-4 px-4">
                <p class="text-center text-lg">Projects</p>
                <hr/>
            </div>
            <ul class="flex flex-col p-4">
                @foreach ($pagination->items as $project)
                <div>
                    <li class="rounded overflow-hidden shadow-lg py-4">
                        <a class="text-green-600 hover:underline px-2" href="{{ $project->getUrl() }}">{{ $project->title }}</a>
                        <p class="px-2">{{ $project->description }}</p>
                    </li>
                </div>
                @endforeach
            </ul>
        </div>
        <div class="md:order-first">@include('_partials.about')</div>
        <div class="md:order-last">@include('_partials.contact')</div>
    </div>
</div>
@endsection
