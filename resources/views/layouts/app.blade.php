<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">translator</a>
          </div>
          @if (Auth::guest())
              <div id="navbar" class="navbar-collapse collapse" >
                <ul class="nav navbar-nav">
                  <li><a href="#">about</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{route('login')}}">login</a></li>
                </ul>
              </div><!--/.nav-collapse -->
          @else
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/home" data-pjax='#pjax-container'>{{ Auth::user()->name }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">setting<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('profile')}}">edit profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/logout">logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
          @endif
        </div><!--/.container-fluid -->
      </nav>

    </div>
</body>
</html>
