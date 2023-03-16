{{--header--}}
<header class="header">
    <h1><a href="{{ route('home') }}">Подарки к 9 мая</a></h1>
    <nav class="navigs">
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </nav>
    <nav class="auth">
        <ul>
            @guest
                <li><a href="{{ route('signup') }}">Регистрация</a></li>
                <li><a href="{{ route('signin') }}">Авторизация</a></li>
            @endguest

            @auth
                @if(Auth::user()->role === 'admin')
                    <li><a href="{{ route('admin') }}">Админка</a></li>
                @else
                    <li><a href="#">{{ Auth::user()->email }}</a></li>
                @endif

                <li><a href="{{ route('auth.logout') }}">Выход</a></li>
            @endauth

        </ul>
    </nav>
</header>
