<!DOCTYPE html>

<html lang="en">
<head><base href="../../../"/>
    <title>Login Page</title>
    <meta name="description" content="Letoco Investment Crm">
    <meta name="keywords" content="Letoco Investment">
    <meta property="og:title" content="Letoco Investment">
    <meta property="og:description" content="Letoco Investment Crm">
    <meta property="og:site_name" content="Letoco Investment">
    <meta property="og:url" content="https://crm.letocoinvestment.com/login">
    <meta property="og:image" content="{{ asset('images/logo.svg') }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>body { background-image: url({{ asset('images/bg4.jpg') }}); } [data-theme="dark"] body { background-image: url({{ asset('images/bg4-dark.jpg') }}); }</style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        @yield('content')

    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('js/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>

</body>
<!--end::Body-->
</html>
