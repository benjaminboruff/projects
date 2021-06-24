---
pagination:
    collection: projects
    perPage: 3
---

@extends('_layouts.project')

@section('body')
<div class="flex-auto container mx-auto">
    <h1 class="text-3xl font-bold text-center">Hello world!</h1>
    @foreach ($pagination->items as $project)
    <a class="text-indigo-600 hover:underline" href="{{ $project->getUrl() }}">{{ $project->title }}</a>
    <p>by {{ $project->author }}</p>
    <p>Description: {{ $project->description }}</p>
    <p>{!! $project->getContent() !!}</p>
    <hr />
    @endforeach
</div>
@endsection