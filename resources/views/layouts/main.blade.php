<html>
<head>
    <title>@yield('title')</title>
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.modal.min.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" type="text/javascript" charset="utf-8"></script>
@yield('stylesheets')

@if(config('app.env') == 'production')
    <!-- Yandex.Metrika counter -->
        <script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
        <script type="text/javascript">
            try {
                var yaCounter31097371 = new Ya.Metrika({
                    id: 31097371,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/31097371" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->

        <!-- Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-78957374-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- /Analytics -->

    @endif

    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.modal.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('js/easingScroll.js') }}" type="text/javascript" charset="utf-8"></script>
    @yield('javascripts')

    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <meta name="description" content="@yield('meta_description')"/>
    <meta name='yandex-verification' content='682daa21932c71cf' />
    @livewireStyles
</head>
<body>

@include('modal.bid')
<livewire:pages.header :key="'header'.now()"/>

<div id="fullContainer">
    @yield('content')
</div>

<livewire:pages.footer :key="'footer'.now()"/>
@livewireScripts
</body>
</html>
