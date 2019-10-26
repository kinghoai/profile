@extends('layouts.admin.master')

@section('title')
    Categories
@endsection
@section('content')
    <div class="row">
        <div class="col-6">
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="email" class="form-control" id="name" name="name" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="email">Slug</label>
                        <input type="slug" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                    </div>
                    <div class="form-group">
                        <label for="description">Password</label>
                        <textarea type="description" class="form-control" id="description" name="description">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add New Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
