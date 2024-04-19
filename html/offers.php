<?php 
session_start();

if(isset($_COOKIE['bg_color'])) {
    $bg_color = $_COOKIE['bg_color'];
} else {
    $bg_color = '#ffffff'; 
}

if(isset($_POST['submit'])) {
    $bg_color = $_POST['bg_color'];
    setcookie('bg_color', $bg_color, time() + (86400 * 30), "/"); 
}


    $_SESSION['title']= "Offers";
    include "../components/header.php";
?>
    <section class="section2">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h5>Most liked</h5>
              <img src="../fotot/S1.png" alt="oferta 1" width="100%" height="30%">
              
          </div>
          <div class="carousel-item">
            <h5>Best offers</h5>
            <img src="../fotot/S2.png" alt="oferta 1" width="100%" height="30%">
            
          </div>
          <div class="carousel-item">
            <h5>Most sold</h5>
            <img src="../fotot/S3.png" alt="oferta 1" width="100%" height="30%">
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="height: 100px; margin: auto 0;">
          <span class="carousel-control-prev-icon"aria-hidden="true" style="border-radius: 5px;"></span>
          <span class="visually-hidden" >Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="height: 100px; margin: auto 0;">
          <span class="carousel-control-next-icon" aria-hidden="true"style="border-radius: 5px;"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    <div id="discount-content"></div>
  </section>

  
<style>
        body {
            background-color: <?php echo $bg_color; ?>;
        }
    </style>
<div class="forma">
<form method="post">
        <label for="bg_color">Choose Background Color:</label><br>
        <input type="color" id="bg_color" name="bg_color" value="<?php echo $bg_color; ?>"><br><br>
        <input type="submit" name="submit" value="Change Color" id="submit">
    </form>
    </div>
 
  <script src="../js/offers.js"></script>
    <script>
    document.addEventListener('click', function(event) {
      if (event.target.closest('.menu-toggle')) {
          document.querySelector('.navElements').classList.toggle('active');
          document.querySelector('.menu-toggle').classList.toggle('active');
      }
  });
  </script>
    <script>
      var z = 0;
      function myfunction(){
          var x = document.body;
          x.classList.toggle("darkMode");
  
      }
    </script>


    <?php
    include "../components/footer.php"
    ?>

