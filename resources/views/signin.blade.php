@extends('layout.layout')

@section('page_title', 'Home Page')

@section('content')

    <section>
        <div class="container signContainer">

            <div class="signHeader">Login</div>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('auth.signin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password">
                </div>

                <button class="button">Sign in</button>
            </form>

        </div>
    </section>

@endsection
