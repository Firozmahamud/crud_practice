@extends('layout')

@section('title')
Registration here
@endsection

@section('content')
<div class="from-group">

<h1>Registration here</h1>
</div>


<form action="{{ route('postregister') }}" method="post">
@csrf


<div class="from-group">
    <label for="email">Name:</label>
    <div class="col-md-6">
        <input type="text" class="from-control" name="name" required >
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
    </div>

   <div class="from-group">
       <label for="email">E-mail address:</label>
       <div class="col-md-6">
           <input type="email" class="from-control" name="email" required >
           @if ($errors->has('email'))
           <span class="text-danger">{{ $errors->first('email') }}</span>
       @endif
       </div>
   </div>

   <div class="from-group">
       <label for="password">password:</label>
       <div class="col-md-6">
        <input type="password" class="from-control" name="password" required >
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
       </div>

       <div class="col-md-6">
           <button type="submit"class="btn btn-primary">
               register
           </button>
       </div>


   </div>





</form>



@endsection
