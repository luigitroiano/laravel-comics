@extends('layouts.dashboard')
@section('content')
<div style="display: flex; justify-content: space-between">
  <h1>All novels</h1>
  <a href="{{ route('admin.novels.create')}}" title="Create a new novel" class="btn" style="color: white; background-color: black; margin: 0.5rem 0; height: fit-content;;">New Novel</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>IMG</th>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($novels as $item)
      <tr>
        <td scope="row">{{ $item->id }}</td>
        <td>
          @if ($item->cover)
            <img src="{{ asset('storage/' . $item->cover) }}" alt="">  
            <img src="{{ asset($item->cover) }}" alt="">    
          @endif
        </td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>
          <a href="{{ route('admin.novels.show', ['novel'=>$item->slug] )}}" title="Show" class="btn btn-primary"><i class="fas fa-eye"></i></a>
          <a href="{{ route('admin.novels.edit', ['novel'=>$item->slug] )}}" title="Edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
          <a href="#" title="Delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
      @empty
      No Novels to show...
    @endforelse
  </tbody>
</table>
@endsection