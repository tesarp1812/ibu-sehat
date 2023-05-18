<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div> --}}

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $post->nama) }}" placeholder="Masukkan Nama Post">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">UMUR</label>
                                <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur', $post->umur) }}" placeholder="Masukkan umur Post">
                            
                                <!-- error message untuk umur -->
                                @error('umur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">AGAMA</label>
                                <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama', $post->agama) }}" placeholder="Masukkan Link">
                                
                                <!-- error message untuk agama -->  
                                @error('agama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENDIDIKAN</label>
                                <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan', $post->pendidikan) }}" placeholder="Masukkan Pendidikan Terakhir">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $post->alamat) }}" placeholder="Masukkan Alamat tinggal">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NOMER TELEPON</label>
                                <input type="text" class="form-control @error('nomer_tlpn') is-invalid @enderror" name="nomer_tlpn" value="{{ old('nomer_tlpn', $post->nomer_tlpn) }}" placeholder="Masukkan Nomer Telpon atau Whatapps">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA SUAMI</label>
                                <input type="text" class="form-control @error('nama_suami') is-invalid @enderror" name="nama_suami" value="{{ old('nama_suami', $post->nama_suami) }}" placeholder="Masukkan Nama Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">UMUR SUAMI</label>
                                <input type="text" class="form-control @error('umur_suami') is-invalid @enderror" name="umur_suami" value="{{ old('umur_suami', $post->umur_suami) }}" placeholder="Masukkan Umur Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">AGAMA SUAMI</label>
                                <input type="text" class="form-control @error('agama_suami') is-invalid @enderror" name="agama_suami" value="{{ old('agama_suami', $post->agama_suami) }}" placeholder="Masukkan Agama Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENDIDIKAN SUAMI</label>
                                <input type="text" class="form-control @error('pendidikan_suami') is-invalid @enderror" name="pendidikan_suami" value="{{ old('pendidikan_suami', $post->pendidikan_suami) }}" placeholder="Masukkan Pendidikan Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PEKERJAAN SUAMI</label>
                                <input type="text" class="form-control @error('pekerjaan_suami') is-invalid @enderror" name="pekerjaan_suami" value="{{ old('pekerjaan_suami', $post->pekerjaan_suami) }}" placeholder="Masukkan Pekerjaan Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT SUAMI</label>
                                <input type="text" class="form-control @error('alamat_suami') is-invalid @enderror" name="alamat_suami" value="{{ old('alamat_suami', $post->alamat_suami) }}" placeholder="Masukkan Nomer atau Whatsapps Suami">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">NOMER SUAMI</label>
                                <input type="text" class="form-control @error('nomer_suami') is-invalid @enderror" name="nomer_suami" value="{{ old('nomer_suami', $post->nomer_suami) }}" placeholder="Masukkan Umur">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            </div>

                            

                            

                            

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

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