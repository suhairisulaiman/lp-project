@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('message'))
                <div class="alert {{ session()->get('type') }}">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Ejen Index') }}

                    <div class="float-right">
                        <form action="" method="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" value="{{ request()->get('keyword') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Creator</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($ejen as $ejen)
                                <tr>
                                    <td> {{ $ejen->id }}</td>
                                    <td> {{ $ejen->title }}</td>
                                    <td> {{ $ejen->description }}</td>
                                    <td> {{ $ejen->created_at->diffForHumans() }}</td>
                                    <td> {{ $ejen->user->name }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/ejen/{{ $ejen->id}}">Show</a>
                                        <a class="btn btn-success" href="/ejen/{{ $ejen->id}}/edit">Edit</a>
                                        <a onclick="return confirm('Are you sure')" class="btn btn-danger" href="/ejen/{{ $ejen->id}}/delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $ejen->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
