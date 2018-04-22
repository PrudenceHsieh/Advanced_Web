<?php

$contentFile = "content.json";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  try
  {
  $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

    # Load content from JSON file
    if(is_readable($contentFile))  
      $videoData = file_get_contents($contentFile);
    else                           
      throw new Exception("Cannot load content!");

  }
  catch(Exception $e)
  {
    header('HTTP/1.1 400 Bad request'); 
    echo $e->getMessage();
  }

}

# decode JSON file 
  $JSONcontents = json_decode($videoData);
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://www.iconj.com/ico/k/k/kk66h8j9fa.ico">

  <title>VoiceTube《看影片學英語》60,000 部英文學習影片，每天更新</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">

  <!--Our Style-->
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script type="text/javascript" src="js/index_ajax.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="logo pull-left" href="./index.html"><img border="0" alt="VoiceTube" src="img/VTicon.png" width="45" height="45"></a>
        <a class="navbar-brand" href="./index.html">VoiceTube</a>
    </div>

    <div class="collapse navbar-collapse">
    	<ul class="nav navbar-nav">
    		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Channels <span class="caret"></span></a>
            	<ul class="dropdown-menu">
            		<li><a href="#">Speeches and Presentations</a></li>
            		<li><a href="#">Education Videos</a></li>
            		<li role="separator" class="divider"></li>
            		<li><a href="#">BBC Learning English</a></li>
            		<li><a href="#">CNN Learning English</a></li>
            		<li role="separator" class="divider"></li>
            		<li><a href="#">TOEIC</a></li>
            		<li><a href="#">TOEFL</a></li>
          		</ul>
        	</li>

    		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Levels <span class="caret"></span></a>
          		<ul class="dropdown-menu">
           			<li class="dropdown-submenu"><a href="#" data-toggle="dropdown">Basic: TOEIC250-545</a>
                  		<ul class="dropdown-menu">
                    		<li><a href="#">All</a></li>
                    		<li><a href="#">Entertainment</a></li>
                  		</ul>
              		</li>

              		<li class="dropdown-submenu"><a href="#" data-toggle="dropdown">Intermediate: TOEIC550-780</a>
                  		<ul class="dropdown-menu">
                    		<li><a href="#">All</a></li>
                    		<li><a href="#">Entertainment</a></li>
                  		</ul>
              		</li>
                
              		<li class="dropdown-submenu"><a href="#" data-toggle="dropdown">Advanced: TOEIC785-990</a>
                  		<ul class="dropdown-menu">
                    		<li><a href="#">All</a></li>
                    		<li><a href="#">Entertainment</a></li>
                  		</ul>
              		</li>
          		</ul>
        	</li>

        	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listening & Speaking   <span class="caret"></span></a>
          		<ul class="dropdown-menu">
            		<li><a href="#">Today's Pronunciation Challenge</a></li>
            		<li><a href="#">Listening Quiz</a></li>
          		</ul>
        	</li>
      </ul>
        </ul>
        
          <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">中文 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">English</a></li>
            <li><a href="#">日本語</a></li>
            <li><a href="#">中文(繁體)</a></li>
          </ul>
          <li><a href="#">登入</a></li>
    </div>

    
  </div><!-- /.container -->
</nav>



  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1>用電影、音樂、脫口秀影片</h1>
      <h1>輕鬆聽懂英語、說好英文</h1>
      <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...CNN, interview, business" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>

                </button>
            </div>
        </div>
    </form>
    <div class="btn" role="group" aria-label="...">
      <button type="button" class="btn btn-success">Download App >> </button>
      <button type="button" class="btn btn-warning">Tour >> </button>

    </div>
      <!--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>-->
      <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
    </div>
  </div>

  <div class="col-md-6">
    <form class="navbar-form navbar-right" role="search">
        
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">

    <!-- video -->
    <div id="videopart" class="col-xs-12 col-sm-10 col-md-9">
     <!-- by index_ajax.js to insert video -->
    </div>

    <div class="col-xs-12 col-sm-2 col-md-3">
      <div class="sidebar">
        <img src="https://cdn.voicetube.com/assets/thumbnails/KDDM_XGNj2c.jpg">
        <p><a class="btn btn-default" href="#" role="button">點我看更多 &raquo;</a></p>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">英文學習課程</h3>
          </div>
          <div class="panel-body">
              <a href="/lessons/71?apilang=zh_tw" target="_blank" ><h5>每天堅持5分鐘，1個月後大不同！</h5></a>
              <div class='short_company'><p>EF English Live 提供</p></div>
              <a href="/lessons/44?apilang=zh_tw" target="_blank" ><h5>【免費體驗】5 分鐘檢測英文能力</h5></a>
              <div class='short_company'><p>VoiceTube 提供</p></div>
              <a href="/lessons/89?apilang=zh_tw" target="_blank" ><h5>每天25分鐘，聽懂CNN</h5></a>
              <div class='short_company'><p>EF English Live 提供</p></div>
              <a href="/lessons/94?apilang=zh_tw" target="_blank" ><h5>你知道錯在哪嗎？﹥﹥看答案</h5></a>
              <div class='short_company'><p>EF English Live 提供</p></div>
            </div>

        </div>

      </div>
    </div>

    <script type="text/javascript" src="js/index_ajax.js"></script>

    </div>

    <hr>

    <footer>
      <p>&copy; 2018 Company, Inc.</p>
    </footer>
  </div>
  <!-- /container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>