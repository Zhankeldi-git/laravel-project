<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;
use App\Models\Note;

class NoteController extends Controller{

	public function addNote(NoteRequest $nReq){

		$note = new Note();
		$note->postsubject = $nReq->input('postsubject');
		$note->email = $nReq->input('email');
		$note->note = $nReq->input('note');

		$note->save();


		return redirect()->route('notes')->with('success', 'Entry added successfully');

		
	}

	public function allNote(){

		$note = new Note();
		return view('mynotes', ['notesdate' => $note->orderBy('id', 'desc')->get()]);
	}


 }
