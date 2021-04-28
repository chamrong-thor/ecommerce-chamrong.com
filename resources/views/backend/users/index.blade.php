@extends('layouts.backend')
@section('title')
User lists
@endsection
@section('content')
<div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if (Session::has('flash_admin'))
                    <div class="alert alert-success flash_message" role="alert">
                        {{ Session('flash_admin') }}
                    </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('users.create') }}"><button
                                    class="btn bg_blue_2 cl_blue_9">Add
                                    User</button></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users Table</h3>

                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th style="width: 40px">Role</th>
                                        <th style="width: 40px">Status</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th style="width: 172px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">Author</span></td>
                                        <td>
                                            <button class="btn btn-info">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Administrator</span></td>
                                        <td>
                                            <button class="btn btn-info">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr> --}}
                                    @if ($users)
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->email }} </td>
                                        <td><span class="badge bg-warning">{{ $user->role->title }}</span></td>
                                        <td><span
                                                class="badge {{ $user->status ==1 ? 'bg-success' : 'bg-danger' }}">{{ $user->status == 1 ? 'Active' : 'Unactive' }}</span>
                                        </td>
                                        <td><span class="badge bg-warning">{{ $user->created_at }}</span></td>
                                        <td><span
                                                class="badge bg-warning">{{ $user->updated_at->diffForHumans() }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}">
                                                <button class="btn btn-info" title="Edit user"><i
                                                        class="fas fa-edit"></i></button>
                                            </a>
                                            <button class="btn btn-danger" title="Delete user"><i
                                                    class=" fas fa-trash"></i></button>
                                            <a href="#">
                                                <button
                                                    class="btn {{ $user->status ==1 ? 'btn-warning' : 'btn-success' }} "
                                                    title="{{ $user->status ==1 ? 'Active this user' : 'Unactive this user' }}">
                                                    <i
                                                        class=" {{ $user->status ==1 ? 'fas fa-thumbs-down' : 'fas fa-thumbs-up' }}">
                                                    </i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-header">
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
