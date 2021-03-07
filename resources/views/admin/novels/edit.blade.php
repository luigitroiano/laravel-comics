@extends('layouts.dashboard')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br/>
@endif
<form action="{{ route('admin.novels.update',  ['novel'=>$novel->slug] )}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  {{-- INPUT NAME --}}
  <div class="form-group">
    <label for="title">Novel Title</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Novel Title" aria-describedby="helpId" value="{{ $novel->name }}" required>
    <small id="helpId" class="text-muted">Insert Novel title</small>
  </div>
  {{-- INPUT DESCRIPTION --}}
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3" required>{{ $novel->description }}</textarea>
    <small class="text-muted">Write a description of the Novel</small>
  </div>
  {{-- INPUT PRICE --}}
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" min="1" max="100" step="0.01" name="price" id="price" class="form-control" placeholder="Novel price" aria-describedby="helpId" value="{{ $novel->price }}" required>
    <small class="text-muted">Insert Novel price E.g: 18,99</small>
  </div>
  {{-- INPUT AVAILABLE --}}
  <div class="form-group">
    <label for="available">Availability</label>
    <input type="number" min="0" max="1" name="available" id="available" class="form-control" placeholder="Availability" aria-describedby="helpId" value="{{ $novel->available }}" required>
    <small class="text-muted">Choose: '0' -> not available || '1' -> available</small>
  </div>
  {{-- INPUT ON SALE DATE --}}
  <div class="form-group">
    <label for="on_sale_date">On sale date</label>
    <input type="date" name="on_sale_date" id="on_sale_date" class="form-control" placeholder="Insert a date" aria-describedby="helpId" value="{{ $novel->on_sale_date }}" required>
    <small class="text-muted">Insert on sale date</small>
  </div>
  {{-- INPUT VOLUME --}}
  <div class="form-group">
    <label for="volume">Novel volume</label>
    <input type="number" min="1" max="100" name="volume" id="volume" class="form-control" placeholder="Insert the volume" aria-describedby="helpId" value="{{ $novel->volume }}" required>
    <small class="text-muted">Insert Novel's volume</small>
  </div>
  {{-- INPUT TRIM SIZE --}}
  <div class="form-group">
    <label for="trim_size">Novel's trim size</label>
    <select name="trim_size" id="trim_size" class="form-control" placeholder="Trim size" aria-describedby="helpId" value="{{ $novel->trim_size }}" required>
      <option value="" disabled selected>Trim size</option>
      <option value="6 5/8">6 5/8</option>
      <option value="10 3/6">10 3/6</option>
    </select>
    <small class="text-muted">Insert Novel's trim size</small>
  </div>
  {{-- INPUT PAGE --}}
  <div class="form-group">
    <label for="page">Novel's page</label>
    <input type="number" min="50" max="150" name="page" id="page" class="form-control" placeholder="Number of pages" aria-describedby="helpId" value="{{ $novel->page }}" required>
    <small class="text-muted">Insert the the number of pages</small>
  </div>
  {{-- INPUT RATE --}}
  <div class="form-group">
    <label for="rated">Novel's rate</label>
    <select name="rated" id="rated" class="form-control" placeholder="Rate" aria-describedby="helpId" value="{{ $novel->rated }}" required>
      <option value="" disabled selected>Rate</option>
      <option value="all_ages">All ages</option>
      <option value="teen">Teen</option>
      <option value="parental_advisor">Parental advisor</option>
      <option value="explicit_content">Explicit content</option>
    </select>
    <small class="text-muted">Insert Novel's rate</small>
  {{-- INPUT COVER --}}
  <div class="form-group">
    <label for="cover">Cover</label>
    <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="fileHelpId" value="{{ $novel->cover }}" required>
    <small id="fileHelpId" class="form-text text-muted">Add a cover image for the current Novel</small>
  </div>
  {{-- INPUT PARALLAX IMG --}}
  <div class="form-group">
    <label for="parallax">Parallax image</label>
    <input type="file" class="form-control-file" name="parallax" id="parallax" placeholder="Add a parallax image" aria-describedby="fileHelpId" required>
    <small id="fileHelpId" class="form-text text-muted">Add a cover parallax image for the current Novel</small>
  </div>
  {{-- BUTTON SUBMIT --}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection