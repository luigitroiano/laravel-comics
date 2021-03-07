@extends('layouts.app')
@section('content')
<!-- IMG PARALLAX -->
<div id="parallax" style="background-image: url({{asset('storage/' . $novels->parallax) }});">
    <div class="novel-cover">
        <img src="{{ asset('storage/' . $novels->cover) }}" width="200px" alt="">
    </div>
    <div class="blue_bar">

    </div>
</div>
<!-- HEADING -->
<div id="heading" class="d_flex">

    <div class="novel_title">
        <h3>{{$novels->name}} #{{$novels->volume}}</h3>
    </div>
    <div class="d_flex">
        <div class="novel_price d_flex">
            <h6>
                U.S. Price : $ {{$novels->price}}
            </h6>
            <h6 class="available">
                @if($novels->available)
                Available
                @else
                Not Available
                @endif
            </h6>
        </div>
        <div class="novel_available_check d_flex">
            <h6>Check Availability <i class="fas fa-chevron-down"></i></h6>
        </div>
    </div>
    <div class="novel_description flex">
        <h5>{{$novels->description}}</h5>
    </div>
</div>
{{-- SPECS --}}
<div id="specs" class="d_flex">
    <div class="talent-specs d_flex">
        <div class="talent d_flex">
            <h4>Talent</h4>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Art By:</td>
                        <td class="artist">
                            {{-- manca relazione con table artists --}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Written By:</td>
                        <td class="writer">
                            {{-- manca relazione con table writers --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="specs d_flex">
            <h4>Specs</h4>
            <table class="table">
                <tbody>
                    <tr>
                        <td scope="row">Series:</td>
                        <td class="serie_name">
                            {{-- manca relazione con table series --}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">U.S.Price:</td>
                        <td>{{$novels->price}} $</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">On Sale Date:</td>
                        <td>{{$novels->on_sale_date}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Volume/Issue #:</td>
                        <td>{{$novels->volume}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Trim Size:</td>
                        <td>{{$novels->trim_size}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Page Count:</td>
                        <td>{{$novels->pages}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Rated:</td>
                        <td>{{$novels->rated}}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection