<div class="form-group">
    <label class="col-md-3 control-label">Subject</label>
    <div class="col-md-4">
        @php  $subjects->prepend('Select Subject', ''); @endphp
        {!! Form::select('subject_id',$subjects, old('subject_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
    </div>
</div>