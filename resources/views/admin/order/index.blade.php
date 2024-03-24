
@extends('admin.layouts.header')

@section('content')
<!-- MAIN -->

    <div class="table-data" style="padding: 60px 40px;">
        <div class="order">
            <div class="head">
                <h2>Order</h2>
                {{-- <button type="button" class="btn btn-outline-primary m-2"> <a href="{{route('order.create')}}"><i class="fa fa-plus me-2"></i>Add</a></button> --}}
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @if(auth()->user()->hasRole('SuperAdmin')) <th scope="col">Admin</th>@endif
                        <th scope="col"> Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                    <tr>
                        <th scope="row">{{++$loop->index}}</th>
                        @if(auth()->user()->hasRole('SuperAdmin'))
                        <td>@switch($item->admin_id)
                                @case(2)
                                    Abdulla Aripov
                                    @break
                                @case(3)
                                    Tanzila Norboyeva
                                    @break
                            @endswitch
                            @endif</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->product}}</td>
                        <td>{{$item->price}}</td>
                            <td style="color:
                                @switch($item->status)
        @case(2)
            blue;
            @break
        @case(1)
            green
            @break
        @case(0)
            red
            @break
        @default
            black
    @endswitch;">
                                @if($item->status == 2) Waiting
                                @elseif($item->status == 1) Accepted
                                @elseif($item->status == 0) Rejected
                                @endif
                            </td>

                            </td>
                        <td style="display: flex">
                            <button type="button" class="btn btn-square btn-warning m-2"><a href="{{route('order.edit',$item->id)}}"><i class="fa fa-edit" style="color: white"></i></a></button>
                            <button type="button" class="btn btn-square btn-success m-2"><a href="{{route('order.show',$item->id)}}"><i class="fa fa-eye"style="color: white"></i></a></button>
                            @if(auth()->user()->hasRole('SuperAdmin'))
                            <form action="{{route('order.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-square btn-danger m-2"><a href="{{route('order.destroy',$item->id)}}"><i class="fa fa-trash"style="color: white"></i></a></button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!-- MAIN -->

@endsection


