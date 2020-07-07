@extends('layouts.master')

@section('content')
<div class="container-fluid d-flex justify-content-center flex-column" >
  <div class="card" id="{{$member->id}}">
    <div class="card-body d-flex justify-content-center"> 
      <img class="col-4 bg-gray-300" src="{{asset('images/profile.png')}}"/>  
    </div>
    <div class="card-body d-flex flex-row flex-wrap"> 
      <div class="col-4 box-sizing-border">Name </div>
      <div class="col-8 box-sizing-border">: {{$member->name}}</div>
      <div class="col-4 box-sizing-border">Gender </div>
      <div class="col-8 box-sizing-border">: {{$member->gender == 'p' ? 'Female' : 'Male'}}</div>
      <div class="col-4 box-sizing-border">Department </div>
      <div class="col-8 box-sizing-border">: 
        <a href="/department/{{$member->department->id}}">
          {{$member->department->name}}
        </a>
      </div>
    </div>
    
    @if (Session::get('username')=='admin')
    <div class="container d-flex justify-content-end" style="margin: 10px;">
      <a class="col-3" href="/member/{{$member->id}}/edit">
        <button  class="btn btn-primary col-12" style="margin: 0">Edit</button>
      </a>
      <form class="col-3" action="/member/{{$member->id}}" method="post">
        @csrf
        <input class="btn btn-primary col-12" type="submit" value="Delete" />
        @method('delete')
      </form>
    </div>
    @endif

    <div class="card overflow-auto">
      <div class="card-header">
        Edom Result
      </div>
        <table  class="table table-bordered table-striped overflow-auto">
          <tr>
            <th>No</th><th>Aspect</th><th>Score</th>
          </tr>
          @foreach ($edom_result as $key => $value)
            <tr>
              <td>{{$key}}</td>
              <td>{{$value[0]}}</td>
              <td>{{$value[1]}}</td>
            </tr>        
          @endforeach
        </table>
    </div>
  </div>
</div>

@endsection
