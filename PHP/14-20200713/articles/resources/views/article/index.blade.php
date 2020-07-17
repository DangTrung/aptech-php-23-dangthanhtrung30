@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">id</th>
            <th scope="col" class="">Title</th>
            <th scope="col" class="">Slug</th>
            <th scope="col" class="">descrition</th>
            <th scope="col" class="">Content</th>
          </tr>
        </thead>
        <tbody>
          @foreach($article as $a)
          <tr class="text-center">
            <th scope="row">{{$a->id}}</th>
            <td>{{$a->title}}</td>
            <td>{{$a->slug}}</td>
            <td>{{$a->description}}</td>
            <td>{{$a->content}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('article.show',$a->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('article.edit', $a->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('article.destroy',$a->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     
    </div>
  </div>
</div>
@endsection