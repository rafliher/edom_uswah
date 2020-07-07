@extends('layouts.master')

@section('content')
<div class="container-fluid d-flex justify-content-center flex-column" >
    <h2 style="text-align: center; margin: 30px">Upload the Department data here</h2>
    <form action="/department" method="POST" class="col-6  align-self-center">
        @csrf
        <div class="form-group row ">
            <div class="col-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter the Department name here" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <textarea style="height: 300px" type="text" class="form-control" name="description" id="description" placeholder="Enter the Department description here" required></textarea>
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
