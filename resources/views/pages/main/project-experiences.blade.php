@extends('layouts.mst')
@section('title', 'Project Experiences | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/project-experiences.jpg')}});
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Project Experiences</h2>
            <p>Feel free to check what kind of project that we've done</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Project Experiences</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Project <strong class="strong-color">Experiences</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="blog-timeline">
                        <!-- 1998 - 2011 -->
                        <li>
                            <div class="tldate">1998 &ndash; 2011</div>
                        </li>
                        <li>
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item html5">
                                    <article class="item-post">
                                        <div class="post-meta">
                                            <p align="justify">Dalam masa ini <strong>PT. PRIMA JASA TIRTA LIMA</strong>
                                                dipercaya mengerjakan proyek - proyek yang ada di lingkungan Kota dan
                                                Kabupaten Padang, proyek dari Dinas PU, Dinas Pengairan, Dinas
                                                Lingkungan Hidup, dan Instansi Pemerintah lainya.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2012 -->
                        <li>
                            <div class="tldate">2012</div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item css">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/drainage-phase-I.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan Drainage Primer Pusat Kota - Phase I, Kota Payakumbuh</a></h4>
                                            <p align="justify">Proyek dari Direktorat Jenderal Cipta Karya.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item design">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/kantor-tipikor.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan Gedung Kantor Tipikor - PHI, Kota Padang</a></h4>
                                            <p align="justify">Proyek dari Pengadilan Tinggi Negeri Padang.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2013 -->
                        <li>
                            <div class="tldate">2013</div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item css">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/drainage-phase-II.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan Drinage Primer Pusat Kota - Phase II, Kota Payakumbuh</a></h4>
                                            <p align="justify">Proyek dari Direktorat Jenderal Cipta Karya.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item design">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/kantor-bank.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan Gedung Kantor PT. Bank Pembangunan Daerah (BPD) Sumatera Barat Cabang Pulau Punjung, Pulau Punjung Kab. Dharmas Raya</a></h4>
                                            <p align="justify">Proyek dari PT. Bank Pembangunan Daerah Sumatera Barat.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item css">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/jembatan.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan Jembatan Baru Ruas Batas Kota Painan - Kambang, Kota Painan Kambang</a></h4>
                                            <p align="justify">Proyek dari Direktorat Jenderal Bina Marga - Balai Besar Pelaksanaan Jalan Nasional Sumatera Barat</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2014 - 2015 -->
                        <li>
                            <div class="tldate">2014 &ndash; 2015</div>
                        </li>
                        <li>
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item design">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('images/projects/jembatan.jpg')}}" alt=""
                                                     style="-webkit-transform: scaleX(-1);transform: scaleX(-1);"></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan Jembatan Arai Pinang dan Batu Busuk, Kec. Kuranji Kota Padang</a></h4>
                                            <p align="justify">Proyek dari Dinas Prasjal Tarkim.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2017 - 2018 -->
                        <li>
                            <div class="tldate">2017 &ndash; 2018</div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item css">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/jalan.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pengamanan Badan Jalan Ruas Bukit Putus - Batas Kota Padang - Batas Kota Painan</a></h4>
                                            <p align="justify">Proyek dari PUPR Direktorat Jenderal Bina Marga Sumatera Barat.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>
                    </ul>
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
