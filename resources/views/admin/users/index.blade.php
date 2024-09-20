@extends('adminlte::page')

@section('title', 'Manage Users')

@section('content_header')
    <h1>Users List</h1>
@stop
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Create At</th>
            <th>Delete At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->deleted_at }}</td>
                <td>
                    @if($user->deleted_at == null)
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm Delete Account')">Delete</button>
                        </form>
                    @else
                        <form action="{{ route('admin.users.restore', $user->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success" onclick="return confirm('Confirm Restore Account')">Restore</button>
                        </form>
                    @endif


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
