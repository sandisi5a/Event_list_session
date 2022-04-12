@extends('layouts\master')

@section('content')
        @if(session('sukses'))
    <div class="alert alert-success" role="alert">
            
    </div>
    @endif
        <div class="row">
           <h2>Edit Event </h2>   
        </div>
    <!--konten--> 
    
    <!-- konten-->
                <form action="/event/{{$event->id}}/update" method="POST" enctype="multipart/form-data"> 
                  {{csrf_field()}}             
                    <div class="form-group">
                        <input type="hidden" name="kode_event"class="form-control" id="kode_event"  >
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Event</label>
                        <input type="text" name="nama"class="form-control" id="namalengkap"  value="{{$event->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Lokasi</label>
                        <input type="text" name="lokasi"class="form-control" id="email" value="{{$event->lokasi}}">
                    </div>
                    <div class="form-group">
                        <label for="gambars">Foto</label>
                        <input type="file" name="gambars" class="form-control" id="gambars" value="{{$event->gambars}}">
                    </div>
                    <input type="hidden" name="created_at" class="form-control" id="created_at">
                    <input type="hidden" name="updated_at" class="form-control" id="updated_at">    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
      </div>
    </div>
  </div>
</div>

@endsection