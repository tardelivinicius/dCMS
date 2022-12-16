<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" href="./favicon.ico"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
        <link rel="apple-touch-icon" sizes="180x180" href="nitro/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="nitro/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="nitro/favicon-16x16.png">
        <link rel="manifest" crossorigin="use-credentials" href="nitro/site.webmanifest">
        <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#000000">
        <meta name="apple-mobile-web-app-title" content="Nitro">
        <meta name="application-name" content="Nitro">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="theme-color" content="#000000"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <base href="./">
        <title>Nitro</title>
        <link href="nitro/static/css/vendors.34eda13e.chunk.css" rel="stylesheet">
        <link href="nitro/static/css/main.66bd57cc.chunk.css" rel="stylesheet">
        </head>
        <body>
            {{ $authTicket }}
            <noscript>You need to enable JavaScript to run this app.</noscript>
            <div id="root" class="w-100 h-100"></div>
            <script>
                const NitroConfig={
                    "config.urls":["/renderer-config.json","/ui-config.json"],
                    "sso.ticket": "{{ $authTicket }}", 
                    "forward.type":new URLSearchParams(window.location.search).get("room")?2:-1,
                    "forward.id":new URLSearchParams(window.location.search).get("room")||0,
                    "friend.id":new URLSearchParams(window.location.search).get("friend")||0
                }
            </script>
            <script>
                !function(e){function r(r){for(var n,i,l=r[0],a=r[1],f=r[2],p=0,s=[];p<l.length;p++)i=l[p],
                Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&s.push(o[i][0]),
                o[i]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n]);for(c&&c(r);s.length;)s.shift()();return u.push.apply(u,f||[]),t()}function t(){for(var e,r=0;r<u.length;r++){for(var t=u[r],n=!0,l=1;l<t.length;l++){var a=t[l];0!==o[a]&&(n=!1)}n&&(u.splice(r--,1),e=i(i.s=t[0]))}return e}var n={},o={2:0},u=[];function i(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,i),t.l=!0,t.exports}i.m=e,i.c=n,i.d=function(e,r,t){i.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,r){if(1&r&&(e=i(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(i.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)i.d(t,n,function(r){return e[r]}.bind(null,n));return t},i.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(r,"a",r),r},i.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},i.p="./";var l=this["webpackJsonpnitro-react"]=this["webpackJsonpnitro-react"]||[],a=l.push.bind(l);l.push=r,l=l.slice();for(var f=0;f<l.length;f++)r(l[f]);var c=a;t()}([])</script>
                
            <script src="nitro/static/js/renderer.0355b8fd.chunk.js"></script>
            <script src="nitro/static/js/vendors.1f4d3ec8.chunk.js"></script>
            <script src="nitro/static/js/main.0f226af0.chunk.js"></script></body></html>