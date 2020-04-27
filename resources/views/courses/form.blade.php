@csrf
  <div class="col-sm-8 offset-2">

       <div class="form-group">
            <strong>Course Title:</strong>
          <input type="text" name="courseDescription" value="{{ old('courseDescription') }}" class="form-control {{ $errors->has('courseDescription') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('courseDescription'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('courseDescription') }}</strong>
                </div>
            @endif
        </div>

     <div class="form-group">
            <strong>Course Requirements:</strong>
          <input type="text" name="courseRequirements" value="{{ old('courseRequirements') }}" class="form-control {{ $errors->has('courseRequirements') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('courseRequirements'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('courseRequirements') }}</strong>
                </div>
            @endif
        </div>

         <div class="form-group">
            <strong>On-Live Class:</strong>
          <input type="text" name="courseLiveDate" value="{{ old('courseLiveDate') }}" class="form-control {{ $errors->has('courseLiveDate') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('courseLiveDate'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('courseLiveDate') }}</strong>
                </div>
            @endif
        </div>


         <div class="form-group">
            <strong>On-Live Time:</strong>
          <input type="text" name="courseLivetime" value="{{ old('courseLivetime') }}" class="form-control {{ $errors->has('courseLivetime') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('courseLivetime'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('courseLivetime') }}</strong>
                </div>
            @endif
        </div>
<div class="form-group">
        {!! Form::label('Picture') !!}
        <br>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new" style="width: 200px; height: 150px;">
                <img src="{{($course->image_url) ? $course->image_url : asset('images/noimage.png')}}" alt="">
            </div>
            <div class="fileinput-preview fileinput-exists" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-outline-default btn-file btn-outline-success mt-3">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input  type="file" name="courseImg" value="{{ old('courseImg') }}" class="form-control {{ $errors->has('courseImg') ? 'is-invalid' : ' ' }}" >
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                        <strong>{{ $errors->first('courseImg') }}</strong>
                        </div>
                        @endif
                </span>
                <a href="#" class="btn btn-default fileinput-exists btn-outline-danger mt-3" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-sm">{{ $course->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.courses.index') }}" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Cancel</a>
    </div>

</div>
<!-- /.col-sm-8 -->
