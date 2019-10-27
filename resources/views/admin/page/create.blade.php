@extends('layouts.admin.master')

@section('title')
    Create new page
@endsection
@section('content')
    <form action="{{route('page.store')}}" method="POST" enctype="multipart/form-data" style="width:100%">
        @csrf
        <div class="row">
            <div class="col-9">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content" style="height: 500px"></textarea>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="userAvatar" name="feature_image">
                            <label class="custom-file-label" for="exampleInputFile">Feature Image</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Save page</button>
            </div>
        </div>
    </form>
@endsection
