@extends('layouts.primary')

@section('content')

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hewan Qurban
                  {{Form::open(['method'=>'GET','url'=>'indexdistribusi','class'=>'navbar-form navbar-right ']) }}
                    <input type="text" name="search" class="form-control">
                    <button type="submit" class="btn btn-primary" style="color: white">search</button>

                    {{ Form::close()}}

                </div>

                {{-- <div class="panel-body"> --}}


                    {{-- <div class="table-responsive"> --}}
                      <table id="tabel-data" class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Peternakan</th>
                            <th>Jenis Hewan</th>
                            <th>Jumlah Hewan</th>
                            <th>Nama Masjid</th>
                            <th>Biaya Operasional (Rp)</th>
                            <th></th>
                          </tr>
                        </thead>
                        @php(
                          $no = 1
                        )
                        @foreach ($distribusi as $d)


                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$d->farm->nama}}</td>
                          <td>{{$d->jenis_hewan}}</td>
                          <td>{{$d->berat_permintaan}}</td>
                          <td>{{$d->tujuan->alamat}}</td>
                          <td>{{$d->biaya_pengiriman}}</td>

                          <td>
                            <form class="form-inline" action="" accept-charset="UTF-8" method="POST">
                              <input type="hidden" name="token" value="">
                              <a href="{{url('/tambahdistribusi/edit',$d->id)}}" class="btn btn-warning btn-xs"  id="href">edit</a>
                              <a href="{{url('/tambahdistribusi/destroy',$d->id)}}" class="btn btn-danger btn-xs" id="href">delete</a>

                            </form>
                          </td>
                        </tr>
                          @endforeach
                      </table>

                    </div>
                </div>

                <script>
                $(document).ready(function() {
                  $('#tabel-data').DataTable();
                } );
              </script>

@endsection
