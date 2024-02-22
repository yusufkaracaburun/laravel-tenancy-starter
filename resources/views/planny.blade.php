<!DOCTYPE html>
<html>
<head>
    {{--         <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta charset="UTF-8">
    <title>{{env('APP_NAME', 'Planny')}}</title>
    <meta name="description" content="Planny" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <link rel="stylesheet" href="/splash-screen.css"> @vite('resources/css/app.css')
</head>
<body class="page-loading">
<!--begin::Theme mode import-data on page load-->
<script>
    let themeMode = "system";

    if (localStorage.getItem("kt_theme_mode_value")) {
        themeMode = localStorage.getItem("kt_theme_mode_value");
    }

    if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
    }

    document.documentElement.setAttribute("data-bs-theme", themeMode);
</script>
<!--end::Theme mode import-data on page load-->
<div id="app"></div>
<!--begin::Loading markup-->
<div class="splash-screen">
    {{--    <img src="/assets/defaults/logo.png" alt="Planny logo" />--}}
    <img src="/assets/defaults/logo-dark.png" class="light-logo" alt="Planny light logo" />
    <img src="/assets/defaults/logo-dark.png" class="dark-logo" alt="Planny dark logo" />
    <span>Even geduld aub ...</span>
</div>
<!--end::Loading markup-->
@vite('resources/ts/app.ts')
</body>
</html>
