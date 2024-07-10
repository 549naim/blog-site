@extends('admin.layouts.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Category</h1>
                <form action="{{ route('store_category') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Category name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>
            </div>
        </div>
    </div>

@endsection