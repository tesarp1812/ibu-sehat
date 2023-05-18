<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IBU HAMIL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Website Ibu Sehat</h3>
                    <h5 class="text-center"><a href="">IBU SEHAT</a></h5>         
                    <hr>
                </div>
                <div class="card border-5 shadow-sm rounded right">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col-md-1">NAMA</th>
                                <th scope="col-md-1">UMUR</th>
                                <th scope="col-md-1">AGAMA</th>
                                <th scope="col-md-1">PENDIDIKAN</th>
                                <th scope="col-md-1">ALAMAT</th>
                                <th scope="col-md-1">NOMER TELEPON</th>
                                <th scope="col-md-1">NAMA SUAMI</th>
                                <th scope="col-md-1">UMUR SUAMI</th>
                                <th scope="col-md-1">AGAMA SUAMI</th>
                                <th scope="col-md-1">PENDIDIKAN SUAMI</th>
                                <th scope="col-md-1">PEKERJAAN SUAMI</th>
                                <th scope="col-md-1">ALAMAT SUAMI</th>
                                <th scope="col-md-1">NOMER SUAMI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    {{-- <td class="text-center">
                                        <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                    </td> --}}
                                    <td>{{ $post->nama }}</td>
                                    <td>{!! $post->umur !!}</td>
                                    <td>{!! $post->agama !!}</td>
                                    <td>{!! $post->pendidikan !!}</td>
                                    <td>{!! $post->alamat !!}</td>
                                    <td>{!! $post->nomer_tlpn !!}</td>
                                    <td>{!! $post->nama_suami !!}</td>
                                    <td>{!! $post->umur_suami !!}</td>
                                    <td>{!! $post->agama_suami !!}</td>
                                    <td>{!! $post->pendidikan_suami !!}</td>
                                    <td>{!! $post->pekerjaan_suami !!}</td>
                                    <td>{!! $post->alamat_suami !!}</td>
                                    <td>{!! $post->nomer_suami !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>