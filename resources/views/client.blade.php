<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cliente</title>
    <base href="/nitro/">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('nitro/styles.css') }}">
<body>
    <app-root></app-root>
    <script>
        var NitroConfig = {
            configurationUrl: "{{ asset('nitro/configuration.json') }}",
            sso: "{{ $authTicket }}"
        };
        console.log(NitroConfig)
    </script>
<script src="{{ asset('nitro/runtime.js') }}" defer></script>
<script src="{{ asset('nitro/polyfills.js') }}" defer></script>
<script src="{{ asset('nitro/vendor.js') }}" defer></script>
<script src="{{ asset('nitro/main.js') }}" defer></script></body>
</html>
