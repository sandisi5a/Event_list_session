@extends('layouts\master')

@section('content')
        @if(session('sukses'))
    <div class="alert alert-success" role="alert">
            
    </div>
    @endif
        <div class="row">
           <h2>Edit User </h2>   
        </div>
    <!--konten--> 
    
    <!-- konten-->
                <form action="/user/{{$user->id}}/update" method="POST" enctype="multipart/form-data"> 
                  {{csrf_field()}}             
                  <div class="form-group">
                        <input type="hidden" required name="id"class="form-control" id="id"  >
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" required name="name"class="form-control" id="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"  required name="email"class="form-control" id="email" value="{{$user->email}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required class="form-control" id="password" value="{{$user->password}}">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" required class="form-control" id="position" value="{{$user->position}}">
                    </div>    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
      </div>
    </div>
  </div>
</div>

@endsection