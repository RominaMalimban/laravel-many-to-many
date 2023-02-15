<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class MainController extends Controller
{
    // METODO CON LISTA PRODOTTI SUDDIVISI PER CATEGORIA IN HOME:
    public function home(){

        $categories = Category::all();

        return view('pages.home', compact('categories'));
    }

    // METODO FORM:
    public function create(){

        return view ('pages.product.create');
    }

    // METODO PER RICEZIONE DATI DA FORM:
    public function productStore(Request $request){

        $data= $request -> all();
    }
}
