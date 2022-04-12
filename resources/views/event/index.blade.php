@extends('layouts\master')

@section('content')
      @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Di Tambahkan
    </div>
    @elseif (session('update'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Di Update
    </div>
    @elseif (session('delete'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Di Delete
    </div>
    @endif
        <div class="row">
           <h2>Event List</h2>   
            <button type="button" class="align-right" data-toggle="modal" data-target="#exampleModal">Add+</button>
        </div>
    <!--konten--> 

    @foreach($event as $tampil)
    <div class="col-lg-4">
    <hr>
      <div class="section border bg-white rounded p-2">
        <div class="row">
          <div class="col-lg-12 img-section">
            <img src="{{asset('images/'.$tampil->gambars)}}" style="width: 200px; height: 250px;">    
          </div>
          <div class="col-lg-12 sectin-title">
            <h1 class="pt-2">{{$tampil->nama}}</h1>
          </div>
          <div class="col-lg-12">
            <div class="row">
            </div>
            <hr>
          </div>
          <div class="col-lg-12 section-detail">
            <p class="ml-2">{{$tampil->lokasi}}</p><hr>
          </div>
          <div class="col-lg-12 pb-2">
            <div class="row">
              <div class="col-lg-4">
                <a href="/event/{{$tampil->id}}/delete" class="btn btn-danger btn-block btn-sm" onclick="return confirm('Yakin akan di Hapus ?')">Delete</a>
              </div>
              <div class="col-lg-4">
                <a href="/event/{{$tampil->id}}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</td>
    </tr>
  
            
@endforeach   
    <!-- konten-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Input Event</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      
      <div class="modal-body">
                <form action="/event/create" method="POST" enctype="multipart/form-data"> 
                  {{csrf_field()}}             
                    <div class="form-group">
                        <input type="hidden" required name="kode_event"class="form-control" id="kode_event"  >
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Event</label>
                        <input type="text" required name="nama"class="form-control" id="namalengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Lokasi</label>
                        <input type="text"  required name="lokasi"class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="gambars">Foto</label>
                        <input type="file" name="gambars" required class="form-control" id="gambars">
                    </div>
                    <input type="hidden" name="created_at" class="form-control" id="created_at">
                    <input type="hidden" name="updated_at" class="form-control" id="updated_at">    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
      </div>
    </div>
  </div>
</div>

@endsection