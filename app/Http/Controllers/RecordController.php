<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    { 
        return view('record', [
            "title" => "Medical Records",
            // "name" => "Daffa M Azhar",
            // "email" => "daffaazhar.19051@mhs.its.ac.id",
            // "articles" => Article::all()
            "records" => Record::latest()->get(),
        ]);
    }

    public function content(Record $record){
        return view('konten', [
            "record" => $record
        ]);
    }

}
