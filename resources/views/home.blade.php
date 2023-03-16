@extends('layout.layout')

@section('page_title', 'Home Page')

@section('content')

{{--slieder--}}

    <div class="slider_cont">
        <div class="wrapper">
            <div class="slide">

            </div>
        </div>
        <div class="pagination">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

{{--end slider--}}

{{--catalog--}}

    <div class="catalog_header">
        <div class="catalog_header_text">Каталог:</div>
        <form id="search" method="get" action="/">
            <input type="text" name="query" placeholder="Search" class="catalog_search"></input>
        </form>
    </div>
    <div class="catalog_cont">

        @if(count($products))

            @foreach($products as $product)

                <div class="product">
                    <img src="{{ $product->image_url }}" alt="product_image">
                    <div class="product_name">{{ $product->name }}</div>
                    <div class="product_price">{{ $product->price }}</div>
                </div>

            @endforeach
        @else
            <h2>На данный момент продуктов нет!</h2>
        @endif

    </div>
    {{ $products->links('components.paginate') }}

{{--end catalog--}}

@endsection
