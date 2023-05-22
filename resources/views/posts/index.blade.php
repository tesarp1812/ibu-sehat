@extends('main')

@section('title', 'dashboard')

@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fa fa-dashboard"></i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="content mt-3">

        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>

                            <div class="pull-right">
                                <a href="{{ route('posts.create') }}">
                                    <i class="fa fa-plus"></i> Tambah Pasien
                                </a>
                            </div>
                        </div>

                        
                        
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAMA</th>
                                        <th>UMUR</th>
                                        <th>AGAMA</th>
                                        <th>PENDIDIKAN</th>
                                        <th>ALAMAT</th>
                                        <th>NOMER TELEPON</th>
                                        <th>NAMA SUAMI</th>
                                        <th>UMUR SUAMI</th>
                                        <th>AGAMA SUAMI</th>
                                        <th>PENDIDIKAN SUAMI</th>
                                        <th>PEKERJAAN SUAMI</th>
                                        <th>ALAMAT SUAMI</th>
                                        <th>NOMER SUAMI</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->nama }}</td>
                                            <td>{{ $post->umur }}</td>
                                            <td>{{ $post->agama }}</td>
                                            <td>{{ $post->pendidikan }}</td>
                                            <td>{{ $post->alamat }}</td>
                                            <td>{{ $post->nomer_tlpn }}</td>
                                            <td>{{ $post->nama_suami }}</td>
                                            <td>{{ $post->umur_suami }}</td>
                                            <td>{{ $post->agama_suami }}</td>
                                            <td>{{ $post->pendidikan_suami }}</td>
                                            <td>{{ $post->pekerjaan_suami }}</td>
                                            <td>{{ $post->alamat_suami }}</td>
                                            <td>{{ $post->nomer_suami }}</td>
                                            <td>
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>

                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('posts.destroy', $post->id) }}" class="d-inline"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                                

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info">Data Subjektif</button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>

@endsection
