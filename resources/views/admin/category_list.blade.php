@extends('admin.layouts.sidebar')

@section('content')
    <div class="col-md-12">

        <div class="col-12">
            <div class="container">
                <h1>Category List</h1>
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
                            @foreach ($categories as $data)
                                <tr>
                                    <td style="width:33%;">{{ $data->id }}</td>
                                    <td style="width:33%;">{{ $data->name }}</td>
                                    <td style="width:33%;"><button type="button" class="btn btn-info mx-1">View</button><button type="button"
                                            class="btn btn-secondary mx-1">Edit</button><button type="button"
                                            class="btn btn-danger mx-1">Delete</button></td>

                                </tr>
                            @endforeach



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
