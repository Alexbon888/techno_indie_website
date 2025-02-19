@extends('template')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline-blue">
                <div class="card-header">
                    <h4 class="card-title">RIWAYAT PEMESANAN</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Jasa Pemesanan</th>
                                <th>Harga Jasa</th>
                                <th>Metode Pengantaran</th>
                                <th>Tanggal Proses</th>
                                <th>Waktu Proses</th>
                                <th>Status Validasi</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pemesanans as $pemesanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pemesanan->user->full_name }}</td>
                                    <td>{{ $pemesanan->service_name }}</td>
                                    <td>{{ $pemesanan->service_price }}</td>
                                    <td>{{ $pemesanan->delivery_method }}</td>
                                    <td>{{ $pemesanan->process_date }}</td>
                                    <td>{{ $pemesanan->session_time }}</td>
                                    <td>{{ $pemesanan->status }}</td>
                                    <td>
                                        {{--detail--}}
                                        <a href="{{ route('daftar_pemesanan.show', $pemesanan->id) }}" button type="button" class="btn btn-primary btn-sm" style="background-color: #FABF34; color: #000000; border-color: #FABF34; font-size: 0.7rem;">
                                            <i class="bi bi-info-circle"></i>
                                        </a>
                                        {{--apus--}}
                                        <form action="{{ route('riwayat_pemesanan.destroy', $pemesanan->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #FF5050; color: #000000; border-color: #FF5050; font-size: 0.6rem;">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </form> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
