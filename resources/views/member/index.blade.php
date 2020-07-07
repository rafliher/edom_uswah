@extends('layouts.master')

@section('content')
  <div class="card-header d-flex justify-content-between">
    <h3 class="card-title">Organization Members</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body overflow-auto">
    <table  class="table table-bordered table-striped overflow-auto">
      <tr>
        <th>No</th><th>Name</th><th>Gender</th><th>Department</th>
      </tr>
      @foreach ($members as $key => $member)
        <tr>
          <td>{{$key+1}}</td>
          <td><a class="card-title" href="/member/{{$member->id}}">{{$member->name}}</a></td>
          <td>{{$member->gender == 'p' ? 'Female' : 'Male'}}</td>
          <td><a href="/department/{{$member->department->id}}">{{$member->department->name}}</a></td>
        </tr>        
      @endforeach
    </table>
  </div>
@endsection


@push('dont')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush
