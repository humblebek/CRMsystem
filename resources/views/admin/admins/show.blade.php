

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Admin</h6>
                <dl>
                    <dt class="col-sm-4 fs-4">Name</dt>
                    <dd class="col-sm-8 fs-4">{{$user->name}}</dd>

                    <dt class="col-sm-4 fs-4">Email</dt>
                    <dd class="col-sm-8 fs-4">{{$user->email}}</dd>

                    <dt class="col-sm-4 fs-4">Password</dt>
                    <dd class="col-sm-2 fs-6"> {{$user->password}}</dd>

                    <dt class="col-sm-4 fs-4">Income</dt>
                    <dd class="col-sm-2 fs-6"> {{$user->income}}</dd>
                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{route('admins.index')}}">Back</a></button>
            </div>
        </div>

@endsection
