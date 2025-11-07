@extend('layouts.master')


@section('title')
BoardingHunter - community_post
@endsection

@sectionZ('page')
Community_post
@endsection


@section('table')
<div class="table">
    <h5>{{ $communityPost->title }}</h5>
    <p>{{ $communityPost->content }}</p>
    <p>Posted by: {{ $communityPost->user->name ?? 'Unknown User' }}</p>
    <p>Views: {{ $communityPost->views ?? 0 }}</p>
</div>
@endsection
