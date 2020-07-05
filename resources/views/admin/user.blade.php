@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>User List</h1>
        </div>         
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jumlah User: {{ $jumlah_user }}</h3>
        </div>
        <div class="card-body">
            <div class="box-body table-responsive no-padding">
                @if (!empty($user_list))
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr class="d-flex">
                                <th class="col-3">No</th>
                                <th class="col-6">Name</th>                                
                                <th class="col-3">Action</th>
                            </tr>
                        </thead>                    
                        <tbody>
                            @foreach($user_list as $user)
                            <tr class="d-flex">
                                <td class="col-3">{{ $loop->iteration }}</td>
                                <td class="col-6">{{ $user->name }}</td>                                
                                <td class="col-3">
                                    <div class="btn-group">
                                        <!-- Detail icon -->
                                        <a class="btn" data-toggle="modal" data-target="#detailModal{{$user->id}}"> <i class="fa fa-eye"></i></a>                                                                                                                        
                                    </div>                                                                                                                                                                                                                                                                    
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @foreach($user_list as $user)
                    <!-- Modal Detail -->
                    <div class="modal fade" id="detailModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="detailModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalTitle">Detail User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                    <table class="table table-sm table-hover">
                                        <tr>
                                            <th>Nama</th>
                                            <td><p>{{$user->name}}</p></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>
                                                <p>
                                                    @if($user->gender == 'L')
                                                        Laki - Laki
                                                    @elseif($user->gender == 'P')
                                                        Perempuan
                                                    @endif
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td><p>{{date("d F Y", strtotime($user->birth_date))}}</p></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><p>{{$user->address}}</p></td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon</th>
                                            <td><p>{{$user->telephone}}</p></td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td><img style="width:30%;" src="{{ asset('user/' . $user->photo) }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><p>{{$user->email}}</p></td>
                                        </tr>                                                              
                                    </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>Tidak ada data Product</p>
                @endif   
            </div>
        </div>
        <!-- /.card-body -->        
    </div>
    <!-- /.card -->    

</section>
<!-- /.content -->
@endsection