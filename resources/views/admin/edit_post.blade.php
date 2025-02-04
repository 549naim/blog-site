@extends('admin.layouts.sidebar')
@section('content')
    <script src="https://cdn.tiny.cloud/1/eru6n61274ya99dbtz3azu09yricjysvlxvl45pslovu49l2/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Post</h1>

                <form action="{{ route('update_post', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <label class="mr-sm-2">Blog Category</label>
                            <select name="category_id" id="category_id" class="custom-select mr-sm-2">
                                <option value="" disabled>Choose...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Poster</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="mt-2" width="200">
                        @endif
                    </div>
                    <select name="tags[]" class="form-select" multiple aria-label="multiple select example">
                        @foreach ($tags as $item)
                            <option value="{{ $item->name }}" 
                                {{ in_array($item->name, explode(',', $post->tag_id)) ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="form-group mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <select class="form-select" name="heading" id="heading">
                            <option value="0" {{ $post->heading == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $post->heading == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="latest" class="form-label">Latest</label>
                        <select class="form-select" name="latest" id="latest">
                            <option value="0" {{ $post->latest == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $post->latest == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="publish" class="form-label">Publish</label>
                        <select class="form-select" name="publish" id="publish">
                            <option value="0" {{ $post->published == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $post->published == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="breaking" class="form-label">Breaking</label>
                        <select class="form-select" name="breaking" id="breaking">
                            <option value="0" {{ $post->breaking == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $post->breaking == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="default-editor">
                            {{ old('content', $post->content) }}
                        </textarea>
                    </div>

                    <button type="submit" id="saveBtn" class="btn btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea#default-editor'
        });
    </script>
@endsection
