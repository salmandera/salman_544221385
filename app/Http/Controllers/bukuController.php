<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{

    protected $buku;

    public function __construct(){
        $this->buku = new Buku();

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $response['Buku'] = $this->buku->all();
       return view('pages.index')->with($response);
    }




    public function store(Request $request)
    {
        //dd($request->all());
        $this->buku->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['buku'] = $this->buku->find($id);
        return view('pages.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $buku = $this->buku->find($id);

        $buku->update(array_merge($buku->toArray(), $request->toArray()));
        return redirect ('buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku =$this->buku->find($id);
        $buku->delete();
        return redirect('buku');
    }
}
