<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IBU SEHAT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('subjektif.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">KELUHAN</label>
                                <input type="text" class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" value="{{ old('keluhan') }}" placeholder="Masukkan keluhan">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">RIWAYAT PENYAKIT</label>
                                <input type="text" class="form-control @error('riwayat_penyakit') is-invalid @enderror" name="riwayat_penyakit" value="{{ old('riwayat_penyakit') }}" placeholder="Masukkan riwayat penyakit">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">RIWAYAT KELUARGA</label>
                                <input type="text" class="form-control @error('riwayat_keluarga') is-invalid @enderror" name="riwayat_keluarga" value="{{ old('riwayat_keluarga') }}" placeholder="Masukkan riwayat keluarga">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">RIWAYAT DULU</label>
                                <input type="text" class="form-control @error('riwayat_dulu') is-invalid @enderror" name="riwayat_dulu" value="{{ old('riwayat_dulu') }}" placeholder="Masukkan riwayat dulu Terakhir">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MENIKAH KE</label>
                                <input type="text" class="form-control @error('menikah_ke') is-invalid @enderror" name="menikah_ke" value="{{ old('menikah_ke') }}" placeholder="Masukkan menikah keberapa">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">USIA MENIKAH</label>
                                <input type="text" class="form-control @error('usia_menikah') is-invalid @enderror" name="usia_menikah" value="{{ old('usia_menikah') }}" placeholder="Menikah Usia Berapa">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">LAMA MENIKAH</label>
                                <input type="text" class="form-control @error('lama_menikah') is-invalid @enderror" name="lama_menikah" value="{{ old('lama_menikah') }}" placeholder="Masukkan Nama Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">HPHT</label>
                                <input type="date" class="form-control @error('HPHT') is-invalid @enderror" name="HPHT" value="{{ old('HPHT') }}" placeholder="Masukkan Umur Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MENARCHE</label>
                                <input type="text" class="form-control @error('menarche') is-invalid @enderror" name="menarche" value="{{ old('menarche') }}" placeholder="Masukkan Menarche">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">LAMA HAID</label>
                                <input type="text" class="form-control @error('lama_haid') is-invalid @enderror" name="lama_haid" value="{{ old('lama_haid') }}" placeholder="Masukkan lama haid">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PEKERJAAN SUAMI</label>
                                <input type="text" class="form-control @error('pekerjaan_suami') is-invalid @enderror" name="pekerjaan_suami" value="{{ old('pekerjaan_suami') }}" placeholder="Masukkan Pekerjaan Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SIKLUS HAID</label>
                                <input type="text" class="form-control @error('siklus_haid') is-invalid @enderror" name="siklus_haid" value="{{ old('siklus_haid') }}" placeholder="Masukkan siklus haid">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">WARNA</label>
                                <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" value="{{ old('warna') }}" placeholder="Masukkan warna">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KONSISTEN</label>
                                <input type="text" class="form-control @error('konsisten') is-invalid @enderror" name="konsisten" value="{{ old('konsisten') }}" placeholder="Masukkan konsisten">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">FLOUR ALBUS</label>
                                <input type="text" class="form-control @error('flour_albus') is-invalid @enderror" name="flour_albus" value="{{ old('flour_albus') }}" placeholder="Masukkan flour albus">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">RIWAYAT KEHAMILAH</label>
                                <input type="text" class="form-control @error('riwayat_kehamilan') is-invalid @enderror" name="riwayat_kehamilan" value="{{ old('riwayat_kehamilan') }}" placeholder="Masukkan riwayat kehamilan">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">RIWAYAT KB</label>
                                <input type="text" class="form-control @error('riwayat_kb') is-invalid @enderror" name="riwayat_kb" value="{{ old('riwayat_kb') }}" placeholder="Masukkan riwayat kb">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <a class="btn btn-primary" href="{{ route('subjektif.index') }}">KEMBALI</a>
                            

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>