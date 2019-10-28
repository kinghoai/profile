@extends('layouts.admin.master')

@section('title')
    Edit user
@endsection
@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{route('skill.update', $skill->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$skill->title}}">
                </div>
                <div class="form-group">
                    <label for="percent">Percent</label>
                    <input type="number" class="form-control" id="percent" name="percent" value="{{$skill->percent}}">
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" value="{{$skill->level}}">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control" name="type">
                        <option value="skill" {{$skill->type == 'skill' ? 'selected' : ''}} >Skill</option>
                        <option value="knowledge" {{$skill->type == 'knowledge' ? 'selected' : ''}}>Knowledge</option>
                        <option value="language" {{$skill->type == 'language' ? 'selected' : ''}}>Language</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Skill</button>
                </div>
            </form>
        </div>
    </div>
@endsection
