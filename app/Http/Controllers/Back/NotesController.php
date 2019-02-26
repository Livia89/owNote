<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Note;

use Auth;


class NotesController extends Controller
{
    public function index(){
        
       
        $notas = Auth::user()->notes()->get(); // get all notes of a user 
        
        return view('notes.home', compact("notas"));

    }

    public function add(){
       return view('notes.add');
    }

    public function save(Request $req){
        
        $note = $req->all();
        if(isset($note['title'])){
            $note["user_id"] = Auth::user()->id;             

            /* Mostrar este status quando voltar para a home "Listagem dos tickets", mas estou tentando listar os tickets do user primeiro :D*/ 
            $confirm = Note::Create($note);

            if($confirm){
                $req->session()->flash("statusNote",'Your note was successfully created');
                return redirect()->route("home");
            }
        }
    }

    public function edit(Request $req , $id=''){

        // To update
        if(isset($req->title)){
            $note = $req->all();
            Note::find($id)->update($note);
            return redirect()->route('home');
        }

        if(empty($id)){    
            $req->session()->flash("error", "Something went wrong :S");
            return redirect()->route("home");
        }
        
        $note = Note::find($id);
        
        return view("notes.edit", compact('note'));

    }

    public function deleteNote($id='', Request $req){
        
        if(empty($id)) return redirect()->route("home");

        if(strpos($req->url(), "All") !== false){
            Note::getQuery()->delete();
            return redirect()->route("home");
        }

        Note::find($id)->delete();
        $req->session()->flash("Success", "Deleted :D");
        return redirect()->route("home");

    }

    
}
