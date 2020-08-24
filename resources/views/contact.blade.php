@extends('layouts.app')

@section('title-block')

Contacts

@endsection



@section('content')


<h1>Contacts</h1>
@include('inc.messages')




 
 <form action="{{route('formcontact')}}" method="post">
    
    {{@csrf_field()}}
     <div class="form-group">
         <label for="username"> Username </label>
         <input type="text" name="username" id="username" placeholder="Youre username" class="form-control">
         
     </div>
      <div class="form-group">
         <label for="email"> Email </label>
         <input type="email" name="email" id="email" placeholder="Youre email" class="form-control">
         
     </div>
      <div class="form-group">
         <label for="subject"> Message theme </label>
         <input type="text" name="subject" id="subject" placeholder="message theme" class="form-control">
         
     </div>
     
      <div class="form-group">
         <label for="message"> Message </label>
         <textarea name="message" id="message" placeholder="Print message" class="form-control"></textarea>
         
     </div>
     <button type="submit" class="btn btn-success" id="button">Send message</button>
     
     
 </form>


@endsection


@section('aside')
    @parent
<h2>Our contacts</h2>
  <h3>Kazakhstan, Almaty 000050 <br/> Esentai mall Al-Farabi 77/8 <br/>zhaks.yerkin@gmail.com <br/>8(777)583-82-33</h3>
   
    
@endsection



