@extends('layout.admin')
@section('admin')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('posts.search') }}" method="GET" class="form-inline mb-3">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" class="form-control ml-2" id="search" name="search">
            </div>
            <button type="submit" class="btn btn-primary ml-2 mt-2">Submit</button>
        </form>
        <h1>Blog Posts</h1>

        <a href="{{ route('posts.store') }}" class="btn btn-primary">Create Post</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Reference</th>
                    <th>Description</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ str_replace(['[', ']', '{', '}', '"', 'value', ':'], '', $post->tags) }}</td>
                     <td>{{ substr(strip_tags($post->reference), 0, 20). '...' }}</td>
                    <td>{{ substr(strip_tags($post->description), 0, 20) . '...' }}</td>
                    <td>{{ date('Y-m-d H:i:s', strtotime($post->created_at)) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
