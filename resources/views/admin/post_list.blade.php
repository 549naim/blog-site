@extends('admin.layouts.sidebar')

@section('content')
    <div class="col-md-12">

        <div class="col-12">
            <div class="container">
                <h1>Blog List</h1>
                <hr>

                <div class="table-responsive">
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th style="width:33%;">ID</th>
                                <th style="width:33%;">NAME</th>
                                <th style="width:33%;">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $data)
                                <tr>
                                    <td style="width:33%;">{{ $data->id }}</td>
                                    <td style="width:33%;">{{ $data->title }}</td>
                                    <td style="width:33%;">{{ $data->category->name }}</td>

                                    <td style="width:33%;">
                                        <a href="{{ route('edit_post', $data->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('delete_post', $data->id) }}" class="btn btn-danger">Delete</a>

                                </tr>
                            @endforeach



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection