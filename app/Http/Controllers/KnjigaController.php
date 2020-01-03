<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Knjiga;
use DB;

class KnjigaController extends Controller
{
    public function pregledajSve(){
        $knjige = Knjiga::all();
        return view('index', ['knjige'=>$knjige]);
    }

    public function spremi(){

        request()->validate([
            'naslov' => 'required',
            'autor' => 'required',
            'opis' => 'required'
        ]);

        $knjiga = new Knjiga();
        $knjiga->naslov = request('naslov');
        $knjiga->autor = request('autor');
        $knjiga->opis = request('opis');
        $knjiga->save();

        return redirect('index');
    }


    public function izbrisi($id){
        DB::delete('delete from knjige where id = ?', [$id]);
        return redirect('index');
    }
}
