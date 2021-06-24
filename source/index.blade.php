@extends('_layouts.main')

@section('body')
<div class="flex-auto container mx-auto">
    <h1 class="text-3xl font-bold text-center">Hello world!</h1>
    @foreach ($projects as $project)
    <li>{{ $project->title }}</li>
    @endforeach
</div>
@endsection