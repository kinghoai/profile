@extends('layouts.admin.master')

@section('title')
    Edit user
@endsection
@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{route('experience.update', $experience->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="{{$experience->icon}}">
                </div>
                <div class="form-group">
                    <label for="title">Company</label>
                    <input type="text" class="form-control" id="company" name="company" value="{{$experience->company}}">
                </div>
                <div class="form-group">
                    <label for="percent">Job</label>
                    <input type="text" class="form-control" id="job" name="job" value="{{$experience->job}}">
                </div>
                <div class="form-group">
                    <label for="level">Time</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{$experience->time}}">
                </div>
                <div class="form-group">
                    <label for="level">Description</label>
                    <textarea class="form-control" id="description" name="description">{{$experience->description}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Experience</button>
                </div>
            </form>
        </div>
    </div>
@endsection
