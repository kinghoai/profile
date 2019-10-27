@extends('layouts.admin.master')

@section('title')
    Create new user
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
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Retype Password</label>
                        <input type="password" class="form-control" id="retypepassword" placeholder="Password" name="retypepassword">
                    </div>
                    <div class="form-group">
                        <label for="userAvatar">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="userAvatar">
                                <label class="custom-file-label" for="exampleInputFile">Choose avatar</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="sendEmail" checked="true" name="sendEmail">
                        <label class="form-check-label" for="sendEmail">Send email to new user</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
