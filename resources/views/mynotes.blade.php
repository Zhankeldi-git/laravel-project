@extends('layouts.app')

@section('title-block')

My Notes

@endsection

@section('content')

<h1> My Notes</h1>

	@foreach($notesdate as $elements)
		<div class="alert alert-info">
			<h3>{{$elements->postsubject}}</h3>
			<h2>{{$elements->note}}</h2>
			<p>{{$elements->created_at}}, {{$elements->email}}</p>



		</div>

	@endforeach


@endsection


