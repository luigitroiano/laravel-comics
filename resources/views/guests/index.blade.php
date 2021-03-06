@extends('layouts.app')
@section('content')
    {{-- SECTION COMICS --}}
    <section id="section_comics">
        <div class="heading d_flex container_80">
            <h3 class="d_flex">COMICS & GRAPHIC NOVELS</h3>
            <div>
                <ul class="d_flex">
                    <li><a href="#" class="active">THIS WEEK</a></li>
                    <li><a href="#">LAST WEEK</a></li>
                    <li><a href="#">NEXT WEEK</a></li>
                    <li><a href="#">UPCOMING</a></li>
                    <li><a href="#">SEE ALL</a></li>
                </ul>
            </div>
        </div>
        <div class="carousel_container">
            

            <div class="row-fluid">
                <div id="productSlider" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner row w-100 mx-auto">
                        @foreach($novels->chunk(5) as $productCollections)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                            <div class="row">
                                @foreach($productCollections as $product)
                                <div class="card" style="position: relative;">
                                    @if ($product->cover)
                                    <a href="{{ route('comics.show', $product->slug )}}">
                                        <img src="{{ asset($product->cover) }}" class="img-fluid"   onerror="this.style.display='none'" style="padding: 0 10px">
                                    </a>
                                    <a href="{{ route('comics.show', $product->slug )}}">
                                        <img src="{{ asset('storage/' . $product->cover) }}" class="img-fluid" style= "width:-webkit-fill-available; padding: 0 10px"  onerror="this.style.display='none'">  
                                    </a>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block" style="position: absolute; left:0; bottom: 0; width: 100%; padding: 0; text-align: left; margin: 0 15px">
                                    <h5 style="font-weight: 400; letter-spacing: 0.05em; font-size: 15px;">{{ $product->name }} # <?php echo rand(1,150)?></h3>
                                    <h6 style="font-weight: 400; letter-spacing: 0.05em; color: #0182F9">{{ $product->available ? "AVAILABLE NOW" : "OUT OF STOCK" }}</h6>
                                </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#productSlider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productSlider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
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
