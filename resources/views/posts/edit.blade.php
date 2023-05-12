{{-- @extends('layout.admin')
@section('admin')
    <div class="container">
        <h1>Edit Post</h1>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="from-group">
                <label for="category">Catagory</label>
                <textarea name="category" id="category" rows="10" class="form-control @error('category') is-invalid @enderror" required>{{  old('category', $post->category) }}</textarea>
                @error('content')
                <span class="invalid-feedback" role="alert"> <strong> {{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection --}}
