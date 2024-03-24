

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Order</h6>
                <dl>
                    @if(auth()->user()->hasRole('SuperAdmin'))
                    <dt class="col-sm-4 fs-4">Admin</dt>
                    <dd class="col-sm-8 fs-4">@switch($order->admin_id)
                            @case(2)
                                Abdulla Aripov
                                @break
                            @case(3)
                                Tanzila Norboyeva
                                @break
                        @endswitch</dd>
                    @endif
                    <dt class="col-sm-4 fs-4">Name</dt>
                    <dd class="col-sm-8 fs-4">{{$order->name}}</dd>

                    <dt class="col-sm-4 fs-4">Phone</dt>
                    <dd class="col-sm-8 fs-4">{{$order->phone}}</dd>

                    <dt class="col-sm-4 fs-4">Product</dt>
                    <dd class="col-sm-2 fs-4"> {{$order->product}}</dd>

                    <dt class="col-sm-4 fs-4">Price</dt>
                    <dd class="col-sm-2 fs-4"> {{$order->price}}</dd>

                    <dt class="col-sm-4 fs-4">Status</dt>
                    <dd class="col-sm-2 fs-4"> @if($order->status == 2) Waiting @elseif($order->status == 1) Accepted @elseif($order->status == 0) Rejected @endif</dd>
                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{route('order.index')}}">Back</a></button>
            </div>
        </div>

@endsection
