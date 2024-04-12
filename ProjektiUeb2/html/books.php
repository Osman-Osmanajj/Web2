<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKS</title>
  <script src="../js/loadHeader.js"></script>
  <script src="../js/footer.js"></script>
  <script src="../js/loadshigjeta.js"></script>
  
</head>
<body>
<?php
    echo "<link rel='stylesheet' href='../css/books.css' type='text/css' />";
  ?>
  <div id="headerContainer"></div>

  <div id="large-th">
    <div class="kontinier">
      <h1 style="color: black;font-size: 40px; margin-top: 100px;">January Books</h1>
      <br>
      <div class="searchbar">
        <input type="text" id="textInput" placeholder="Type something..." oninput="filterBooks()">
        </div>
      <div class="choose">
        <a href="#list-th"><i class="fa fa-th-list" aria-hidden="true"></i></a>
        <a href="#large-th"><i class="fa fa-th-large" aria-hidden="true"></i></a>
      </div>
      <div id="list-th">
      </div>
    </div>
  </div>
  <script src="../js/books.js"></script>
  <div id="shigjeta"></div>
  <div id="footerContainer"></div>
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