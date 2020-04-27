@extends('layouts.backend.main')
@section('title', 'Sasakazi  | courses index')
@section('content')
<div class="row">
<div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('backend.courses.create') }}">
                        <button class="btn btn-sm btn-dark">
                            <i class="fa fa-plus-circle"></i>Add Course</button></a>

                </li>
            </ol>
        </nav>
        @include('partial_backend.messages')
            @if(! $courses->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
            @else
            <div class="card text-center">
            <div class="card-header bg-dark">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">LIST OF courseS</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                  <div class="table-responsive">
                @include('courses.table')
                 </div>
            </div>
            </div>
 @endif
  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection
<!-- Modal -->



