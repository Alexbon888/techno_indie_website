@extends('template')
@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-user card-outline">
                <a class="card-header">
                    <h5 class="title">Order Form</h5>
                </a>

                <div class="card-body">

                <form action="{{ route('daftar_pemesanan.update', $pemesanan->id) }}" method="POST">
                    @csrf 
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="service_name">Service Name</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->service_name }}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="service_price">Service Price</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->service_price }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Delivery Method</label>
                            <input type="text" class="form-control" disabled="" value="{{ $pemesanan->delivery_method }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Process Date</label>
                            <input type="date" class="form-control" disabled="" value="{{ $pemesanan->process_date }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Session Time</label>
                            <input type="text" class="form-control" disabled="" value="{{ $pemesanan->session_time }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->first_name }}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" disabled=""value="{{ $pemesanan->last_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->phone_number }}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="email" class="form-control" disabled="" value="{{ $pemesanan->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" disabled="" value="{{ $pemesanan->address }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->city }}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->postal_code }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="transaction_id">ID Transaksi</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->verifikasi->transaction_id }}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="bank">Bank</label>
                                <input type="text" class="form-control" disabled="" value="{{ $pemesanan->verifikasi->bank }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-select border-0" style="height: 55px;" id="status" name="status" value="{{ $pemesanan->status }}">
                                <option selected>Belum tervalidasi</option>
                                <option value="Tervalidasi - Sedang dikerjakan">Tervalidasi - Sedang dikerjakan</option>
                                <option value="Pengerjaan telah selesai">Pengerjaan telah selesai</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .card-outline {
        border: 1px solid #ADD8E6; /* Light blue color */
    }
</style>

@endsection
