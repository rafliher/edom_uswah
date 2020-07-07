@extends('layouts.master')

@section('content')
<div class="container-fluid d-flex justify-content-center flex-column" >
    <h2 style="text-align: center; margin: 30px">Update the member data here</h2>
    <form action="/member/{{$member->id}}" method="POST" class="col-6  align-self-center">
        @csrf
        <div class="form-group row ">
            <div class="col-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter member name here" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-12">
                <select class="form-control" name="gender" id="gender" required>
                    <option value="">--Select member gender--</option>
                    <option id="gen_l" value="l">Male</option>
                    <option id="gen_p" value="p">Female</option>
                </select>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-12">
                <select class="form-control" name="department_id" id="department" required>
                    <option value="">--Select member department--</option>
                    @foreach ($departments as $department)
                        <option id="dep_{{$department->id}}" value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @method('PUT')
        <div class="form-group row">
            <div class="offset-2 col-8">
                <button type="submit" class="btn btn-primary col-12">Save</button>
            </div>
        </div>
    </form>
</div>

@endsection
@push('scripts')
    <script>
        $('#name').val("{{$member->name}}");
        $('#gender #gen_{{$member->gender}}').attr('selected', true);
        $('#department #dep_{{$member->department_id}}').attr('selected', true);
    </script>
@endpush