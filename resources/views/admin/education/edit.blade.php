@extends('layouts.admin.master')

@section('title')
    Edit education
@endsection
@section('content')
    <div class="row">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('education.update', $education->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="{{$education->icon}}" required>
                </div>
                <div class="form-group">
                    <label for="school">School</label>
                    <input type="text" class="form-control" id="school" name="school" value="{{$education->school}}" required>
                </div>
                <div class="form-group">
                    <label for="subjects">Subjects</label>
                    <input type="text" class="form-control" id="subjects" name="subjects" value="{{$education->subjects}}" required>
                </div>
                <div class="form-group">
                    <label for="level">Time</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{$education->time}}" required>
                </div>
                <div class="form-group">
                    <label for="level">Description</label>
                    <textarea class="form-control" id="description" name="description" required>{{$education->description}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Education</button>
                </div>
            </form>
        </div>
    </div>
@endsection
