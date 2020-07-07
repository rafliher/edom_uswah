@extends('layouts.master')

@section('content')
<div class="container-fluid d-flex justify-content-center flex-column overflow-auto" >
  <div class="card" id="{{$department->id}}">
    <div class="card-header">
     <a class="card-title" href="/department/{{$department->id}}"><h4>{{$department->name}}</h4></a>
    </div>
    <div class="card-body">
      {{$department->description}}
    </div>
    @if (Session::get('username')=='admin')
    <div class="container d-flex justify-content-end" style="margin: 10px;">
      <a class="col-3" href="/department/{{$department->id}}/edit">
        <button  class="btn btn-primary col-12" style="margin: 0">Edit</button>
      </a>
      <form class="col-3" action="/department/{{$department->id}}" method="post">
        @csrf
        <input class="btn btn-primary col-12" type="submit" value="Delete" />
        @method('delete')
      </form>
    </div>        
    @endif


    <div class="card-body overflow-auto">  
      <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Department Members</h3>
      </div>
      <table  class="table table-bordered table-striped">
        <tr>
          <th>No</th><th>Name</th><th>Gender</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($department->members as $member)
          @if ($member->name != 'admin')
            <tr>
              <td>{{++$i}}</td>
              <td><a class="card-title" href="/member/{{$member->id}}">{{$member->name}}</a></td>
              <td>{{$member->gender == 'p' ? 'Female' : 'Male'}}</td>
            </tr>              
          @endif
        @endforeach
      </table>
    </div>
  </div>
</div>

@endsection
