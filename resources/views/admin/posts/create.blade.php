@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      {{-- <h2>{{Auth::user()->name}}</h2> --}}
      <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="body" id="body" cols="30" rows="10">

          </textarea>
        </div>
        
        {{-- <input type="hidden" name="user_id" value="{{Auth::user()->name}}"> --}}
        <button class="btn btn-success" type="submit">Salva</button>
      </form>
    </div>
  </div>
    
@endsection