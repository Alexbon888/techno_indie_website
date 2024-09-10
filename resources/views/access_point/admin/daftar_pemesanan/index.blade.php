@extends('template')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline-blue">
                <div class="card-header">
                    <h4 class="card-title">DAFTAR PEMESANAN</h4>
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
                                <th>Waktu Pemesanan</th>
                                <th>Waktu Pembaruan</th>
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
                                    <td>{{ $pemesanan->created_at }}</td>
                                    <td>{{ $pemesanan->updated_at }}</td>
                                    <td>{{ $pemesanan->status }}</td>
                                    <td>
                                        {{--detail--}}
                                        <a href="{{ route('daftar_pemesanan.show', $pemesanan->id) }}" button type="button" class="btn btn-primary btn-sm" style="background-color: #FABF34; color: #000000; border-color: #FABF34; font-size: 0.6rem;">
                                            <i class="bi bi-info-circle"></i>
                                        </a> 
                                        {{-- <a href="{{ route('daftar_pemesanan.edit', $pemesanan->id) }}" button type="button" class="btn btn-primary btn-sm" style="background-color: #45B3FD; color: #000000; border-color: #45B3FD; font-size: 0.6rem;">
                                            <i class="bi bi-pencil-square"></i>
                                        </a> --}}
                                        {{--validasi--}}
                                        <form action="{{ route('move_to_progress', $pemesanan->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #5ECF7A; color: #000000; border-color: #5ECF7A; font-size: 0.6rem;">
                                                <i class="bi bi-check2-circle"></i>
                                            </button>
                                        </form>
                                        {{--reject--}}
                                        <form action="{{ route('daftar_pemesanan.reject', $pemesanan->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to reject this item?');">
                                            @csrf
                                            @method('PATCH')
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
