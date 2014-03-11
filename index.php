<!DOCTYPE html>
<html>
 	<head>
		<title>WeiSearch</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
  	<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WeiSearch</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div>
      </div>
    </div>
    <div id="js-wall-info">
    <header class="jumbotron-dark text-center margin-bottom-none padding-top-md" style="background-image: url(http://cdn0.stocksy.com/c/categorycover/169190-hero-march.jpg); height: 540px;">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" style="margin-top: 400px; position: absolute;">
                    <form action="/search" class="js-search-form hidden-xs" role="search" action="javascript:void(0);">
                        <input type="hidden" name="src" value="home" />
                        <div class="input-group">
                            <input type="text" name="text" class="form-control input-lg" placeholder="Start Searching...">
                            <span class="input-group-btn">
                                <input class="btn btn-success btn-lg" type="submit" value="Search">
                            </span>
                        </div>
                    </form>
                    <br class="visible-xs">
                </div>
                <h2 class="color-white margin-top-none weight-light">Wei Search for Sina Weibo, <strong>Interesting Experiences</strong></h3>
    </header>    
    </div>
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  	</body>
</html>

