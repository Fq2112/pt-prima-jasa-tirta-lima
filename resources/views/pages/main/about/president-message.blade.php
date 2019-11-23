@extends('layouts.mst')
@section('title', 'President Message | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/qhse-commitment.jpg')}});
        }

        .wrapReady {
            float: left;
            padding: 1rem;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>President Message</h2>
            <p>Do you want to know more about our company?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="{{route('brief-history')}}"><i class="fa fa-angle-double-right"></i> About</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> President Message</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">President <strong class="strong-color">Message</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-txtInfo">
                        <img src="{{asset('images/loan.png')}}" alt="HSE" class="wrapReady">
                        <p align="justify">Salam hormat,</p>
                        <p align="justify">Selamat datang di perusahaan kami <strong>PT. PRIMA JASA TIRTA LIMA</strong>
                            yang kami dirikan sejak tangal 12 Agustus 1998 dan dengan perubahan akte pendirian terbaru
                            pada tanggal 11 Januari 2018, yang bergerak dalam bidang kontraktor umum (general
                            contractor) dan pengadaan umum (general supplier).</p>
                        <p align="justify">Pada saat ini, perusahaan kami telah muncul sebagai salah satu perusahaan
                            terkemuka di bidang kontraktor Sipil, Struktur, dan Infrastrucktur, di dalam “ Industrial &
                            Manufacture, Oil & Gas, Petrochemical, Minning, Power Plant, dan Infrastructure & Property”.
                            Daftar panjang klien kami adalah bukti dari pencapaian tinggi kami dalam memenuhi komitmen
                            kami.</p>
                        <p align="justify">Para pemimpin yang berpengalaman, dinamis, dan berpikiran terbuka, bersama
                            dengan kualitas dan komitmen pekerja kami memastikan bahwa perusahaan kami akan melanjutkan
                            kisah suksesnya di masa depan dan tetap selangkah lebih maju dari perusahaan sejenis.</p>
                        <p align="justify"><strong>PT. PRIMA JASA TIRTA LIMA</strong> menggambarkan kompetensi kunci dan
                            sumber daya penting untuk keberhasilan bisnis strategis. Dengan para pemimpin dan pekerja
                            kami yang berkualitas dan bermotivasi tinggi sebagai dukungan kami, kami akan segera siap
                            untuk fokus pada Anda - sebagai klien dan pelanggan kami di masa depan - dan berkomitmen
                            untuk memberikan layanan terbaik kami kepada Anda.</p>
                        <p align="justify">Kami menantikan kesempatan untuk melayani kebutuhan Anda dalam waktu dekat.</p>
                        <p align="justify">Hormat Kami,</p><br>
                        <p align="justify" style="line-height: 1.2;"><strong><u>LOAN YARD SUMABRATA, ST</u></strong>
                            <br>Managing Director</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset('vendor/jquery.slickwrap.js')}}"></script>
    <script>
        $(function () {
            $('.wrapReady').slickWrap({
                cutoff: 10,
                resolution: 15,
                bloomPadding: true
            });
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".wrapper-choose").offset().top}, 500);
        }
    </script>
@endpush
