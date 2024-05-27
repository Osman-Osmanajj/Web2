<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_COOKIE['bg_color'])) {
    $bg_color = $_COOKIE['bg_color'];
} else {
    $bg_color = '#ffffff';
}

if (isset($_POST['submit'])) {
    $bg_color = $_POST['bg_color'];
    setcookie('bg_color', $bg_color, time() + (86400 * 30), "/");
}

$_SESSION['title'] = "Offers";
include "../components/header.php";
?>
<section class="section2">
    <div id="carouselExampleIndicators" class="carousel slide">
        <!-- Carousel code here -->
    </div>

    <div id="discount-content">
        <?php
        include "../js/Offers.php";
        populateDom($booksonsale);
        ?>
      
    </div>
</section>
<html>
<head>
    <!-- Your other head content -->
    <html>
<head>
    <!-- Your other head content -->
    <script>
        function addToCart(bookTitleId) {
            var formData = new FormData(document.getElementById('add-to-cart-form-' + bookTitleId)); // Get the form data

            // Send the form data using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'add_to_cart.php', true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    // Request was successful, handle the response here if needed
                    console.log(xhr.responseText);
                } else {
                    // Request failed, handle errors here
                    console.error(xhr.statusText);
                }
            };
            xhr.onerror = function() {
                // Request failed, handle errors here
                console.error('Request failed');
            };
            xhr.send(formData);
        }
    </script>
</head>
<body>
    <!-- Your HTML content -->
</body>
</html>

</head>
<body>
    <!-- Your HTML content -->
</body>
</html>

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



<script>
    document.addEventListener('click', function(event) {
        if (event.target.closest('.menu-toggle')) {
            document.querySelector('.navElements').classList.toggle('active');
            document.querySelector('.menu-toggle').classList.toggle('active');
        }
    });

    function myfunction() {
        var x = document.body;
        x.classList.toggle("darkMode");
    }
</script>

<?php include "../components/footer.php"; ?>
