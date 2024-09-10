@extends('template')
@section('content')

<div class="content">
    <div class="jumbotron jumbotron-fluid bg-cover text-white">
        <div class="container text-center">
            <h1 class="display-4">Welcome to Techno Indie Website!</h1>

            <br><br><br><br><br>

            <p class="lead font-weight-bold">
                We're here to be your partner in maintaining the health and performance of your computer devices. With our diverse experiences and expertise, we're ready to assist you in assembling, repairing, and maintaining your computer devices with care and high expertise.<br>
                We want to ensure that every customer feels valued and heard. Our team consists not only of experienced technical experts but also good listeners. We're ready to listen to every need and concern you have and work together to find the best solutions that suit your needs.<br><br>
                - Techno Indie
            </p>

            <br><br>

            {{-- <a class="btn btn-primary btn-lg" href="{{ url('order') }}" role="button">Order Now !</a> --}}
        </div>
    </div>
</div>
@endsection

<style>
    .bg-cover {
        background-image: url('../assets/img/header.jpg');
        background-size: cover; /* Memastikan gambar terlihat proporsional */
        background-position: center;
        height: 100vh; /* Set the height of the background to fill the entire viewport */
    }

    .font-weight-bold {
        font-weight: bold; /* Membuat teks menjadi lebih tebal */
    }
</style>
