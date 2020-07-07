@extends('layouts.master')

@section('content')<div class="container-fluid d-flex justify-content-center flex-column" >
    <div class="card">
      <div class="card-header">
       <a class="card-title"><h4>Edom</h4></a>
      </div>
      <div class="card-body overflow-auto">  
        <table  class="table table-bordered table-striped">
          <tr>
            <th>No</th><th>Name</th><th>Rating</th>
          </tr>
          @php
              $i = 0;
          @endphp
          @foreach ($sets_to_rate as $member_set)
            @foreach ($member_set as $member)
              @if ($member->name != 'admin')
                <tr>
                  <td>{{++$i}}</td>
                  <td><a class="card-title" href="/member/{{$member->id}}">{{$member->name}}</a></td>
                  <td>
                    @if ($member['rated'])
                      rated  
                    @else
                      <a class="card-title" href="/edom/{{$member->id}}">Rate here</a>
                    @endif
                  </td>
                </tr>              
              @endif
            @endforeach
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection