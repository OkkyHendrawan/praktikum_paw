@extends('layout.app')
@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <br>
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Ticket 1 -->
            <section id="ticket" class="section section1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card1">
                                <div class="info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                                <div class="profile-picture">
                                    <img src="{{ asset('/') }}assets/img/tiket2.jpg" alt="Okky Hendrawan" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card1">
                                <div class="profile-picture">
                                    <img src="{{ asset('/') }}assets/img/tiket3.jpg" alt="Okky Hendrawan" />
                                </div>
                                <div class="info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
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
