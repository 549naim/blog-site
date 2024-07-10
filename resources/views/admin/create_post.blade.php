@extends('admin.layouts.sidebar')
@section('content')
    <script src="https://cdn.tiny.cloud/1/eru6n61274ya99dbtz3azu09yricjysvlxvl45pslovu49l2/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Post</h1>

                <form action="{{ route('store_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <label class="mr-sm-2">Blog Category</label>
                            <select name="category_id" id="category_id" class="custom-select mr-sm-2"
                                id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">poster</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>
                    <select name="tags[]" class="form-select" multiple aria-label="multiple select example">
                        @php
                            $tags = App\Models\Tag::all();
                        @endphp
                        @foreach ($tags as $item)
                        <option value="{{ $item->name }}" >{{ $item->name }}</option>
                        @endforeach
                        
                    </select>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="default-editor">
                        
                      </textarea>
                    </div>

                    <button type="submit" id="saveBtn" class="btn btn-primary">Create Post</button>
                </form>
            </div>
            
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea#default-editor'
        });
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#saveBtn').click(function() {
                // Get the HTML content of the editor
                var name = $('#title').val();
                var category_id = $('#category_id').val();
                var image = $('#image').val();
                var editorContent = $('#editor .ql-editor ').html();
                console.log(editorContent);

                // You can now send editorContent to your backend to store it in the database
                // For example, using AJAX:
                $.ajax({
                    url: "{{ route('store_post') }}",
                    type: 'POST',
                    data: {
                        name: name,
                        category_id: category_id,
                        image: image,
                        content: editorContent
                    },
                    dataType: "json",
                    success: function(response) {
                        // Handle success response
                        console.log('Content saved successfully');
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error('Error saving content:', error);
                    }
                });
            });
        });
    </script>
@endsection
