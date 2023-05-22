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
                            <strong class="card-title">Data subjektif</strong>

                            <div class="pull-right">
                                <a href="{{ route('subjektif.create') }}">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        
                        <div class="card-body">

                           

                            {{-- <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>KELUHAN</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjektifs as $subjektif)
                                        <tr>
                                            <td>{{ $subjektif->keluhan }}</td>
                                            
                                            <td>
                                                <a href="{{ route('subjektif.edit', $subjektif->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>

                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('subjektif.destroy', $subjektif->id) }}" class="d-inline"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}

                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>

@endsection