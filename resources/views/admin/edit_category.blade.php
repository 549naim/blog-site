@extends('admin.layouts.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Category</h1>
                <form action="{{ route('update_category',$category->id ) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Category name</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>

@endsection