@extends('layouts.primary')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hewan Qurban</div>

                <div class="panel-body">
                  {!! Form::model($peternakan,['url'=> url('index/update',$peternakan->id),'method' => 'post','class'=>'form-horizontal']) !!}
                  @include('forms')
                  {!! Form:: submit('Create',['class' => 'btn btn-primary']) !!}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>

@endsection
