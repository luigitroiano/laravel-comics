@extends('layouts.app')
@section('content')
{{-- SECTION COMICS --}}
    <section></section>
    {{-- SECTION MUST READS --}}
    <section></section>
    {{-- SECTION CURRENT SERIES --}}
    <section></section>
    {{-- SECTION SERVICES --}}
    <section id="section_services" class="d_flex">
                <div class="services container_70 d_flex">
                    <div class="service">
                        <img src="{{ asset('img/footer/buy_bar/svgexport-1.svg') }}" alt="">
                        <span>DIGITAL COMICS</span>
                    </div>
                    <div class="service">
                        <img src="{{ asset('img/footer/buy_bar/svgexport-2.svg') }}" alt="">
                        <span>DC MERCHANDISE</span>
                    </div>
                    <div class="service">
                        <img src="{{ asset('img/footer/buy_bar/svgexport-3.svg') }}" alt="">
                        <span>PRINT SUBSCRIPTIONS</span>
                    </div>
                    <div class="service">
                        <img src="{{ asset('img/footer/buy_bar/svgexport-4.svg') }}" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </div>
                </div>
            </section>
@endsection
