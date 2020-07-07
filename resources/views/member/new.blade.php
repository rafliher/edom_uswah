@extends('layouts.master')

@section('content')
<div class="container-fluid d-flex justify-content-center flex-column" >
    <h2 style="text-align: center; margin: 30px">Upload the member data here</h2>
    <form action="/member" method="POST" class="col-6  align-self-center">
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
                    <option value="l">Male</option>
                    <option value="p">Female</option>
                </select>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-12">
                <select class="form-control" name="department_id" id="department" required>
                    <option value="">--Select member department--</option>
                    @foreach ($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-2 col-8">
                <button type="submit" class="btn btn-primary col-12">Upload</button>
            </div>
        </div>
    </form>
</div>

@endsection
