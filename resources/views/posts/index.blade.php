@extends('layout.masterr')
@section('bots')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.3.0/dist/tagify.css">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- <div class="card shadow-lg rounded d-flex">
            <div class="card-header">
                <h5 class="card-title text-dark">Search</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.search') }}" method="GET" class="form-inline mb-3">
                    <div class="form-group">
                        <input type="text" class="form-control ml-2" id="search" name="search"
                            placeholder="Enter your input here....">
                    </div>
                    <button type="submit" class="btn btn-primary  mt-4">Submit</button>
                </form>
            </div>
        </div> --}}
        <div class="d-flex justify-content-between align-items-center pos">
            <h1 class="pt-5 fw-light mb-2">Manage Post</h1>
        </div>
        {{-- <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a> --}}
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create
            Content</button>
        <!-- Modal for creating a new category -->
       
        <!-- Modal for create-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Create Content</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-2">
                            <form action="dataInsert" method="post" enctype="multipart/form_data">
                                @csrf
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder=""
                                        required>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        {{-- <div class="col-md-6">
                                            <label for="category">Category</label>
                                            <select class="form-select" id="category" name="category" required>
                                                <option value="">Select a category</option>
                                                <option value="Android">Android</option>
                                                <option value="Internet">Internet</option>
                                                <option value="Network">Network</option>
                                                <option value="Email">Email</option>
                                                <option value="Backup">Backup</option>
                                                <option value="Hardware">Hardware</option>
                                            </select>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <label for="category">Category</label>
                                            <select class="form-select" id="category" name="category" required>
                                                <option value="">Select a category</option>
                                                <option value="Android">Android</option>
                                                <option value="Internet">Internet</option>
                                                <option value="Network">Network</option>
                                                <option value="Email">Email</option>
                                                <option value="Backup">Backup</option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="other"  data-bs-toggle="modal" data-bs-target="#exampleModal">Other</option>
                                            </select>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="layout1">Layout</label>
                                            <select class="form-select" id="layout1" name="layout1">
                                                <option value="">Select Layout</option>
                                                <option value="">Layout 1</option>
                                                <option value="">Layout 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label>Tags</label>
                                    <input type="text" class="form-control" id="tags" name="tags"
                                        placeholder="" autofocus required>
                                </div>
                                <div class="mb-3">
                                    <label>Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference"
                                        placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="10"
                                        placeholder="Enter your Content Here....."></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card shadow-lg d-flex">
            <div class="card-body">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Reference</th>
                            <th>Description</th>
                            {{-- <th>Date & Time</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($android_table as $post)
                            <tr>
                                <td>{{ substr(strip_tags($post->title), 0, 20) . '...' }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ str_replace(['[', ']', '{', '}', '"', 'value', ':'], '', substr(strip_tags($post->title), 0, 20)) . '...' }}
                                </td>
                                <td>{{ substr(strip_tags($post->reference), 0, 20) . '...' }}</td>
                                <td>{{ substr(strip_tags($post->description), 0, 20) . '...' }}</td>
                                {{-- <td>{{ $post->datetime }}</td> --}}
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a>
                                    {{-- <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}

                                    <!-- Button to open the modal -->
                                    {{-- <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#editPostModal">Edit</a> --}}
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editPostModal" value={{ $post->id }}>Edit</button>

                                    <!-- Modal HTML -->
                                    <div class="modal fade" id="editPostModal" tabindex="-1"
                                        aria-labelledby="editPostModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editPostModalLabel">Edit Post</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Add a form to allow users to edit the post -->
                                                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="{{ $post->title }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category" class="form-label">Category</label>
                                                            <select class="form-select" id="category" name="category"
                                                                value="{{ $post->category }}" required>
                                                                <option value="">Select a
                                                                    category</option>
                                                                <option value="Android">Android
                                                                </option>
                                                                <option value="Internet">Internet
                                                                </option>
                                                                <option value="Network">Network
                                                                </option>
                                                                <option value="Email">Email
                                                                </option>
                                                                <option value="Backup">Backup
                                                                </option>
                                                                <option value="Hardware">Hardware
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tags" class="form-label">Tags</label>
                                                            <input type="text" class="form-control" id="tagsOne"
                                                                name="tagsOne" placeholder=""
                                                                value="{{ $post->tags }}" autofocus required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="reference" class="form-label">Reference</label>
                                                            <input type="text" class="form-control" id="reference"
                                                                name="reference" value="{{ $post->reference }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description"
                                                                class="form-label">Description</label>
                                                            <textarea class="form-control" id="descriptionOne" name="description">{!! $post->description !!}</textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create
                                        Content</button> --}}
                                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}"
                                        class="d-inline">
                                        {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="POST"> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $android_table->links() }}
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.3.0/dist/tagify.min.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}
    <script>
        const categorySelect = document.getElementById('category');
        const otherCategory = document.getElementById('other-category');
        const newCategoryInput = document.getElementById('new-category');

        // Load categories from localStorage on page load
        if (localStorage.getItem('categories')) {
            const categories = JSON.parse(localStorage.getItem('categories'));
            categories.forEach(category => {
                const option = document.createElement('option');
                option.value = category.value;
                option.textContent = category.text;
                categorySelect.insertBefore(option, categorySelect.lastElementChild);
            });
        }

        categorySelect.addEventListener('change', () => {
            if (categorySelect.value === 'other') {
                otherCategory.style.display = 'block';
            } else {
                otherCategory.style.display = 'none';
                newCategoryInput.value = '';
            }
        });

        newCategoryInput.addEventListener('blur', () => {
            if (newCategoryInput.value.trim() !== '') {
                const newOption = document.createElement('option');
                newOption.value = newCategoryInput.value.toLowerCase().replace(/\s+/g, '-');
                newOption.textContent = newCategoryInput.value;
                categorySelect.insertBefore(newOption, categorySelect.lastElementChild);

                // Save categories to localStorage
                const categories = [...categorySelect.options].slice(0, -1).map(option => ({
                    value: option.value,
                    text: option.textContent
                }));
                localStorage.setItem('categories', JSON.stringify(categories));

                newCategoryInput.value = '';
            }
        });
    </script>
@endsection
