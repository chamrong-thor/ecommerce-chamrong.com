@extends('layouts.backend')
@section('title')
Edit User
@endsection
@section('content')
@if (!empty($user))
<div class="content-wrapper" style="min-height: 1246.8px;">

    <!-- Main content -->
    <section class="content my-4">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    @if (!$errors->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        Oops !! something went wrong.
                        <ul class="list-group p-3">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName1">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name"
                                        placeholder="Enter Full Name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                        placeholder="Enter email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSeletRole1">Role</label>
                                    <select class="form-control" name="role_id" id="exampleSeletRole1">
                                        <option disabled>Select one Role</option>
                                        @if($roles)
                                        @foreach ($roles as $role)
                                        <option
                                            value="{{ $role->id }} {{ $user->role_id == $role->id ? 'selected' : '' }}">
                                            {{ $role->title }}
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSeletStatus1">Status</label>
                                    <select class="form-control" name="status" id="exampleSeletStatus1">
                                        <option disabled selected>Select role Status</option>
                                        <option value="1" {{ $user->status == 1? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $user->status == 0? 'selected' : '' }}>Unactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@else
<div class="alert alert-info" role="alert">
    Sorry, no user found!
</div>
@endif
@endsection
