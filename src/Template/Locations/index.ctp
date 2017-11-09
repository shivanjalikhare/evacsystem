<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location[]|\Cake\Collection\CollectionInterface $locations
 */
?>


<div>
    <?php echo hello ?>
    <?php $mark = $this->Locations->City->findByLocationCity($city); ?>
    <?php echo $mark ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marker[]|\Cake\Collection\CollectionInterface $markers
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Safe shelter Details</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru1 = {lat: 30.005417, lng: -91.818665};
        var a = [{}];
        <?php foreach ($markers as $marker): ?>
            a.push({lat: <?= $marker->lat ?>,lng: <?= $marker->lng ?>});
            
        <?php endforeach; ?>
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru1
        });

        for(var i=0;i <=a.length;i++){
        var marker1 = new google.maps.Marker({
          position: a[i],
          map: map
        });    
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFJUZ4vcXLIbHNR1exzevOweYJaoR3JB8&callback=initMap">
    </script>
  </body>
</html>