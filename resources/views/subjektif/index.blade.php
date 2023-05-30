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

<div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <strong>Basic Form</strong> Elements
      </div>
      <div class="card-body card-block">
        
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

            @foreach ($subjektifs as $subjektif) 

            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">KELUHAN</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->keluhan }}</p>
                </div>
              </div>
    
              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">RIWAYAT PENYAKIT</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->riwayat_penyakit }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">RIWAYAT KELUARGA</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->riwayat_keluarga }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">RIWAYAT DULU</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->riwayat_dulu }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">MENIKAH KE</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->menikah_ke }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">USIA MENIKAH</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->usia_menikah }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">LAMA MENIKAH</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->lama_menikah }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">HPHT</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->HPHT }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">menarche</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->menarche }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">LAMA HAID</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->lama_haid }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">SIKLUS HAID</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->siklus_haid }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">WARNA</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->warna }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">KONSISTEN</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->konsisten }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">FLOUR ALBUS</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->flour_albus }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">RIWAYAT KEHAMILAN</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->riwayat_kehamilan }}</p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">RIWAYAT KB</label></div>
                <div class="col-12 col-md-9">
                  <p class="form-control-static">{{ $subjektif->riwayat_kb }}</p>
                </div>
              </div>
              
                
            @endforeach

          </div>
            </div>
          </div>

@endsection