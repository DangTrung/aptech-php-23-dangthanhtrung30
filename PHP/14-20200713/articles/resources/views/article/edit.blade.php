@extends('layout.master')
@section('content')
@component('layout.components.title')
edit page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('article.update',$article->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <!-- @csrf -->
        <input type="hidden" name="_method" value="put">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="title">Title</label>
          <input type="text" class="form-control rounded-0" id="title" placeholder="title" name="title"
            value="{{$article->title}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="decription">Decription</label>
          <input type="text" class="form-control rounded-0" id="description" placeholder="Decription" name="description"
            value="{{$article->description}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="content">Content</label>
          <input type="text" class="form-control rounded-0" id="content" placeholder="Content" name="content"
            value="{{$article->content}}">
        </div>
        <button class="btn btn-outline-primary" type="submit">save</button>
      </form>
    </div>
  </div>
</div>
@endsection