@extends('admin.layout')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <li><p  style="text-align: end;"> TAMBAH <a href="{{route('faq.create')}}"><i class="fa fa-plus"></i></a></p></li>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Penanya</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Aksi</th>
                         
                          </tr>
                        </thead>
                        @foreach($dataFaq as $item)
                        <tbody>
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            
                            <td>{{ $item->pertanyaan }}</td>
                            <td>{{ $item->jawaban }}</td>
                            <td>
                              <form method="POST" action="{{ route('faq.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('faq.edit', $item->id) }}">Jawab <i class="fa fa-edit"></i> | </a>
                                <input type="submit" class="no-outline" value="hapus">
                              </form>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection