<?php 

$json_url = "json.js";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Planetes</title>
  <link rel="stylesheet" type="text/css" href="desktop.css" media="screen, projection">
  <link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (min-width:0px) and (max-width:480px)" />
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=set_to_true_or_false"></script>
  <script>

  function displayPosition(myPosition) {

    var centerpos = new google.maps.LatLng(myPosition.coords.latitude, myPosition.coords.longitude);

    var optionsGmaps = {
      center: centerpos,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoom: 18
    };  

    var map = new google.maps.Map(document.getElementById("map"), optionsGmaps);

    var marker = new google.maps.Marker({
      position: centerpos,
      map: map,
      title: "Vous êtes ici",
      icon: "img/pin.png"
    });
  }

  function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("Vous n'avez pas autorisé la geolocalisation sur votre navigateur.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Votre position n'est pas disponible.");
            break;
        case error.TIMEOUT:
            alert("La position n'a ^pu être déterminée.");
            break;
        default:
            alert("Erreur inconnnue");
    }
  }

  if(navigator.geolocation){
    //alert('L\'API de geolocalisation en HTML est disponible');
    //navigator.geolocation.getCurrentPosition(getMyPosition);
    navigator.geolocation.watchPosition(displayPosition, showError);
  } else {
    document.getElementById("localisation").innerHTML = "Votre navigateur ne prend pas en compte la géolocalisation HTML5";
  }


  </script>
</head>
<body>
<div id="wrap">
 <header>
   <h1><a href="index.php"><img src="img/logo.png" alt="Bievenue chez nous"></a></h1>
 </header>
 <nav>
   <ul>
    <?php
    foreach ($data as $key => $planete) {
      echo '<li><a href="detail.php?id=' . $key . '">' . $key . '</a></li>';
    }
    ?>
   </ul>
 </nav>
 <section>
   <ul>
    <?php foreach ($data as $key => $planete) : ?>
      <li class="planeteCard">
        <a href="detail.php?id=<?php echo $key ?>">
          <div class="infoSup">
            <img src="img/<?php echo $planete['image'] ?>">
            <div>
              <p>Diamètre :<br><span class="bold"><?php echo $planete['diametre'] ?> KM</span><br><br>Distance du soleil :<br><span class="bold"><?php echo $planete['distance'] ?> Millions de KM</span></p>
            </div>
          </div>
        </a>
        <h3><a href="detail.php?id=<?php echo $key ?>"><?php echo $key ?></a></h3>
        <p class="desc"><?php echo substr($planete['description'],0,100). '...'; ?></p>
      </li>
    <?php endforeach; ?>
   </ul>
   <form method="post" action="detail.php">
  <input type="text" id="search" name="search" placeholder="Capitale au début"><input type="submit" value="Rechercher">
</form>
 </section>
</div>
 <footer>
  <h2>Où suis-je ?</h2>
  <div id="map"></div>
 </footer>
</body>
</html>