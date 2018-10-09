@extends('layouts.primary')

@section('content')

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hewan Qurban
                  {{Form::open(['method'=>'GET','url'=>'index','class'=>'navbar-form navbar-right ']) }}
                    <input type="text" name="search" class="form-control">
                    <button type="submit" class="btn btn-primary" style="color: white">search</button>

                    {{ Form::close()}}

                </div>

                {{-- <div class="panel-body"> --}}


                    {{-- <div class="table-responsive"> --}}
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Alamat</th>
                            <th>Nama Peternakan</th>
                            <th>jumlah sapi</th>
                            <th>jumlah kambing</th>
                            <th></th>
                          </tr>
                        </thead>
                        @php(
                          $no = 1
                        )
                        @foreach ($peternakan as $p)


                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$p->alamat}}</td>
                          <td>{{$p->nama}}</td>
                          <td>{{$p->jumlah_sapi}}</td>
                          <td>{{$p->jumlah_kambing}}</td>
                          <td>
                            <form class="form-inline" action="" accept-charset="UTF-8" method="POST">
                              <input type="hidden" name="token" value="">
                              <a href="{{url('/index/edit',$p->id)}}" class="btn btn-warning btn-xs" id="href">edit</a>
                              <a href="{{url('/index/destroy',$p->id)}}" class="btn btn-danger btn-xs" id="href">delete</a>

                            </form>
                          </td>
                        </tr>
                          @endforeach
                      </table>

                    </div>
                </div>
            </div>
        </div>

@endsection
