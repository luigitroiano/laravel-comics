@extends('layouts.dashboard')
@section('content')
<h3>Post with ID {{ $novel->id }}</h3>
  
<h1>{{ $novel->name }}</h1>
@if ($novel->cover)
  <img src="{{ asset('storage/' . $novel->cover) }}" alt="">  
  <img src="{{ asset($novel->cover) }}" alt="">    
@endif

<p>{{ $novel->description }}</p>
  
@endsection