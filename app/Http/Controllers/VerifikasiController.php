<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Verifikasi; 

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Assuming you are passing the order_id through the request
        $order_id = $request->input('order_id');
        return view('access_point.user.verify.create', compact('order_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:pemesanan,id', // Ensure the table name here matches the one in your migration
            'transaction_id' => 'required|string',
            'bank' => 'required|string',
        ]);

        $verifikasi = Verifikasi::create($request->all());
        $pemesanan = Pemesanan::find($request->order_id);
        $pemesanan->status = 'Menunggu Validasi';
        $pemesanan->save();

        return redirect()->route('history.index');
    }

    /**
     * Display the specified resource.
     */
    // App\Http\Controllers\VerifikasiController.php

    public function show($order_id)
    {
        $verifikasi = Verifikasi::where('order_id', $order_id)->firstOrFail();
        return view('access_point.user.history.show', compact('verifikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
