@extends('layouts.primary')

@section('content')

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hewan Qurban

                </div>

                {{-- <div class="panel-body"> --}}


                    {{-- <div class="table-responsive"> --}}
                      <table id="tabel-data" class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Peternakan</th>
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
                          <td>{{$d->berat_permintaan}}</td>
                          <td>{{$d->tujuan->alamat}}</td>
                          <td>{{$d->biaya_pengiriman}}</td>

                        </tr>
                          @endforeach
                        </div>
                      </table>
                      <div class="panel-body">
                      {!! Form::open(['url'=> url('/indexperhitungankambing'),'method' => 'post','class'=>'form-horizontal']) !!}
                      {!! Form:: submit('Lakukan Distribusi',['class' => 'btn btn-primary']) !!}
                      {!! Form::close() !!}
                    </div>
                    </div>
                </div>

                <script>
                $(document).ready(function() {
                  $('#tabel-data').DataTable();
                });
              </script>

@endsection
