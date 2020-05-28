<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function tagihanPembayaran()
    {
//        dd(Auth::user());
        if (Auth::user() == null) {
            return redirect()->back();
        } else {
            $auth = Auth::user();
            $data = ['name' => $auth->name, 'isi' => 'isi kontent', 'total' => 'Rp.100.000', 'referensi' => 'sdfjh3023bdj', 'waktu pemesanan' => '11 maret hehe'];

            Mail::send('emails.tagihan_pembayaran', $data, function ($message) use ($data, $auth) {
                $message->to($auth->email, $auth->name);
                $message->from('annasfloristjember@gmail.com', 'Admin Annas Florist');
                $message->subject('Tagihan Pembayaran');
            });
            return redirect()->back();
        }


//        //buat testing view
//        return view('emails.tagihan_pembayaran')
//            ->with('auth', $auth)
//            ->with('data', $data);
    }

        public function konfirmasiPembayaran()
        {
            if (Auth::user() == null || Auth::user()->is_admin==0) {
                return redirect()->back();
            } elseif (Auth::user()->is_admin ==1 && !empty(Auth::user())) {
                $tujuan = User::where('id',2)->first();
                $data = ['name' => $tujuan->name, 'isi' => 'isi kontent ini tentang data yang sudah terbayar', 'total' => 'Rp.100.000', 'referensi' => 'sdfjh3023bdj', 'waktu pemesanan' => '11 maret hehe'];

                Mail::send('emails.tagihan_pembayaran', $data, function ($message) use ($data, $tujuan) {
                    $message->to($tujuan->email , $tujuan->name);
                    $message->from('annasfloristjember@gmail.com', 'Admin Annas Florist');
                    $message->subject('Konfirmasi pembayaran Annas FLorist');
                });
                return redirect()->back()
                    ->with('status', 'Email konfirmasi pembayaran telah terkirim melalui email');
            }
        }

    public function pengirimanBarang()
    {
        $auth = Auth::user();
        $data = ['name' => $auth->name, 'isi' => 'isi kontent', 'total' => 'Rp.100.000', 'referensi' => 'sdfjh3023bdj', 'waktu pemesanan' => '11 maret hehe'];

        Mail::send('emails.tagihan_pembayaran', $data, function ($message) use ($data, $auth) {
            $message->to($auth->email, $auth->name);
            $message->from('annasfloristjember@gmail.com', 'Admin Annas Florist');
            $message->subject('Pengiriman barang');
        });
        return redirect()->back();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
