<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offers Page</title>
  <link rel="stylesheet" href="../css/offers.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div id="headerContainer"></div>
    <script src="../js/loadHeader.js"></script>
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
            <h5>Most selled</h5>
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
  <div id="footerContainer"></div>
  <script src="../js/footer.js"></script>
 
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
</body>
</html>
