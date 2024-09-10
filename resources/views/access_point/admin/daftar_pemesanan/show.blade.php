@extends('template')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline-blue">
                <div class="card-header">
                    <h4 class="card-title">Detail Pemesanan</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Jasa Pemesanan</label>
                        <p>{{ $pemesanan->service_name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Harga Jasa</label>
                        <p>{{ $pemesanan->service_price }}</p>
                    </div>
                    <div class="form-group">
                        <label>Metode Pengantaran</label>
                        <p>{{ $pemesanan->delivery_method }}</p>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Proses</label>
                        <p>{{ $pemesanan->process_date }}</p>
                    </div>
                    <div class="form-group">
                        <label>Waktu Proses</label>
                        <p>{{ $pemesanan->session_time }}</p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p>{{ $pemesanan->user->full_name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <p>{{ $pemesanan->phone_number }}</p>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <p>{{ $pemesanan->email }}</p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p>{{ $pemesanan->address }}</p>
                    </div>
                    <div class="form-group">
                        <label>Waktu Proses</label>
                        <p>{{ $pemesanan->session_time }}</p>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p>{{ $pemesanan->city }}</p>
                    </div>
                    <div class="form-group">
                        <label>Postal Code</label>
                        <p>{{ $pemesanan->postal_code }}</p>
                    </div>
                    <div class="form-group">
                        <label>ID Transaksi</label>
                        @if($pemesanan->verifikasi)
                            <p>{{ $pemesanan->verifikasi->transaction_id }}</p>
                        @else
                            <p>N/A</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Bank</label>
                        @if($pemesanan->verifikasi)
                            <p>{{ $pemesanan->verifikasi->bank }}</p>
                        @else
                            <p>N/A</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Waktu Pemesanan</label>
                        <p>{{ $pemesanan->created_at }}</p>
                    </div>
                    <div class="form-group">
                        <label>Waktu Pembaruan</label>
                        <p>{{ $pemesanan->updated_at }}</p>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <p>{{ $pemesanan->status }}</p>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-outline-blue {
        border: 1px solid #ADD8E6;
    }
</style>
@endsection
