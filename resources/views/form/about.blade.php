@extends('layout.app')
@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <br>
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- About me -->
            <section id="about" class="section section3">
                <div class="card2">
                    <div class="photo">
                        <img src="{{ asset('/') }}assets/img/okkyhendrawan.jpg" alt="Foto Anda" />
                    </div>
                    <h2>Okky Hendrawan</h2>
                    <p class="id-number">1462200279</p>
                    <p class="description">
                        Hii Saya mahasiswa dari universitas 17 Agustus 1945 Surabaya
                    </p>
                    <button class="btn btn-custom">Media Sosial</button>
                </div>
            </section>
            <!-- About me -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
@endsection
