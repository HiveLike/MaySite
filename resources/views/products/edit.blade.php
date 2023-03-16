@extends('layout.layout')

@section('page_title', 'Update Page')

@section('content')

    <section>
        <div class="container signContainer">

            <div class="signHeader">Изменить</div>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('product.edit', $product) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" placeholder="Description" value="{{ $product->description }}">
                </div>
                <div class="form-group">
                    <label for="count">Count:</label>
                    <input type="text" name="count" placeholder="Count" value="{{ $product->count }}">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" placeholder="Price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <label for="photo">Choose photo:</label>
                    <input type="file" name="photo" id="photo">
                </div>


                <button class="button">Изменить</button>
            </form>

        </div>
    </section>

@endsection
