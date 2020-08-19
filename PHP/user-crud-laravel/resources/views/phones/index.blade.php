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
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($phone as $key=>$value)
          <tr class="text-center">
            <th scope="row">{{$key}}</th>
            <td>{{$value->name}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('phones.show',$value->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('phones.edit',$value->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('phones.destroy',$value->id)}}" method="post">
              @csrf
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
      {{-- <div class="pull-right">{{ $phone->links() }}</div> --}}
    </div>
  </div>
</div>
@endsection