@extends('layouts.app')

@section('content')
    <h2>{{ $communityPost->title }}</h2>
    <p>{{ $communityPost->content }}</p>
    <a href="{{ route('communitypost.index') }}">← Back to all posts</a>
@endsection
