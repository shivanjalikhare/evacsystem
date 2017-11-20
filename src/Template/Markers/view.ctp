<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marker[]|\Cake\Collection\CollectionInterface $markers
 */
?>

<!DOCTYPE html>
<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<html>
  <body>
    <div class="container marginbot-50">
      <div class="home-section color-dark">
        <h3 class="h-bold">Safe shelter Details</h3>
              <?php 
              echo $this->Form->create('dropdown', array('name' => 'dropdown'));?>
              <div class="form-group">
               <?php echo $this->Form->input('select', array('options' => $locations, 
                  'empty' => 'Select Location', 'id' => 'selected', 'value' => 'selected','class'=>"form-control")); ?>
              </div>
              <div class="form-group">
               <?php echo $this->Form->button(__('Submit'),['class'=>"btn btn-lg btn-primary",]); ?>
              </div>
              <div id="map" style="height: 400px; width: 100%;"></div>
              <div>
                  <script>
                    function initMap() {


                      var a = [{}];
                      <?php foreach ($markers as $marker): ?>
                          a.push({lat: <?= $marker->lat ?>,lng: <?= $marker->lng ?>});
                          
                      <?php endforeach; ?>
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 10,
                        center: a[1]
                      });

                      for(var i=1;i <=a.length;i++){
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
              </div>
            </div>
          </div>
  </body>
</html>
