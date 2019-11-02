@extends('layouts.admin.master')

@section('title')
    Edit user
@endsection
@section('content')
    <div class="row">
        <form method="POST" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data" style="width: 100%">
            @csrf
            @method('PATCH')
            <div class="col-6">
                <div class="card-body">
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
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$user->email}}">
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
                            <input type="file" class="custom-file-input" id="userAvatar" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose avatar</label>
                        </div>
                        <div class="show-file"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" class="form-control" id="address" placeholder="Address" name="address"  value="{{$user->address}}">
                </div>
                <div class="form-group">
                    <label>Birthdate</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input name="birthday" type="date" class="form-control" value="{{$user->birthday}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="job" class="form-control" id="job" placeholder="Job" name="job" value="{{$user->job}}">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="facebook" class="form-control" id="facebook" placeholder="url facebook" name="facebook" value="{{$user->facebook}}">
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="twitter" class="form-control" id="twitter" placeholder="url twitter" name="twitter" value="{{$user->twitter}}">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="youtube" class="form-control" id="youtube" placeholder="url youtube" name="youtube" value="{{$user->youtube}}">
                </div>
                <div class="form-group">
                    <label for="google">Google Plus</label>
                    <input type="google" class="form-control" id="google" placeholder="url google" name="google" value="{{$user->google}}">
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="linkedin" class="form-control" id="linkedin" placeholder="url linkedin" name="linkedin" value="{{$user->linkedin}}">
                </div>
            </div>
            </div>
            <div class="col-12">
                <div class="card-body">
                    <div class="form-group">
                        <label for="about_description">About Desccription</label>
                        <textarea type="about_description" class="form-control" id="about_description" name="about_description">{{$user->about_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="skill_description">Skill Desccription</label>
                        <textarea type="skill_description" class="form-control" id="skill_description" name="skill_description">{{$user->skill_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="knowledge_description">Knowledge Desccription</label>
                        <textarea type="knowledge_description" class="form-control" id="knowledge_description" name="knowledge_description">{{$user->knowledge_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="language_description">Language Desccription</label>
                        <textarea type="language_description" class="form-control" id="language_description" name="language_description">{{$user->language_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="experience_description">Experience Desccription</label>
                        <textarea type="experience_description" class="form-control" id="experience_description" name="experience_description">{{$user->experience_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="education_description">Education Desccription</label>
                        <textarea type="education_description" class="form-control" id="education_description" name="education_description">{{$user->education_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="project_description">Project Desccription</label>
                        <textarea type="project_description" class="form-control" id="project_description" name="project_description">{{$user->project_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="contact_description">Contact Desccription</label>
                        <textarea type="contact_description" class="form-control" id="contact_description" name="contact_description">{{$user->contact_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <button  class="btn btn-primary mt-4" type="submit">Edit Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.show-file').html('<img style="width: 50%; margin-top: 10px" src=' + e.target.result + '>');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#userAvatar").change(function(){
            readURL(this);
        });
    </script>
@endsection
