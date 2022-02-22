@extends('layout')

@section('title')
Login here
@endsection

@section('content')
<div class="from-group">

<h1>login here</h1>
</div>


<form action="{{ route('login.post') }}" method="post">
@csrf

   <div class="from-group">
       <label for="email">E-mail address:</label>
       <div class="col-md-6">
           <input type="email" class="from-control" name="email">
           @if ($errors->has('email'))
           <span class="text-danger">{{ $errors->first('email') }}</span>
       @endif
       </div>
   </div>

   <div class="from-group">
       <label for="password">password:</label>
       <div class="col-md-6">
        <input type="password" class="from-control" name="password">
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
       </div>

       <div class="col-md-6">
           <button type="submit"class="btn btn-primary">
               login
           </button>
       </div>


   </div>





</form>



@endsection
