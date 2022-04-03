@extends('layouts.pages')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<div class="container" style="margin-top: 120px;">
    <div class="row text-center" style="padding: 60px 0px 90px 0px;">
        <h1 class="text-warning">Thank You!</h1><br>
        <h1>Your Orders Have Been Submitted Successfully</h1><br>
        <a href="{{ url('/') }}" class="btn btn-success">Back To Home</a>


    </div>
</div>



@endsection



