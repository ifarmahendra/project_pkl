@extends('layouts.app')

@section('content')

<div class="main-content">
    <section class="section">
          <div class="section-header text-center">
            <h1>Data Customer</h1>
          </div>

            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success " role="alert">                                 
                            {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif                   
            </div>  

          <a href ="/home/create/" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">          
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @foreach($data as $dt)

                        <tr>
                            <th scope="row">{{$i++}}</th>
                            
                            <td>{{$dt->nama}}</td>
                            <td>{{$dt->nim}}</td>
                            <td>{{$dt->kelas}}</td>
                                <td>
                                    <a href="{{route ('ifar', ['id'=>$dt->id])}}" class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></a>
                                    <a href="{{route('home.edit', ['home'=>$dt->id])}}" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>
                                </td>
                        </tr>
                   @endforeach     
                    
                    </tbody>
                </table>
        </div>
        </div>
      </section>
</div>   

@endsection