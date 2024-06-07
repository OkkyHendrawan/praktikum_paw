@extends('layout.app')
@section('content')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <br>
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Profile 1 -->
            <section id="home" class="section1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="content">
                                <h1>LOREM IPSUM</h1>
                                <p>
                                    In publishing and graphic design, Lorem ipsum is a placeholder
                                    text commonly used to demonstrate the visual form of a document
                                    or a typeface without relying on meaningful content. Lorem ipsum
                                    may be used as a placeholder before final copy is available.
                                </p>
                                <div class="col-md-5">
                                    <a href="#home2" class="btn btn-custom">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Profile 2 -->
            <section id="home2" class="section2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="{{ asset('/') }}assets/img/tiket1.jpg" alt="Okky Hendrawan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <h1>LOREM IPSUM</h1>
                                <p>
                                    In publishing and graphic design, Lorem ipsum ifs a placeholder
                                    text commonly used to demonstrate the visual form of a document
                                    or a typeface without relying on meaningful content. Lorem ipsum
                                    may be used as a placeholder before final copy is available.
                                </p>
                                <a href="{{ route ('ticket') }}" class="btn btn-custom">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
@endsection
