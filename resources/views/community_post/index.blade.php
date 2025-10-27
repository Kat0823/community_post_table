@extend('layouts.master')

@section('title')
BoardingHunter - community_post
@endsection

@sectionZ('page')
Community_post
@endsection

@section('addbtn')
<div>
    <a class="add" href="/Community_post/create">Add an Post</a>
</div>
@endsection

@section('table')
<div class="table">
    <table style="width:100%">
        <thead>
            <tr>
                <th>User</th>
                <th>Address</th>
                <td>Contact Number</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            @foreach($community_post as community_post)
            <tr>
                <td>{{community_post->User}}</td>
                <td>{{community_post->Address}}</td>
                <td>{{community_post->Contact Number}}</td>
                <td>{{community_post->Email}}</td>
            </tr>
        </tbody>
</div>



















<!
DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Community Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2 class="mb-3">Community Posts</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->user_id ?? 'N/A' }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No community posts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
