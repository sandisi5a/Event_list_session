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
           <h2>User Control</h2>   
            <button type="button" class="align-right" data-toggle="modal" data-target="#exampleModal">Add+</button>
        </div>
    <!--konten--> 
    <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Position</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    
            @foreach($user as $us)
            <tr>
                <td>{{ $us  ->name}}</td>
                <td>{{ $us  ->email }}</td>
                <td>{{ $us  ->position}}</td>
                <td> 
                <a href="/user/{{$us->id}}/edit" class="btn btn-success btn-sm"> Edit</a>
                <a href="/user/{{$us->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan di Hapus ?')"> Hapus</a>
                </td>
            </tr>
            @endforeach
</table>
    
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
                <form action="/user/create" method="POST" enctype="multipart/form-data"> 
                  {{csrf_field()}}             
                    <div class="form-group">
                        <input type="hidden" required name="id"class="form-control" id="id  "  >
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" required name="name"class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"  required name="email"class="form-control" id="email">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" required class="form-control" id="position">
                    </div>
                     
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