@extends('template/main')

@section('title', 'Data PDLN Mahasiswa')

@section('content')
    <!-- Header -->
    <div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-da">
                  <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data PDLN Mahasiswa</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a class="btn btn-neutral" href="{{ url('/mahasiswa/create') }}">Tambah Data</a>
            </div>
          </div>
        </div>
      </div>
    </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data PDLN Mahasiswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th width="5%">No.</th>
                                        <th>Nama</th>
                                        <th>Tujuan</th>
                                        <th>Jangka Waktu</th>
                                        <th>Negara</th>
                                        <th>Surat UNS</th>
                                        <th>Belmawa</th>
                                        <th>KTLN Kemensetneg</th>
                                        <th>Status</th>
                                        <th></th>
                                        </tr>
                                    </thead class="list">
                                        <tr>
      
                                    @foreach ($mahasiswa as $row)
                                        <tr  class="text-light">
                                                <td width="5%">{{$loop->iteration}}</td>
                                                <td>{{$row->nama_mahasiswa}}</td>
                                                <td>{{$row->tujuan}}</td>
                                                <td>{{$row->jangka_waktu}}</td>
                                                <td>{{$row->negara}}</td>
                                                <td>{{$row->surat_uns}}</td>
                                                <td>{{$row->catatan_belmawa}}</td>
                                                <td>{{$row->ktln_kemensetnag}}</td>
                                                <td>{{$row->status}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="mahasiswa/edit/{{$row->id}}">Edit</a>
                                                    <a class="dropdown-item" onclick="return confirm('Anda yakin menghapus ')" href="mahasiswa/delete/{{$row -> id}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
    @endsection