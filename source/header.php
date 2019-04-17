<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Scrum</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/svg" href="images/magazine.svg"/>
  <link rel="stylesheet" href="./source/assets/css/materialize.min.css">
  <link rel="stylesheet" href="./source/assets/css/main.css">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="./source/assets/js/materialize.min.js" charset="utf-8"></script>
</head>
<body class="background">

    <nav class="blue accent-2" style="margin: 0px;">
    <div class="container">
      <div class="nav-wrapper ">
        <a href="#!" class="brand-logo"><i class="material-icons">search</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="nieuws.php">Nieuws</a></li>
          <li><a href="sport.php">Sport</a></li>
          <li><a href="techniek.php">Techniek</a></li>
          <li><a href="nederland.php">Nederland</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="paddingtop"></div>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Home</a></li>
    <li><a href="nieuws.php">Nieuws</a></li>
    <li><a href="sport.php">Sport</a></li>
    <li><a href="techniek.php">Techniek</a></li>
    <li><a href="nederland.php">Nederland</a></li>
  </ul>

  <footer>
    <?php include_once('footer.php'); ?>
  </footer>
  <script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
</body>
</html>
