@extends('layouts.main')
@section('container')
<h2 style="margin-top: 80px">{{ $name }}</h2>
<p>{{ $email }}</p>
<img src="{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle ">
    
@endsection
 


    
