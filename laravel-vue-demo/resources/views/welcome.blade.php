<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravue</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">

        @vite('resources/css/app.css')        
    </head>
    <body>
        <h2>Welcome to Laravue</h2>
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>