<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\kategori;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request, Builder $htmlBuilder)
    {
        $kategori = kategori::all();

     if ($request->ajax()) {
    $kategori = kategori::select(['id','nama_kategori']);
        return Datatables::of($kategori)

        ->addColumn('action', function($kategori){
            return view('datatable._action', [
                'model'=> $kategori,
                'form_url'=> route('kategori.destroy', $kategori->id),
                'edit_url'=> route('kategori.edit', $kategori->id),
                'confirm_message' => 'Yakin mau menghapus ' . $kategori->nama_kategori . '?'
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
    
    ->addColumn(['data' => 'nama_kategori', 'name'=>'nama_kategori', 'title'=>'Kategori kategori'])

    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('kategori.index')->with(compact('kategori','html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'nama_kategori'=> 'required|unique:kategoris,nama_kategori',
            ]);
        $kategori = kategori::create($request->except('cover'));

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $kategori->nama_kategori"
            ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $kategori = kategori::find($id);
        return view('kategori.edit')->with(compact('kategori'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $this->validate($request, ['nama_kategori' => 'required|unique:kategoris,nama_kategori,'. $id,
          
            ]);
        $poto = kategori::find($id);
        $poto->update($request->all());
       
        
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('kategori.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori= kategori::find($id);
        if(!kategori::destroy($id))return redirect()->back();
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"kategori Berhasil Dihapus"
            ]);
        return redirect()->route('kategori.index');
        }

}
            