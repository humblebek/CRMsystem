
@extends('admin.layouts.header')

@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action="{{route('order.update',$order->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Edit an Order</h6>
                        @if(auth()->user()->hasRole('SuperAdmin'))
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Admin_id</label>
                            <input class="form-control" type="text"  name="name" value="{{$order->admin_id}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Name</label>
                            <input class="form-control" type="name"  name="name" value="{{$order->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Phone</label>
                            <input class="form-control" type="text"  name="phone" value="{{$order->phone}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product</label>
                            <input class="form-control" type="text"  name="product" value="{{$order->product}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Price</label>
                            <input class="form-control" type="number"  name="price" value="{{$order->price}}">
                        </div>
                        @endif
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option value="2"  {{ $order->status == 2 ? 'selected' : '' }}>Waiting</option>
                                <option value="1"  {{ $order->status == 1 ? 'selected' : '' }}>Accepted</option>
                                <option value="0"  {{ $order->status == 0 ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{route('order.index')}}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



