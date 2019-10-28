@extends('layouts.admin.master')

@section('title')
    Skill
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-4">
            <form action="{{route('skill.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="HTML5 CSS3...">
                </div>
                <div class="form-group">
                    <label for="percent">Percent</label>
                    <input type="number" class="form-control" id="percent" name="percent" placeholder="80">
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" placeholder="Expert, 4 years">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control" name="type">
                        <option value="skill">Skill</option>
                        <option value="knowledge">Knowledge</option>
                        <option value="language">Language</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add New Skill</button>
                </div>
            </form>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 180px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Percent</th>
                            <th>Level</th>
                            <th>Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($skills as $skill)
                        <tr>
                            <td>{{$skill->title}}</td>
                            <td>{{$skill->percent}}</td>
                            <td>{{$skill->level}}</td>
                            <td>{{$skill->type}}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-sm" href="{{route('skill.edit', $skill->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="d-inline-block" onclick="return confirm('Delete it. Are you sure?')">
                                    <form action="{{route('skill.destroy', $skill->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger btn-sm" type="submit" value="DELETE">
                                    </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
