<input type="number" name="admin_id" value="{{auth::user()->id}}" hidden>

<div class="form-group">
    {{ Form::label('farm_id', 'Peternakan', ['class'=>'col-md-4']) }}
    <div class="col-md-6">
    {!! Form::select('farm_id',[''=>'']+App\Farm::pluck('nama','id')->all(), null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
    {{ Form::label('jenis_hewan', 'Jenis hewan', ['class'=>'col-md-4']) }}
    <div class="col-md-6 col-lg-12">
    {!! Form::select('jenis_hewan', array('sapi'=>'sapi','kambing'=>'kambing'), null,['class'=>'form-control'])  !!}
  </div>
</div>

<div class="form-group">
    {{ Form::label('berat_permintaan', 'Jumlah hewan', ['class'=>'col-md-4']) }}
    <div class="col-md-6">
      <div class="input-group">
    {{-- <input name="berat_permintaan" type="text" class="'col-md-4 control-label'" > --}}
    {!! Form::text('berat_permintaan', null, ['class'=>'form-control']) !!}
    {!! $errors->first('berat_permintaan', '<p class="help-block">:message</p>') !!}
    <span class="input-group-addon">Ekor</span>
    </div>
  </div>
</div>

<div class="form-group">
    {{ Form::label('tujuan_id', 'Nama Masjid', ['class'=>'col-md-4']) }}
    <div class="col-md-6">
    {!! Form::select('tujuan_id',[''=>'']+App\Tujuan::pluck('alamat','id')->all(), null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
    {{ Form::label('biaya_pengiriman', 'Biaya Operasional', ['class'=>'col-md-4']) }}
    <div class="col-md-6">
      <div class="input-group">
    {{-- <input name="biaya_pengiriman" type="text" class="'col-md-4 control-label'" > --}}
    {!! Form::text('biaya_pengiriman', null, ['class'=>'form-control']) !!}
    {!! $errors->first('biaya_pengiriman', '<p class="help-block">:message</p>') !!}
    <span class="input-group-addon">Rp</span>
    </div>
  </div>
</div>
