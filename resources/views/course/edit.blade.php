@extends('master')

@section('title')
    Add Course Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center text-primary">
                                Update Course Here...
                            </h1>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('course.update', ['id' => $course->id])}}" class="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="course_name" value="{{$course->course_name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Teacher Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="teacher_name" value="{{$course->teacher_name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Fee</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="course_fee" value="{{$course->course_fee}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Duration</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="duration" value="{{$course->duration}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Starting Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="date" value="{{$course->date}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Objective</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="objective" value="{{$course->objective}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Detail</label>
                                    <div class="col-md-9">
                                        <textarea name="detail" class="form-control">{{$course->detail}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($course->image)}}" alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" name="update_btn" value="Update Course">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
