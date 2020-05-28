<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetail;
use App\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
//        $tuku = Order::where('id', 2)->first();
//        $bayar = Pembayaran::where('id', 1)->first();
//        dd($tuku->pembayaran);

        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_name' => 'required|max:255',
        ]);
        $order = Order::create($validatedData);

        return redirect()->route('order.index')->with('success', 'Order is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::where('invoice', $id)->first();
        $detail = OrderDetail::where('invoice', $order->invoice)->get();
        $pembayaran = Pembayaran::where('order_id', $order->id)->first();
        return view('admin.order.detail')
            ->with('order', $order)
            ->with('detail', $detail)
            ->with('pembayaran', $pembayaran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $invoice)
    {
        $order = Order::where('invoice', $invoice)->first();
        $bayar = Pembayaran::where('order_id', $order->id)->first();

            $bayar->update(['status'=>$request->status]);


        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Order is successfully deleted');
    }
}
