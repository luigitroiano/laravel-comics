@extends('layouts.dashboard')
@section('content')
<h3>Novel with ID {{ $novel->id }}</h3>
  
<h1>{{ $novel->name }}</h1>
  <img src="{{ asset('storage/' . $novel->cover) }}" alt="">  
<p>{{ $novel->description }}</p>
  
@endsection