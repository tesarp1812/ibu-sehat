<?php

namespace App\Http\Controllers;

//import Model "subjektif
use App\Models\Subjektif;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class SubjektifController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get subjektifs
        $subjektifs = subjektif::latest()->get();

        //render view with subjektifs
        return view('subjektif.index', compact('subjektifs'));
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
            'keluhan' => 'required|min:1',
            'riwayat_penyakit' => 'required|min:1',
            'riwayat_keluarga' => 'required|min:1',
            'riwayat_dulu' => 'required|min:1',
            'menikah_ke' => 'required|min:1',
            'usia_menikah' => 'required|min:1',
            'lama_menikah' => 'required|min:1',
            'HPHT' => 'required|min:1',
            'menarche' => 'required|min:1',
            'lama_haid' => 'required|min:1',
            'siklus_haid' => 'required|min:1',
            'warna' => 'required|min:1',
            'konsisten' => 'required|min:1',
            'flour_albus' => 'required|min:1',
            'riwayat_kehamilan' => 'required|min:1',
            'riwayat_kb' => 'required|min:1'
        ]);


        //create post
        Subjektif::create([
            'keluhan'              => $request->keluhan,
            'riwayat_penyakit'     => $request->riwayat_penyakit,
            'riwayat_keluarga'     => $request->riwayat_keluarga,
            'riwayat_dulu'         => $request->riwayat_dulu,
            'menikah_ke'           => $request->menikah_ke,
            'usia_menikah'         => $request->usia_menikah,
            'lama_menikah'         => $request->lama_menikah,
            'HPHT'                  => $request->HPHT,
            'menarche'              => $request->menarche,
            'lama_haid'             => $request->lama_haid,
            'siklus_haid'           => $request->siklus_haid,
            'warna'                 => $request->warna,
            'konsisten'             => $request->konsisten,
            'flour_albus'           => $request->flour_albus,
            'riwayat_kehamilan'     => $request->riwayat_kehamilan,
            'riwayat_kb'            => $request->riwayat_kb,
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
        $subjektifs = Subjektif::findOrFail($id);

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
            'keluhan'   => 'required|min:1'
        ]);

        //get post by ID
        $subjektif = Subjektif::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            // Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $subjektif->update([
                'keluhan'              => $request->keluhan,
                'riwayat_penyakit'     => $request->riwayat_penyakit,
                'riwayat_keluarga'     => $request->riwayat_keluarga,
                'riwayat_dulu'         => $request->riwayat_dulu,
                'menikah_ke'           => $request->menikah_ke,
                'usia_menikah'         => $request->usia_menikah,
                'lama_menikah'         => $request->lama_menikah,
                'HPHT'                  => $request->HPHT,
                'menarche'              => $request->menarche,
                'lama_haid'             => $request->lama_haid,
                'siklus_haid'           => $request->siklus_haid,
                'warna'                 => $request->warna,
                'konsisten'             => $request->konsisten,
                'flour_albus'           => $request->flour_albus,
                'riwayat_kehamilan'     => $request->riwayat_kehamilan,
                'riwayat_kb'            => $request->riwayat_kb,
            ]);
        }

        //redirect to index
        return redirect()->route('subjektif.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $subjektif = Subjektif::findOrFail($id);

        //delete image
        // Storage::delete('public/subjektif/' . $subjektif->image);

        //delete post
        $subjektif->delete();

        //redirect to index
        return redirect()->route('subjektif.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
