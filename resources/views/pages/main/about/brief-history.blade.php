@extends('layouts.mst')
@section('title', 'Brief History | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/qhse-commitment.jpg')}});
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Brief History</h2>
            <p>Do you want to know more about our company?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="{{route('brief-history')}}"><i class="fa fa-angle-double-right"></i> About</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Brief History</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Brief <strong class="strong-color">History</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper-txtInfo">
                        <h2>PT. PRIMA JASA TIRTA LIMA</h2>
                        <p align="justify">Berkedudukan di Jalan Angkasa Puri No.5 RT.01 / RW.01 Kel. Dadok Tunggul
                            Hitam, Kec. Koto Tangah Kota Padang - Sumatera Barat - Indonesia, dengan Notaris NASRUL, SH
                            Nomor 09 Tanggal 12 Agustus 1998, dan bergerak dalam bidang kontraktor dan perdagangan umum.
                            Pada tahun yang sama memenangkan kepercayaan dari Pemerintah Kota Padang dan berlanjut ke
                            berbagai Kabupaten di wilaya Sumatera Barat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper-imageInfo">
                        <div class="img"></div>
                        <img src="{{asset('images/history.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2.5em" >
                <div class="col-12" style="padding: 0 15px">
                    <div class="wrapper-txtInfo">
                        <p align="justify">Selain pekerjaan lingkungan di Pemerintah Kota Padang dan Kabupaten di
                            Sumatera Barat serta sekitarnya, <strong>PT. PRIMA JASA TIRTA LIMA</strong> juga dipercaya
                            untuk menangani beberapa proyek - proyek swasta di sekitar daerah dan wilayah tersebut.</p>
                        <p align="justify">Pada tahun 2012, <strong>PT. PRIMA JASA TIRTA LIMA</strong> mendapat
                            kepercayaan yang lebih besar untuk mengembangkan diri di bidangnya dengan nominal kontrak
                            yang lebih besar daripada tahun sebelumnya. Pada tahun 2012 inilah merupakan tonggak sejarah
                            untuk <strong>PT. PRIMA JASA TIRTA LIMA</strong>, karena dalam tahun tersebut semua
                            kemampuan telah diuji dan membuat <strong>PT. PRIMA JASA TIRTA LIMA</strong> bersemangat
                            untuk terus tumbuh berkembang.</p>
                        <p align="justify">Pada tahun 2015, karena pertumbuhan bisnis dan persaingan semakin ketat, maka
                            <strong>PT. PRIMA JASA TIRTA LIMA</strong> yang berkantor pusat di Kota Padang untuk membuat
                            terobosan baru dengan membuka beberapa kantor Cabang di beberapa wilayah dan daerah di
                            Indonesia.</p>
                        <p align="justify"><strong>PT. PRIMA JASA TIRTA LIMA</strong> terus mengembangkan kemampuan
                            untuk berpartisipasi aktif sebagai bagian dari pengembangan negara tercinta ini, di
                            INDONESIA khususnya dan luar negeri pada umumnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".wrapper-choose").offset().top}, 500);
        }
    </script>
@endpush
