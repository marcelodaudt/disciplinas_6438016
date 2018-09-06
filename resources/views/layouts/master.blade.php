<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link href="/assets/app.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Sistema USP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            @auth
              <form id="logout-form" action="/logout" method="POST">
				        {{ csrf_field() }}
				        <li class="nav-item">
                  <button type="submit">Sair</button>
				        </li>
              </form>
            @else
              <li class="nav-item active">
                <a href="/login" class="nav-item">Login</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-item">Register</a>
              </li>
            @endauth
          </ul>
          <form class="form-inline mt-2 mt-md-0" method="POST" action="/disciplinas/search">
          	{{ csrf_field() }}
            <input class="form-control mr-sm-2" type="text" name="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
    	@section('content')
    	@show
    	
    	<p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/app.js"></script>
  </body>
</html>