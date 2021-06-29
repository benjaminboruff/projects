---
pagination:
    collection: projects
    perPage: 3
---
@extends('_layouts.main')

@section('body')
<div class="mt-6">
    {{-- <a href="/#"><h1 class="text-3xl text-center pt-4 pb-2 mg:hidden">{{ $page->site_title }}</h1></a> --}}
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4">
        <div>
            <div class="p-2 lg:p-4">
                <p class="text-center text-lg tracking-widest">Projects</p>
                <hr/>
            </div>
            <ul class="flex flex-col p-4">
                @foreach ($pagination->items as $project)
                <div>
                    <li class="rounded overflow-hidden shadow-lg py-4">
                        <a class="px-2 text-green-600 tracking-wide hover:underline " href="{{ $project->getUrl() }}">{{ $project->title }}</a>
                        <p class="px-2 prose">{{ $project->description }}</p>
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
