@extends('APPS._layouts.index')
@section('content')
    <section class="section-header">
        <div class="section-header-image">
            <img src="{{ asset('theme/img/xx1.png') }}" alt="Header">
        </div>
        <div class="container">
            <div class="section-header-inner">
                <div class="section-header-title">
                    <h3 class="title">GREAT <br> ART <br>OF <br>MAKASSAR</h3>
                    <p>Telusuri Keindahan Makassar Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    {{-- <a href="" class="btn btn-round btn-orange">See Our Vacation</a> --}}
                </div>
                <div class="section-header-title-xs">
                    <h3 class="title">GREAT <br> ART <br>OF <br>MAKASSAR</h3>
                    <p>Telusuri Keindahan Makassar Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                </div>

            </div>
        </div>
    </section>
    <section class="section section-about">
        <div class="about-head slides">
            <h3>Spot Foto</h3>
        </div>
        <div class="about-body">
            <div class="section-discover-body slides">
                <div class="col">
                    <a href="destination.html">
                        <img src="{{ asset('theme/img/f-foto.jpeg') }}" alt="Destination">
                        <div class="caption">
                            <p>Masjid Terapung</p>
                            <div class="line"></div>

                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="culture.html">
                        <img src="{{ asset('theme/img/wis-2.jpg') }}">
                        <div class="caption" alt="Culture">
                            <p>Pantai Akkarena</p>
                            <div class="line"></div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('APPS._layouts.footer')

    @include('APPS._layouts.js')
@endsection
