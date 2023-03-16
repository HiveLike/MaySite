@extends('layout.layout')

@section('page_title', 'Sign Page')

@section('content')

<section>
    <div class="container signContainer">

        <div class="signHeader">Registration</div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="error">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <form action="{{ route('auth.signup') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Re password:</label>
                <input type="password" name="re_password">
            </div>

            <button class="button">Sign up</button>
        </form>

    </div>
</section>

@endsection
