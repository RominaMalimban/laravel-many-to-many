<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Typology;
use App\Models\Product;
class MainController extends Controller
{
    // METODO CON LISTA PRODOTTI SUDDIVISI PER CATEGORIA IN HOME:
    public function home(){

        $categories = Category::all();

        return view('pages.home', compact('categories'));
    }

    // METODO CON LISTA PRODOTTI:
    public function products(){

        $products = Product:: all();
        
        return view ('pages.product.home', compact('products'));
    }

    // METODO FORM:
    public function create(){

        $typologies = Typology::all();

        return view ('pages.product.create', compact('typologies'));
    }

    // METODO PER RICEZIONE DATI DA FORM:
    public function productStore(Request $request){

        $data= $request -> validate([
            'name' => 'required|string|max:64', 
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'typology_id' => 'required|string'
        ]);

        // mi genero un codice randomico per non spaccare la pagina dal momento che non ho creato l'input per il code nel 
        // form:
        $code = rand(10000, 9999 );
        $data['code'] = $code;

        $product = Product::make($data);
        $typology = Typology::find($data['typology_id']);
        $product -> typology()->associate($typology);

        $product -> save();

        return redirect()-> route('product.home');
    }
}
