<div class="form-group">
    <label class="col-md-3 control-label">Chapter</label>
    <div class="col-md-4">
        @php  $chapters->prepend('Select Chapter', ''); @endphp
        {!! Form::select('chapter_id',$chapters, old('chapter_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
    </div>
</div>