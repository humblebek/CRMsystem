
@extends('admin.layouts.header')

@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action="{{route('admins.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Edit an Admin</h6>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Name</label>
                            <input class="form-control" type="text"  name="name" value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" type="email"  name="nameEn" value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" type="text"  name="password" value="{{$user->password}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Income</label>
                            <input class="form-control" type="number"  name="income" value="{{$user->income}}">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{route('admins.index')}}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



