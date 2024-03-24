<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Jobs\OrderCreateJob;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->hasRole('SuperAdmin'))
            $order =  Order::latest()->get();
        elseif (auth()->user()->hasRole('Admin'))
            $order =  Order::where('status','2')->latest()->get();
        return view('admin.order.index',compact('order'));
    }

    public function store(StoreOrderRequest $request)
    {
        $requestData = $request->all();
        OrderCreateJob::dispatch($requestData);
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('admin.order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin.order.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $requestData = $request->all();
        $Price = $order->price;
        $previousStatus = $order->status;
        $requestData['admin_id']=auth()->user()->id;
        $order->update($requestData);
        if ($requestData['status'] == 1 && $previousStatus != 1) {
            $user = auth()->user();
            $user->income += $order->price;
            $user->save();
        }
        return redirect()->route('order.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }

    public function myOrder()
    {
        $order = Order::where('admin_id',auth()->user()->id)->get();
        return view('admin.order.index',compact('order'));
    }

}
