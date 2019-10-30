@extends('layouts.admin.master')

@section('title')
    Education
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('education.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="icon tag fontawesome...">
                </div>
                <div class="form-group">
                    <label for="school">School</label>
                    <input type="text" class="form-control" id="school" name="school" placeholder="school name...">
                </div>
                <div class="form-group">
                    <label for="subjects">Subjects</label>
                    <input type="text" class="form-control" id="subjects" name="subjects" placeholder="subjects">
                </div>
                <div class="form-group">
                    <label for="level">Timeline</label>
                    <input type="text" class="form-control" id="time" name="time" placeholder="2015-2017">
                </div>
                <div class="form-group">
                    <label for="level">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add New Education</button>
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
                            <th>School</th>
                            <th>Subjects</th>
                            <th>Timeline</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($educations as $education)
                        <tr>
                            <td>{{$education->school}}</td>
                            <td>{{$education->subjects}}</td>
                            <td>{{$education->time}}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-sm" href="{{route('education.edit', $education->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="d-inline-block" onclick="return confirm('Delete it. Are you sure?')">
                                    <form action="{{route('education.destroy', $education->id)}}" method="POST">
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
