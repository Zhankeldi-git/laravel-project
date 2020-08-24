@extends('layouts.app')

@section('title-block')

Add Notes

@endsection


@section('content')

<h1>Add Notes</h1>
@include('inc.messages')

<form action="{{route('notesadd')}}" method="post">
    
    {{@csrf_field()}}
     <div class="form-group">
         <label for="postsubject"> Post subject </label>
         <input type="text" name="postsubject" id="postsubject" placeholder="add post subject" class="form-control">
         
     </div>
      <div class="form-group">
         <label for="email"> Email </label>
         <input type="email" name="email" id="email" placeholder="Youre email" class="form-control">
         
     </div>
      <div class="form-group">
         <label for="note"> Add note </label>
         <textarea name="note" id="note" placeholder="add note" class="form-control"> </textarea>
      
     </div>
     
      
     <button type="submit" class="btn btn-success" id="button">ADD</button>
     
     
 </form>

 

@endsection


@section('aside')
    @parent
    <h1>
About the project</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis eum aspernatur dolore voluptatibus similique, optio est labore nemo corporis soluta quisquam adipisci molestias reiciendis aut odit doloremque laudantium, a impedit.</p>
    
@endsection