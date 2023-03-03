@extends('APPS._layouts.index')
@section('content')
<?php $dataSpotFoto ?>
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
        <div class="about-head slides slideanim">
            <h3>{{ $tourguide->nama_wisata }}</h3>
            <p>{{ $tourguide->deskripsi }}</p>
        </div>
        <div class="about-body">
            <div class="row slides slideanim">
                <div class="col">
                    <img src="{{ asset('theme/img/About/035-trekking.png') }}">
                    <h2>WAKTU</h2>
                    <p>BUKA <b>{{ $tourguide->jam_buka }}</b> - TUTUP <b>{{ $tourguide->jam_tutup }}</b></p>
                </div>
                <div class="col">
                    <img src="{{ asset('theme/img/About/028-book.png') }}">
                    <h2>GUIDE</h2>
                    <p>Kami memberikan info - info seputar destinasi terbaik</p>
                </div>
                <div class="col">
                    <img src="{{ asset('theme/img/About/024-tent.png') }}">
                    <h2>Alamat</h2>
                    <p>{{ $tourguide->alamat }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-gallery">
        <div class="container-fluid">
            <div class="single-head">
                <div class="col">
                    <img src="{{ asset('theme/img/icon/013-photo.png') }}">
                    <h3>Beautifull Gallery Of Makassar</h3>
                    <p>Tangkap momen - momen indah dengan nuansa instagramable di Makassar, Berikut adalah potret yang
                        ditangkap
                        oleh wisatawan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="section section-about">
                <div class="about-head slides">
                    <h3>Kuliner</h3>
                </div>
                <div class="about-body">
                    <div class="section-discover-body slides">
                        @foreach ($dataKuliner as $item)
                            <div class="col">
                                <a href="">
                                    <img src="{{ asset('img/wisata/' . $item->foto) }}" alt="Destination">
                                    <div class="caption">
                                        <p>{{ $item->nama }}</p>
                                        <div class="line"></div>
                                        <div class="caption-text">
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="section section-about">
                <div class="about-head slides">
                    <h3>Spot Foto</h3>
                </div>
                <div class="about-body">
                    <div class="section-discover-body slides">
                        @foreach ($dataSpotFoto as $item)
                            <div class="col">
                                <a href="#">
                                    <img src="{{ asset('img/wisata/' . $item->foto) }}" alt="Destination">
                                    <div class="caption">
                                        <p>{{ $item->nama }}</p>
                                        <div class="line"></div>
                                        <div class="caption-text">
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>

        </div>
    </section>

    @include('APPS._layouts.footer')
    @include('APPS._layouts.js')
@endsection
