@extends('layouts.mst')
@section('title', 'Our Services | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/services.jpg')}});
        }

        ol {
            margin-left: 3em;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Services</h2>
            <p>What services does our company provide to you?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Services</a></li>
        </ul>
    </div>

    <section class="bot-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="text-center">
                                <img src="{{asset('images/excavator.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="about-wrapper">
                                <h2>Our <strong class="strong-color">Services</strong></h2>
                                <p align="justify"><strong>PT. PRIMA JASA TIRTA LIMA</strong> fokus pada jasa layanan
                                    dalam bidang :</p>
                                <ol>
                                    <li><strong>SIPIL & STRUKTUR</strong> "Piling, Pondasi, Bangunan Gedung, Perumahan,
                                        Pabrikan, Pergudangan, Kawasan Industri, Jembatan dan Lainnya”
                                    </li>
                                    <li><strong>INFRASTRUKTUR</strong> “Pematangan Lahan, Pembangunan Jalan (Kawasan &
                                        Layang /Tol), Drinage, Tanggul, Bandara & Pelabuhan dan Fasilitas Publik
                                        Lainnya”
                                    </li>
                                </ol>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-oil-platform"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Oil & Gas</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-mining-industry"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Mining</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-refinery"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Petrochemical</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-power-plant"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Powerplant</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-manufacture"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Industrial & Manufacture</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".bot-50").offset().top}, 500);
        }
    </script>
@endpush
