@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">{{ $page->title }}</h1>
        <div class="prose max-w-full">
            {!! $page->content !!}
        </div>
    </div>
@endsection