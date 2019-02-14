<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Note;


class NotesController extends Controller
{
    public function index(){
        return view('notes.home');
    }

    public function add(){
       return view('notes.add');
    }

    public function save(Request $req){
        
        $note = $req->all();
        dd($note['title']);

    }




}
