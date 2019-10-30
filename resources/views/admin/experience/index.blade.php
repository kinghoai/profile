@extends('layouts.admin.master')

@section('title')
    Experiences
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
            <form action="{{route('experience.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="icon tag fontawesome...">
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="company name...">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="developer">
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" id="time" name="time" placeholder="2015-2017">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add New Experience</button>
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
                            <th>Company</th>
                            <th>Job</th>
                            <th>Timeline</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($experiences as $experience)
                        <tr>
                            <td>{{$experience->company}}</td>
                            <td>{{$experience->job}}</td>
                            <td>{{$experience->time}}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-sm" href="{{route('experience.edit', $experience->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="d-inline-block" onclick="return confirm('Delete it. Are you sure?')">
                                    <form action="{{route('experience.destroy', $experience->id)}}" method="POST">
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
