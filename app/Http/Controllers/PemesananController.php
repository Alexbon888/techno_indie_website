<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::with('verifikasi')
                        ->where('user_id', Auth::id())
                        ->latest()
                        ->get();
        return view('access_point.user.history.index', compact('pemesanans'));
    }

    public function calendar()
    {
        return view('access_point.user.home');
    }

    public function getCalendarEvents()
    {
        $pemesanans = Pemesanan::where('status', 'Tervalidasi - Sedang dikerjakan')->get();
        $events = [];

        foreach ($pemesanans as $pemesanan) {
            $events[] = [
                'title' => 'Reserved: ' . $pemesanan->session_time,
                'start' => Carbon::parse($pemesanan->process_date)->format('Y-m-d'),
                'allDay' => true,
            ];
        }

        return response()->json($events);
    }

    public function showStatistic()
    {
        $totalOrder = Pemesanan::count();
        $totalClients = User::distinct('full_name')->count();
        $totalProgress = Pemesanan::where('status', 'Tervalidasi - Sedang dikerjakan')->count();
        $totalComplete = Pemesanan::where('status', 'Selesai')->count();

        return view('access_point.user.guest', compact(
            'totalOrder',
            'totalClients',
            'totalProgress',
            'totalComplete'
        ));
    }

    public function userStatistics()
    {
        $totalOrder = Pemesanan::count();
        $totalClients = User::distinct('full_name')->count();
        $totalProgress = Pemesanan::where('status', 'Tervalidasi - Sedang dikerjakan')->count();
        $totalComplete = Pemesanan::where('status', 'Selesai')->count();

        return view('access_point.user.home', compact(
            'totalOrder',
            'totalClients',
            'totalProgress',
            'totalComplete'
        ));
    }

    public function create()
    {
        $bookedDatesAndSessions = Pemesanan::where('status', 'Tervalidasi - Sedang dikerjakan')
            ->select('process_date', 'session_time')
            ->get();

        $user = Auth::user();
        return view('access_point.user.order.create', compact('bookedDatesAndSessions', 'user'));
    }     

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string',
            'service_price' => 'required|integer',
            'delivery_method' => 'required|string',
            'process_date' => 'required|date',
            'session_time' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
        ]);

        $user = Auth::user();
        $today = Carbon::today();
        $ordersToday = Pemesanan::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->count();

        if ($ordersToday >= 2) {
            return redirect()->back()->withErrors(['limit' => 'You have reached the limit of 2 orders per day.']);
        }

        $existingOrder = Pemesanan::where('process_date', $request->process_date)
            ->where('session_time', $request->session_time)
            ->first();

        if ($existingOrder) {
            return redirect()->back()->withErrors(['session_time' => 'The selected date and session is already booked.']);
        }

        $data = $request->all();
        $data['user_id'] = $user->id;
        $data['full_name'] = $user->full_name;
        $data['email'] = $user->email;

        Pemesanan::create($data);

        return redirect()->route('history.index');
    }

    public function show_history($id)
    {
        $pemesanan = Pemesanan::with('verifikasi')->findOrFail($id);
        return view('access_point.user.history.show', compact('pemesanan'));
    }

    public function show(string $id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('access_point.admin.daftar_pemesanan.show', compact('pemesanan'));
    }

    public function history()
    {
        $pemesanans = Pemesanan::with('user')->where('user_id', Auth::id())->latest()->get();

        return view('access_point.user.history.index', compact('pemesanans'));
    }

    public function daftar_pemesanan()
    {
        $pemesanans = Pemesanan::where('status', 'Menunggu Validasi')->with('verifikasi')->latest()->get();
        return view('access_point.admin.daftar_pemesanan.index', compact('pemesanans'));
    }

    public function tahap_pengerjaan()
    {
        $pemesanans = Pemesanan::where('status', 'Tervalidasi - Sedang dikerjakan')->with('verifikasi')->latest()->get();
        return view('access_point.admin.tahap_pengerjaan.index', compact('pemesanans'));
    }

    public function pemesanan_selesai()
    {
        $pemesanans = Pemesanan::where('status', 'Selesai')->with('verifikasi')->latest()->get();
        return view('access_point.admin.pemesanan_selesai.index', compact('pemesanans'));
    }

    public function riwayat_pemesanan()
    {
        $pemesanans = Pemesanan::where('status', '!=', 'Selesaikan Pembayaran Dahulu')->with('verifikasi')->latest()->get();
        return view('access_point.admin.riwayat_pemesanan.index', compact('pemesanans'));
    }

    public function reject($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->status = 'Pemesanan Ditolak';
        $pemesanan->save();

        return redirect()->route('daftar_pemesanan.index')
            ->with('success', 'Pemesanan berhasil ditolak!');
    }

    public function moveToProgress($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        
        $pemesanan->status = 'Tervalidasi - Sedang dikerjakan';
        $pemesanan->save();

        return redirect()->route('tahap_pengerjaan.index')->with('success', 'Pemesanan telah dipindahkan ke tahap pengerjaan.');
    }

    public function moveToDone($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);

        $pemesanan->status = 'Selesai';
        $pemesanan->save();

        return redirect()->route('pemesanan_selesai.index')->with('success', 'Pemesanan telah dipindahkan ke riwayat.');
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('access_point.admin.daftar_pemesanan.edit', compact('pemesanan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'service_name' => 'required|string',
            // 'service_price' => 'required|integer',
            // 'delivery_method' => 'required|string',
            // 'process_date' => 'required|date',
            // 'session_time' => 'required|string',
            // 'first_name' => 'required|string',
            // 'last_name' => 'required|string',
            // 'phone_number' => 'required|string',
            // 'email' => 'required|email',
            // 'address' => 'required|string',
            // 'city' => 'required|string',
            // 'postal_code' => 'required|string',
            // 'transaction_id' => 'required|string',
            // 'bank' => 'required|string',
            'status' => 'required|string'
        ]);

        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update($request->all());

        return redirect()->route('daftar_pemesanan.index')
            ->with('success', 'Pemesanan berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('riwayat_pemesanan.index')
            ->with('success', 'Pemesanan berhasil dihapus.');
    }
}