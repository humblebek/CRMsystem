
@extends('admin.layouts.header')
{{-- <link rel="stylesheet" href="/admin/assets/css/admin.css"> --}}
@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action={{route('admins.store')}} method="POST"  enctype="multipart/form-data">
                        @csrf
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Add an Admin</h6>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Roles:</label>
                            {{-- <select name="role_id" id="">
                                @foreach ($roles as $role )
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select> --}}
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name</label>
                            <input class="form-control" type="text"  name="name">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Email</label>
                            <input class="form-control " type="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Password</label>
                            <input class="form-control " type="text" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Income</label>
                            <input class="form-control " type="hidden" value="0" name="income">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill  m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{route('admins.index')}}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


