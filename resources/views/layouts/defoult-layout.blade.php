<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel Start project')</title>

        <!-- Styles -->
        <style type="text/css">
            a {
                text-decoration: none;
                text-transform: capitalize;
                color: #ff0505;
                transition: all ease 1s;
            }

            a:hover {
                transform: scale(1.1);
            }

            nav {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            @yield('style_content')
        </style>
    </head>
    <body style="color-scheme: dark; background: black; color: yellowgreen; margin: 10px 50px;">
        <nav>
            <a href="/">home</a>
            <a href="/about">about</a>
            <a href="/support">Support</a>
        </nav>

        @yield('main_content')

    </body>
</html>
