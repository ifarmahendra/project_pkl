@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success " role="alert">                                 
                            {{ session('status') }}
                            
                        </div>
                    @endif                   
                </div>
                <strong>Tambah Data</strong>
                @if (session('success'))
                        <div class="alert alert-success alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
<<<<<<< Updated upstream
                @endif   
=======
                 @endif   
>>>>>>> Stashed changes
                <form action="{{route('home.store')}}" method="post"> 
                    @csrf
                    <div class="form-group row mt-3">
                        <div class="col-md-12" >
                            <label>nama</label>
                            <input type="text" name="nama" class="form-control">
                    </div>                   
                        <div class="col-md-12">
                            <label>nim</label>
                            <input type="number" name="nim" class="form-control">
                    </div>                      
                        <div class="col-md-12" >
                            <label>kelas</label>
                            <input type="number" name="kelas" class="form-control">
                    </div>
                    <div class="col-md-12 mt-2" >
                    <button type="submit" class="btn btn-primary">tambah</button>
                    </div>          
                </form>
                
            </div>
        </div>



    </div>
</div>
@endsection


