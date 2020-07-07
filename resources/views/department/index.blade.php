@extends('layouts.master')

@section('content')
  <div class="card-header d-flex justify-content-between">
    <h3 class="card-title">Departments</h3>
    </div>
  <!-- /.card-header -->
  <div class="card-body overflow-auto">
    <table  class="table table-bordered table-striped overflow-auto">
      <tr>
        <th>No</th><th>Name</th><th>Description</th>
      </tr>
      @foreach ($departments as $key => $department)
        <tr>
          <td>{{$key+1}}</td>
          <td><a href="/department/{{$department->id}}">{{$department->name}}</a></td>
          <td>{{$department->description}}</td>
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
