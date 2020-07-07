@extends('layouts.master')

@section('content')
<div class="container-fluid d-flex justify-content-center flex-column" >
    <div class="card">
        <div class="card-header">
            <h4>EDOM Scoring</h4>
        </div>
      <div class="card-body d-flex flex-row flex-wrap"> 
        <div class="col-md-4 col-6 box-sizing-border">Name </div>
        <div class="col-md-8 col-6 box-sizing-border">: 
          <a href="/member/{{$rating_reciever->id}}">
            {{$rating_reciever->name}}
          </a>
        </div>
        <div class="col-md-4 col-6 box-sizing-border">Gender </div>
        <div class="col-md-8 col-6 box-sizing-border">: {{$rating_reciever->gender == 'p' ? 'Female' : 'Male'}}</div>
        <div class="col-md-4 col-6 box-sizing-border">Department </div>
        <div class="col-md-8 col-6 box-sizing-border">: 
          <a href="/department/{{$rating_reciever->department->id}}">
            {{$rating_reciever->department->name}}
          </a>
        </div>
      </div>
      <div class="card-body d-flex flex-row flex-wrap overflow-auto">
        <form action="/edom/{{$rating_reciever->id}}" method="POST" class=" justify-content-center">
            @csrf
            <table  class="table table-bordered table-striped overflow-auto">
                <tr>
                  <th>No</th><th>Aspect</th><th>Score</th>
                </tr>
                @foreach ($aspects as $key=>$aspect)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$aspect->aspect_name}}</td>
                    <td>
                        <input type="radio" name="{{$aspect->id}}" value="1" style="margin-left: 5px">1
                        <input type="radio" name="{{$aspect->id}}" value="2" style="margin-left: 5px">2
                        <input type="radio" name="{{$aspect->id}}" value="3" style="margin-left: 5px" checked>3
                        <input type="radio" name="{{$aspect->id}}" value="4" style="margin-left: 5px">4
                    </td>
                  </tr>        
                @endforeach
            </table>
            <h6>*1 : bad, 2 : enough, 3 : good, 4 : excellent</h6>
            <div class="container d-flex justify-content-end" style="margin: 10px;">
                <input class="btn btn-primary col-3" type="submit" value="Save" />
            </div>        
        </form>
      </div>
    </div>
</div>
@endsection