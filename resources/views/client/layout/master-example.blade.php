<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         header {
                width: 100%;
                height: 80px;
                color: #FFF;
                background: red;
                font-size: 60px;
            }
        nav {
            width: 100%;
            height: 40px;
            col
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @include('client.pages.header')
    {{-- <header>Hearder</header > --}}
    <main>
        <div class="nav">Navigation</div>
        <aside>
            @section('side-bar')
            Side bar
            @show
            </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    @include('client.pages.footer')
</body>
</html>

@yield('js-custom')
