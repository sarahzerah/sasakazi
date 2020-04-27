@extends('layouts.backend.main')

@section('title', 'Plusfarm | Add new course')

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
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card card border-dark">
                <div class="card-header">
                    <strong>courses Form</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($course, [
                       'method' => 'POST',
                       'files'  => TRUE,
                       'route'  => 'backend.courses.store',

                   ]) !!}

                    @include('courses.form')

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- /.row -->
@endsection
@include('courses.script')


