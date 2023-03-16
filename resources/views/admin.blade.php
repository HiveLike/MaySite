@extends('layout.layout')

@section('page_title', 'Admin Page')

@section('content')

        <div class="admin_cont">
            <div class="info_cont">
                <div class="info_block">
                    {{ $counts[1] }} продуктов
                </div>
                <div class="info_block">
                    {{ $counts[0] }} пользователей
                </div>
                <div class="info_block">
                    {{ $counts[2] }} заказ
                </div>
            </div>
            <div class="section_header">Популярные продукты</div>
            <div class="admin_product_cont">
                @if(count($PopularProducts))

                    @foreach($PopularProducts as $product)

                        <div class="product">
                            <img src="{{ $product->image_url }}" alt="product_image">
                            <div class="product_name">{{ $product->name }}</div>
                            <div class="product_price">{{ $product->order_count }}</div>
                        </div>

                    @endforeach
                @else
                    <h2>На данный момент продуктов нет!</h2>
                @endif
            </div>
            <div class="section_header">
                Продукты
                <a class="add_button" href="{{ route('product.createForm') }}">Добавить</a>
            </div>
            <div class="admin_product_cont">

                @if(count($products))

                    @foreach($products as $product)

                        <div class="product">
                            <img src="{{ $product->image_url }}" alt="product_image">
                            <div class="product_name">{{ $product->name }}</div>
                            <div class="admin_line">
                                <a href="{{ route('product.editForm', $product) }}" class="product_edit">Ред.</a>
                                <a href="{{ route('product.delete', $product) }}" class="product_delete">Удал.</a>
                            </div>
                        </div>

                    @endforeach
                @else
                    <h2>На данный момент продуктов нет!</h2>
                @endif

            </div>
        </div>

@endsection
