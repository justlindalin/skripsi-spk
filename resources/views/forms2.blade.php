<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
  {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-4 control-label']) !!}
  <div class="col-md-6">
    {!! Form::text('alamat', null, ['class'=>'form-control']) !!}
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
  </div>
</div>
