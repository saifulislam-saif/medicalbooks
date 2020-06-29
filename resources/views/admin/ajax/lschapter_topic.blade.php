<div class="form-group">
    <label class="col-md-3 control-label">Topic</label>
    <div class="col-md-4">
        @php  $lecture_topic->prepend('Select Topic', ''); @endphp
        {!! Form::select('ls_topic_id',$lecture_topic, old('ls_topic_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
    </div>
</div>