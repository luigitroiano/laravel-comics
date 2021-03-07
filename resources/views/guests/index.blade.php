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
                                        <img src="{{ asset('storage/' . $product->cover) }}" class="img-fluid" style= "width:-webkit-fill-available; padding: 0 10px"> 
                                    </a>
                                    @else
                                    <a href="{{ route('comics.show', $product->slug )}}" style="height: 389.8px; position: relative; background-color: #DBDBDB">
                                        <img src="storage/img/current_series/DC_placeholder_series_573b3c5dac0485-40480935.jpg" class="img-fluid"style="width: 180px; padding: 0 10px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
                                    </a>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block" style="position: absolute; left:0; bottom: 12px; width: 100%; padding: 0; text-align: left; margin: 0 15px">
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
    <section id="section_must_reads" class="container_80">
        <div class="label">
            <h3>MUST READS</h3>
        </div>
        <div class="container d_flex">
            @foreach ($articles as $item)
            <a href="#" class="card_container">
                <div class="card">
                    <img src="{{ asset($item->cover) }}" alt="">
                    <h6>{{ $item->subtitle }}</h6>
                    <h4>{{ $item->title }}</h4>
                    <p>{{ strlen($item->body) > 50 ? substr($item->body, 0, 65). "..." : $item->body}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>
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
