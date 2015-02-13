<!DOCTYPE html>
<html lang="en">
<head>

  <?php require '././settings.php'; ?>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php echo $project_name; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS ( jakephp only supports direct paths to static files at the moment :p )
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/jakephp/app/views/static/normalize.css">
  <link rel="stylesheet" href="/jakephp/app/views/static/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container" style="margin-top:10%;">
    <div class="row" style="text-align:center;">
      <div class="twelve columns">
        <h4>HOME</h4>
        <p>It Worked! Next steps:</p>
      </div>
    </div>
    <ul>
    <div class="row" style="text-align:right; list-style-type: none;">
      <div class="five columns offset-by-one">
          <li>Add some models to models.php</li>
          <li>Edit controllers.php</li>
          <li>Make some views, put 'em in the views folder</li>
          <li>Point to views via controllers.php</li>
      </div>
      <div class="five columns" style="text-align:left;">
          <li>Checkout /admin (default password is admin)</li>
          <li><em>Fork</em> this project on <a href="https://github.com/jakemor/jakephp">github</a></li>
          <li><em>Star</em> this project on <a href="https://github.com/jakemor/jakephp">github</a></li>
          <li>Build the next facebook!!</li>
      </div>
    </div>
    </ul>
    <div class="row" style="text-align:center;">
      <div class="twelve columns">
        <p>Built with ❤️ by <a href="https://jakemor.com">Jake Mor</a></p>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
