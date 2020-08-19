@extends('layout.master')
@section('content')
@component('layout.components.title')
create page
@endcomponent
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('article.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="title">Title</label>
          <input type="text" class="form-control rounded-0" id="title" placeholder="Title" name="Title">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="decrip">email</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="password">password</label>
          <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            confirm
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection