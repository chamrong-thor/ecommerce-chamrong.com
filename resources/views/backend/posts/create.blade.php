@extends('layouts.backend')
@section('title')
Create new post
@endsection
@section('content')
<div class="content-wrapper" style="min-height: 1419.6px;">
    <!-- Main content -->
    <section class="content my-4">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <grammarly-extension data-grammarly-shadow-root="true" class="cGcvT"
                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;">
                        </grammarly-extension>
                        <div class="card-header">
                            <h3 class="card-title">New Post</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputReview">Review</label>
                                <textarea id="inputReview" name="review" class="form-control textarea" rows="5"
                                    spellcheck="false"
                                    style="margin-top: 0px; margin-bottom: 0px; height: 18px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="selectCategory">Category</label>
                                <select class="form-control custom-select" name="category_id" id="selectCategory">
                                    <option selected disabled>Select a category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="thumnails">Thumnails</label>

                                <div class="custom-file">
                                    <input type="file" accept="image/*" onchange="loadFile(event)"
                                        class="custom-file-input" name="filename" id="filename">
                                    <span class="custom-file-label">Choose Thumnials</span>
                                </div>
                                <div class="profile-img-tag">
                                    <label for="filename">
                                        <img class="mt-3" src="{{ asset('backends/dist/img/thumnails.jpg') }}"
                                            alt="Thumnails" id="output"
                                            style="border-radius: 3px; max-width: 150px; max-height: 150px;object-fit: cover;">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-secondary ml-5">Cancel</a>
                    <input type="submit" value="Create new Porject" class="btn btn-success mr-5 float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
