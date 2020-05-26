<?php

namespace App\Http\Controllers;

// use Auth;
use App\Cart;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $uid = Auth::user()->id;
        $cart = Cart::where('user_id',$uid)
            ->where('invoice',null)
            ->get();
        $atm = \App\Atm::All();
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET",
        //     CURLOPT_HTTPHEADER => array(
        //         "key: 6456d855a8c92234aba3562aaf2164cf"
        //     ),
        // ));

        // $response = curl_exec($curl);

        // $data = json_decode($response, true);


        return view('product.sales.buynow', compact('cart', 'atm'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $kota_asal = $_POST['kota_asal'];
        $kota_tujuan = $request->kota_tujuan;
        $kurir = $request->kurir;
        $berat = ($request->itungBerat) * 750;
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=160&destination=".$kota_tujuan."&weight=".$berat."&courier=".$kurir."",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 6456d855a8c92234aba3562aaf2164cf"
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $data= json_decode($response, true);
        $kurir=$data['rajaongkir']['results'][0]['name'];
        $kotaasal=$data['rajaongkir']['origin_details']['city_name'];
        $provinsiasal=$data['rajaongkir']['origin_details']['province'];
        $kotatujuan=$data['rajaongkir']['destination_details']['city_name'];
        $provinsitujuan=$data['rajaongkir']['destination_details']['province'];
        $berat=$data['rajaongkir']['query']['weight']/1000;
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rand = substr(str_shuffle(str_repeat($pool, 5)), 0, 7);
        $vl = 0;

        foreach ($data['rajaongkir']['results'][0]['costs'] as $value) {
            foreach ($value['cost'] as $tarif) {
                $vl = $tarif['value'];   
            }
        }

        $hargaPkg = ($vl / $request->itungBerat) * (13/10);
        $o = Order::create([
            'invoice'           =>  $rand, 
            'user_id'           =>  Auth::user()->id,
            'atm_id'            =>  $request->group1,
            'customer_name'     =>  $request->namaPenerima,
            'customer_phone'    =>  $request->nohp,
            'customer_address'  =>  $request->alamat,
            'subtotal'          =>  $vl,
            'pengirim'          =>  $kurir,
            'hargaPkg'          =>  $hargaPkg,
        ]);
        $cart = Cart::where('user_id',Auth::user()->id)
                ->where('invoice',null)
                ->get();
        foreach ($cart as $cart) {
            OrderDetail::create([
                'invoice' => $rand,
                'user_id'=> Auth::user()->id,
                'pots_id' => $cart->pots_id,
                'product_id' => $cart->product_id,
                'qty' => $cart->qty,
            ]);
        }
        Cart::where('user_id',Auth::user()->id)
            ->where('invoice',null)
            ->delete();
        return redirect('/sales/buynow/'.$o->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cekKota()
    {
        $curl = curl_init();    
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: 6456d855a8c92234aba3562aaf2164cf"
          ),
        ));
        // $opti = '';
        $opti='';
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
            echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
        }
        return response()->json($opti);
    }

    public function buyAtm($id)
    {
        $Order = Order::whereId($id)
          ->where('user_id',Auth::user()->id)
          ->firstOrFail();
        $barang = OrderDetail::where('invoice',$Order->invoice)
          ->get();  
        return view('product.sales.buynowbyatm',compact('Order','barang'));   
    }
    public function bayar($id, $invoice)
    {
      $c = Order::whereId($id)
          ->where('invoice',$invoice)
          ->where('user_id',Auth::User()->id)
          ->firstOrFail();
      return view('product.sales.totalpay', compact('c'));
    }
    public function buktiBayar(Request $request)
    {
        $tempatfile = ('buktiBayar');

        $filenya = $request->file('foto');
        $nama_file = $filenya->getClientOriginalName();
        $filenya->move($tempatfile, $nama_file);
        
        \App\Pembayaran::create([
            'user_id' => Auth::User()->id,
            'order_id' => $request->orderID,
            'nama_pengirim' => $request->namaPengirim,
            'norek' => $request->nomorPengirim,
            'bank'  => $request->bank,
            'file' => $nama_file,
            'status' => 'pending',
        ]);
        return 'ok';
    }
}
