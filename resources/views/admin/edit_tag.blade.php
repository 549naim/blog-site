@extends('admin.layouts.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Tag</h1>
                <form action="{{ route('update_tag',$tag->id )}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tag name</label>
                        <input type="text" name="name" class="form-control" value="{{ $tag->name }}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update Tag</button>
                </form>
            </div>
        </div>
    </div>

@endsection