@extends('layouts.main')

@section('title')
    Postingan
@endsection
<div class="mt-5">
@section('content')
    @forelse ($posts as $key => $post)
        {{ $key }}. {{ $post['title'] }} <br>
        @empty
        <p>No not found</p>
    
    @endforelse

@endsection
</div>
