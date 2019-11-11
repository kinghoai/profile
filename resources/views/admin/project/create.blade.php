@extends('layouts.admin.master')

@section('title')
    Create new project
@endsection
@section('content')
    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data" style="width:100%">
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
                            <input type="file" class="custom-file-input" id="userAvatar" name="image">
                            <label class="custom-file-label" for="userAvatar">Feature Image</label>
                        </div>
                        <div class="show-featured"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="slide" name="slide[]" multiple>
                            <label class="custom-file-label" for="slide">Slide Images</label>
                        </div>
                        <div class="show-slide"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Save project</button>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.show-featured').html('<img style="width: 50%; margin-top: 10px" src=' + e.target.result + '>');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#userAvatar").change(function(){
            readURL(this);
        });
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img class="w-50" style="height: 100px; object-fit: cover">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#slide').on('change', function() {
                imagesPreview(this, '.show-slide');
            });
        });
    </script>
@endsection

