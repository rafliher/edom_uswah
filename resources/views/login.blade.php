@extends('layouts.master')

@section('content')
    <!-- Main Section -->
    <section class="main-section card">
        <!-- Add Your Content Inside -->
        <div class="content card-body">
            <!-- Remove This Before You Start -->
            <h2>Login</h2>
            <hr>
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Login</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection