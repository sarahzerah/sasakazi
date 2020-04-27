@extends('layouts.main')

@section('title', 'Plusfarm | Edit course')

@section('content')
    <div class="breadcrumbs">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.courses.index')}}">
                            <button class="btn btn-sm btn-dark">
                                <i class="fa fa-arrow-left"></i>ALL courses</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
            <div class="card card border-dark">
                <div class="card-header">
                    <strong>Edit Form</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($course, [
                                     'method' => 'PUT',
                                     'files'  => TRUE,
                                     'route'  => ['backend.courses.update', $course->id],

                                 ]) !!}


                    @include('courses.form2')

                    {!! Form::close() !!}
                </div>
            </div>

    <br><br>
    <!-- /.row -->
@endsection
@include('courses.script')



