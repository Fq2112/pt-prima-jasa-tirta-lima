@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@section('content')
    <section class="home-slider">
        <div id="slider">
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="{{asset('images/slider/home1.jpg')}}" alt="">
                            <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="170" data-speed="300" data-start="1400"
                                 data-easing="easeInOut">Welcome to <strong class="strong-color">Our Site</strong>
                            </div>
                            <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="250" data-speed="300" data-start="1000"
                                 data-easing="easeInOut">PT. PRIMA JASA <strong class="strong-color">TIRTA LIMA</strong>
                            </div>
                            <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="320" data-speed="300" data-start="1800"
                                 data-easing="easeInOut">
                                <a class="btn btn-yellow-light tp-resizeme" href="{{route('president-message')}}">
                                    <b style="text-transform: uppercase">Learn more&ensp;<i class="fa fa-search"></i></b></a>
                            </div>
                        </li>
                        <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="{{asset('images/slider/home3.jpg')}}" alt="">
                            <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="170" data-speed="300" data-start="1400"
                                 data-easing="easeInOut">Welcome to <strong class="strong-color">Our Site</strong>
                            </div>
                            <div class="tp-caption sfr stt custom-size-7 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="240" data-speed="300" data-start="1000"
                                 data-easing="easeInOut">General Constructor & <strong class="strong-color">Supplier</strong>
                            </div>
                            <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="310" data-speed="300" data-start="1800"
                                 data-easing="easeInOut">
                                <a class="btn btn-yellow-light tp-resizeme" href="{{route('brief-history')}}"><b style="text-transform: uppercase">Learn more&ensp;<i
                                            class="fa fa-search"></i></b></a>
                            </div>
                        </li>
                        <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="{{asset('images/slider/home2.jpg')}}" alt="">
                            <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex" data-x="center"
                                 data-hoffset="-15" data-y="170" data-speed="300" data-start="1400"
                                 data-easing="easeInOut">
                                Welcome to <strong class="strong-color">Our Site</strong></div>
                            <div class="tp-caption sfr stt custom-size-7 white tp-resizeme zindex" data-x="center"
                                 data-hoffset="-15" data-y="240" data-speed="300" data-start="1000"
                                 data-easing="easeInOut">Padang City, West Sumatera, <strong class="strong-color">Indonesia</strong>
                            </div>
                            <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="310" data-speed="300" data-start="1800"
                                 data-easing="easeInOut">
                                <a class="btn btn-yellow-light tp-resizeme" href="{{route('vision-mission')}}">
                                    <b style="text-transform: uppercase">Learn more&ensp;<i class="fa fa-search"></i></b></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
