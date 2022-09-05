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
                                Add Course Here...
                            </h1>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('course.create')}}" class="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="course_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Teacher Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="teacher_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Fee</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="course_fee">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Duration</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="duration">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Starting Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Objective</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="objective">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Course Detail</label>
                                    <div class="col-md-9">
                                        <textarea name="detail" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" name="add_btn" value="Add Course">
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
