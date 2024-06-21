@extends('admin.layout')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah faq</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('faq.store')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" type="text" name="pertanyaan" rows="7" placeholder="Tulis pertanyaanmu di sini"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" readonly class="form-control" name="jawaban" value = NULL>
                  </div>
                  <div class="form-group">
                    <button type="submit">Kirim Pertanyaan</button></div>
                  </div>            
               </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                <!-- </div> -->
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
              </form>
            </div>
            <!-- /.card -->
          </div>       
      </div><!-- /.container-fluid -->
@endsection