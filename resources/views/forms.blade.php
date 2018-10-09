<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
  {!! Form::label('nama', 'Nama', ['class'=>'col-md-4']) !!}
  <div class="col-md-6">
    {!! Form::text('nama', null, ['class'=>'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
  {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-4']) !!}
  <div class="col-md-6">
    {!! Form::text('alamat', null, ['class'=>'form-control']) !!}
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group{{ $errors->has('jumlah_kambing') ? ' has-error' : '' }}">
  {!! Form::label('jumlah_kambing', 'Jumlah Kambing', ['class'=>'col-md-4']) !!}
  <div class="col-md-6">
    <div class="input-group">
      {!! Form::text('jumlah_kambing', null, ['class'=>'form-control']) !!}
      {!! $errors->first('jumlah_kambing', '<p class="help-block">:message</p>') !!}
      <span class="input-group-addon">Ekor</span>
    </div>
  </div>
</div>

<div class="form-group{{ $errors->has('jumlah_sapi') ? ' has-error' : '' }}">
  {!! Form::label('jumlah_sapi', 'Jumlah Sapi', ['class'=>'col-md-4']) !!}
  <div class="col-md-6">
    <div class="input-group">
    {!! Form::text('jumlah_sapi', null, ['class'=>'form-control']) !!}
    {!! $errors->first('jumlah_sapi', '<p class="help-block">:message</p>') !!}
    <span class="input-group-addon">Ekor</span>
   </div>
  </div>
</div>
