@extends('master')

@section('title')
    Add Course Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center text-primary">
                                All Courses
                            </h1>
                        </div>
                        <div class="card-body">
                            <table class="table-bordered table table-hover">
                                <thead>
                                <tr>
                                    <th>SI No</th>
                                    <th>Title</th>
                                    <th>Teacher</th>
                                    <th>Fee</th>
                                    <th>Duration</th>
                                    <th>Starting Date</th>
                                    <th>Objective</th>
                                    <th>Detail</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$course->course_name}}</td>
                                    <td>{{$course->teacher_name}}</td>
                                    <td>{{$course->course_fee}}</td>
                                    <td>{{$course->duration}}</td>
                                    <td>{{$course->date}}</td>
                                    <td>{{$course->objective}}</td>
                                    <td>{{$course->detail}}</td>
                                    <td>
                                        <img src="{{asset($course->image)}}" alt="" height="60" width="80">
                                    </td>
                                    <td>
                                        <a href="{{route('course.edit', ['id' => $course->id])}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
