<div class="form-group">
    <label class="col-md-3 control-label">Topic</label>
    <div class="col-md-4">
        @php  $topics->prepend('Select Topic', ''); @endphp
        {!! Form::select('topic_id',$topics, old('topic_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
    </div>
</div>