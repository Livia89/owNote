<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Note;

use Auth;


class NotesController extends Controller
{
    public function index(){
        
        
        $notes = Auth::user()->notes()->get();
        
        dd($notes);

        
        return view('notes.home');



    }

    public function add(){
       return view('notes.add');
    }

    public function save(Request $req){
        
        $note = $req->all();
        if(isset($note['title'])){
            

            /* Mostrar este status quando voltar para a home "Listagem dos tickets", mas estou tentando listar os tickets do user primeiro :D*/ 
            $confirm = Note::Create($note);
            if($confirm){
                $req->session()->flash("statusNote",'Your note was successfully created');
                return redirect()->route("home");
            }
        }

    }
    
}
