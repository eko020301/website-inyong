@extends('layouts.main')

@section('title', $post['title'])

<div class="mt-5">
    @section('content')

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>
    @if($post['is_new'])
        <div>postingan bru</div>
    @elseif(!$post['is_new'])
        <div>postingan lama</div>
    @else
        <div>unknown post</div>
    @endif

    @isset($post['has_comments'])
    <div>comments</div>
    @endisset

    @endsection
</div>
