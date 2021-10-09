@extends('layouts.app')

@section('content')

<div class="main-content">
    <section class="section">
          <div class="section-header text-center">
            <h1>Data Customer</h1>
          </div>

<<<<<<< Updated upstream
          <a href ="" class="btn btn-primary mb-3">Tambah Data</a>
=======
         

          <a href ="/home/create/" class="btn btn-primary mb-3">Tambah Data</a>
>>>>>>> Stashed changes
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
                                    <a href="" class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></a>
                                    <a href="" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>
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