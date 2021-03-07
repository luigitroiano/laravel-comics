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
          <img src="{{ asset('storage/' . $item->cover) }}" alt="">  
        </td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>
          <a href="{{ route('admin.novels.show', ['novel'=>$item->slug] )}}" title="Show" class="btn btn-primary"><i class="fas fa-eye"></i></a>
          <a href="{{ route('admin.novels.edit', ['novel'=>$item->slug] )}}" title="Edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
          
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroy-{{ $item->id }}"><i class="fas fa-trash"></i></button>
          {{-- Start Add Modal -  --}}
          <div class="modal fade" id="destroy-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="post-destroy-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="#destroy-{{ $item->id }} title">Delete Novel</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  &#x1F6A8; Sei sicuro di volerlo cancellare? &#x1F6A8; 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form action="{{ route('admin.novels.destroy', ['novel'=>$item->slug])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        {{-- End Add Model --}}
        </td>
      </tr>
      @empty
      No Novels to show...
    @endforelse
  </tbody>
</table>
@endsection