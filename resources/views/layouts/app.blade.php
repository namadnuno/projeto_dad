<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>

            <div class="navbar-burger burger" data-target="navMenuTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenuTransparentExample" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        @if (auth()->guest())
                        <p class="control">
                            <a class="button"
                               href="{{ url('/login') }}">
                                <span>
                                    Login
                                </span>
                            </a>

                        </p>
                        <p class="control">
                            <a class="button is-primary" href="{{ url('/register') }}">
                                <span>Register</span>
                            </a>
                        </p>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link  is-active" href="/documentation/overview/start/">
                                    Olá, {{ auth()->user()->name }}
                                </a>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item " href="/documentation/overview/start/">
                                        Overview
                                    </a>
                                    <a class="navbar-item " href="https://bulma.io/documentation/modifiers/syntax/">
                                        Modifiers
                                    </a>
                                    <a class="navbar-item logoutButton" href="#">
                                        Sair
                                    </a>
                                    <form class="hidden logoutForm" style="display: none;" action="{{ url('/logout') }}" method="POST"> q
                                        {{ csrf_field() }}
                                        <button class="button is-text">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                @yield('title')
            </p>
            <p class="subtitle">
                @yield('subtitle')
            </p>
        </div>
    </section>
    <div class="mt-5">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
