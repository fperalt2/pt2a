<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Autor;

class AutorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function list() 
    { 
      $autors = Autor::all();

      return view('autor.list', ['autors' => $autors]);
    }

    function new(Request $request) 
    { 
      if ($request->isMethod('post')) {    
        // recollim els camps del formulari en un objecte autor

        $autor = new Autor;
        $autor->nom = $request->nom;
        $autor->cognoms = $request->cognoms;
        $autor->save();

        return redirect()->route('autor_list')->with('status', 'Nou autor '.$autor->nomCognoms().' creat!');
      }
      // si no venim de fer submit al formulari, hem de mostrar el formulari

      return view('autor.new');
    }

    function edit(Request $request, $id) 
    { 
      if ($request->isMethod('post')) {    
        // recollim els camps del formulari en un objecte autor

        $autor = Autor::find($id);
        $autor->nom = $request->nom;
        $autor->cognoms = $request->cognoms;
        $autor->save();

        return redirect()->route('autor_list')->with('status', 'Autor '.$autor->nomCognoms().' desat!');
      }
      // si no venim de fer submit al formulari, hem de mostrar el formulari
      
      $autor = Autor::find($id);

      return view('autor.edit', ['autor' => $autor]);
    }

    function delete($id) 
    { 
      $autor = Autor::find($id);
      $autor->delete();

      return redirect()->route('autor_list')->with('status', 'Autor '.$autor->nomCognoms().' eliminat!');
    }
}
