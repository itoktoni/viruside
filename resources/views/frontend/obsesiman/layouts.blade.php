<!DOCTYPE html>
<html lang="en">

<head>
    @include(Helper::setExtendFrontend('meta'))
    @stack('css')
</head>

<body>
   
    @include(Helper::setExtendFrontend('header'))
    @yield('content')

    @include(Helper::setExtendFrontend('footer'))
    @include(Helper::setExtendFrontend('js'))

    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5b178de98859f57bdc7be288/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->
    <!--End of Tawk.to Script-->

</body>

</html>