<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>translator</title>
        <link rel="stylesheet" href="/{{ elixir('css/app.css') }}" />
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
      @include('partials.flash')
      @include('layouts.app')
      <div class="container-fluid">
              @yield('content')
      </div>
      <script src="{{ elixir('js/all.js') }}"></script>
        <script>$(function () {
            $('[data-toggle="tooltip"]').tooltip()
          })
          $('div.alert').delay(3000).slideUp(300);
        </script>

    </body>
</html>
