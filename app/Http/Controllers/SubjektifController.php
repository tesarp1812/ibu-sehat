<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Subjektif;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class SubjektifController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Subjektif::latest()->paginate(5);

        //render view with posts
        return view('subjektif.index', compact('subjektif'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('subjektif.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:1',
            'umur' => 'required|min:1',
            'agama' => 'required|min:1',
            'pendidikan' => 'required|min:1',
            'alamat' => 'required|min:1',
            'nomer_tlpn' => 'required|min:1',
            'nama_suami' => 'required|min:1',
            'umur_suami' => 'required|min:1',
            'agama_suami' => 'required|min:1',
            'pendidikan_suami' => 'required|min:1',
            'pekerjaan_suami' => 'required|min:1',
            'alamat_suami' => 'required|min:1',
            'nomer_suami' => 'required|min:1'
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        Subjektif::create([
            'nama'              => $request->nama,
            'umur'              => $request->umur,
            'agama'             => $request->agama,
            'pendidikan'        => $request->pendidikan,
            'alamat'            => $request->alamat,
            'nomer_tlpn'        => $request->nomer_tlpn,
            'nama_suami'        => $request->nama_suami,
            'umur_suami'        => $request->umur_suami,
            'agama_suami'       => $request->agama_suami,
            'pendidikan_suami'  => $request->pendidikan_suami,
            'pekerjaan_suami'   => $request->pekerjaan_suami,
            'alamat_suami'      => $request->alamat_suami,
            'nomer_suami'       => $request->nomer_suami
        ]);

        //redirect to index
        return redirect()->route('subjektif.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = subjektif::findOrFail($id);

        //render view with post
        return view('subjektif.show', compact('subjektif'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Subjektif::findOrFail($id);

        //render view with post
        return view('subjektif.edit', compact('subjektif'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:1',
            'umur'   => 'required|min:1',
            'agama'   => 'required|min:1',
            'pendidikan' => 'required|min:1',
            'alamat' => 'required|min:1',
            'nomer_tlpn' => 'required|min:1',
            'nama_suami' => 'required|min:1',
            'umur_suami' => 'required|min:1',
            'agama_suami' => 'required|min:1',
            'pendidikan_suami' => 'required|min:1',
            'pekerjaan_suami' => 'required|min:1',
            'alamat_suami' => 'required|min:1',
            'nomer_suami' => 'required|min:1'
        ]);

        //get post by ID
        $post = Subjektif::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            // $image = $request->file('image');
            // $image->storeAs('public/posts', $image->hashName());

            //delete old image
            // Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                // 'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'umur'   => $request->umur,
                'agama'   => $request->agama,
                'pendidikan'   => $request->pendidikan,
                'alamat'   => $request->alamat,
                'nomer_tlpn'   => $request->nomer_tlpn,
                'nama_suami'   => $request->nama_suami,
                'umur_suami'   => $request->umur_suami,
                'agama_suami'   => $request->agama_suami,
                'pendidikan_suami'   => $request->pendidikan_suami,
                'pekerjaan_suami'   => $request->pekerjaan_suami,
                'alamat_suami'   => $request->alamat_suami,
                'nomer_suami'   => $request->nomer_suami
            ]);
        } else {

            //update post without image
            $post->update([
                'nama'     => $request->nama,
                'umur'   => $request->umur,
                'agama'   => $request->agama,
                'pendidikan'   => $request->pendidikan,
                'alamat'   => $request->alamat,
                'nomer_tlpn'   => $request->nomer_tlpn,
                'nama_suami'   => $request->nama_suami,
                'umur_suami'   => $request->umur_suami,
                'agama_suami'   => $request->agama_suami,
                'pendidikan_suami'   => $request->pendidikan_suami,
                'pekerjaan_suami'   => $request->pekerjaan_suami,
                'alamat_suami'   => $request->alamat_suami,
                'nomer_suami'   => $request->nomer_suami
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Subjektif::findOrFail($id);

        //delete image
        Storage::delete('public/subjektif/' . $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('subjektif.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
