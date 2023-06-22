<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" crossorigin="use-credentials" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="apple-mobile-web-app-title" content="Nitro">
    <meta name="application-name" content="Nitro">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <base href="./">
    <title>Nitro</title>
    <script type="module" crossorigin src="/build/assets/index-18a826e0.js"></script>
    <link rel="modulepreload" crossorigin href="/build/assets/vendor-367c1fc6.js">
    <link rel="modulepreload" crossorigin href="/build/assets/nitro-renderer-ebfce9c1.js">
    <link rel="stylesheet" href="/build/src/assets/index.css">
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root" class="w-100 h-100"></div>
    <script>
      const NitroConfig = {
        "config.urls": [ '/build/renderer-config.json', '/build/ui-config.json' ],
        "sso.ticket": ('{{ $authTicket }}' || null),
        "forward.type": (new URLSearchParams(window.location.search).get('room') ? 2 : -1),
        "forward.id": (new URLSearchParams(window.location.search).get('room') || 0),
        "friend.id": (new URLSearchParams(window.location.search).get('friend') || 0),
      };
    </script>
    
  </body>
</html>
