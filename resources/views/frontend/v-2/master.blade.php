<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{!! asset('setting/'.$setting->logo) !!}"/>
    <!-- Pavicon ICon -->
    @include('frontend.v-2.includes.style')
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{$code->gtm_id ?? 'GTM-XXXXXXX'}}');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$code->gtm_id ?? 'GTM-XXXXXXX'}}"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    @include('frontend.v-2.includes.header')

    <main>
        <!-- Flash Messages -->
        <div class="container mt-3">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <!-- Home Slider -->
        @yield('content-v2')
        <!-- /Footer top -->
    </main>

    <!-- Footer -->
    @include('frontend.v-2.includes.footer')
    <!-- /Footer -->

    <!-- Jquery CDN -->
    @include('frontend.v-2.includes.script')
    @stack('script')
    <a href="https://wa.me/{{ $setting->whatsapp ?? '1333088355' }}" target="_blank" class="whatapps-btn-inner">
        <i class="fab fa-whatsapp"></i>
    </a>
</body>

</html>