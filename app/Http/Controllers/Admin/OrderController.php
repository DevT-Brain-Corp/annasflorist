<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetail;
use App\Pembayaran;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        if ($request->status == 'tervalidasi'){
            return $this->konfirmasiPembayaran($order, $bayar, $request);
        }elseif ($request->status == 'dikirim'){
            return $this->pengirimanBarang($order, $bayar, $request);
        }else{
            $bayar->update(['status'=>$request->status]);
            return redirect()->back();
        }

    }
    public function konfirmasiPembayaran($order, $bayar, $request)
    {
        $pembeli = $order->user;
        if (Auth::user() == null || Auth::user()->is_admin==0) {
            return redirect()->back();
        } elseif (Auth::user()->is_admin ==1 && !empty(Auth::user())) {
            $tujuan = $pembeli;
            $data = ['name' => $tujuan->name, 'isi' => 'isi kontent ini tentang data yang sudah terbayar', 'total' =>$order->hargaPkg + $order->subtotal , 'referensi' => $order->invoice , 'waktu pemesanan' => $order->created_at];

            Mail::send('emails.tagihan_pembayaran', $data, function ($message) use ($data, $tujuan) {
                $message->to($tujuan->email , $tujuan->name);
                $message->from('annasfloristjember@gmail.com', 'Admin Annas Florist');
                $message->subject('Konfirmasi pembayaran Annas FLorist');
            });
            $bayar->update(['status'=>$request->status]);
            return redirect()->back();
        }
    }

    public function pengirimanBarang($order, $bayar, $request)
    {
        $pembeli = $order->user;
        $data = ['name' => $pembeli->name, 'isi' => 'isi kontent', 'total' => $order->hargaPkg + $order->subtotal, 'referensi' => $order->invoice, 'waktu pemesanan' => $order->created_at];

        Mail::send('emails.tagihan_pembayaran', $data, function ($message) use ($data, $pembeli) {
            $message->to($pembeli->email, $pembeli->name);
            $message->from('annasfloristjember@gmail.com', 'Admin Annas Florist');
            $message->subject('Pengiriman barang');
        });
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
