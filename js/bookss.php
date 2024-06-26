<?php

$booksonsale = [
    [
        'image' => 'https://i.pinimg.com/236x/04/1c/dd/041cdd9ff00680e9586f645c90f71462.jpg',
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => 27.99
        
    ],
    [
        'image' => 'https://s-media-cache-ak0.pinimg.com/564x/f9/8e/2d/f98e2d661445620266c0855d418aab71.jpg',
        'author' => 'Mary Shelley',
        'title' => 'Frankenstein',
        'price' => 15.99
        
    ],
    [
        'image' => 'https://i.pinimg.com/236x/7b/47/7f/7b477fb5b4cd1c1f6dff4a58008e4002.jpg',
        'author' => 'George Orwell',
        'title' => 'Animal Farm',
        'price' => 13.99
    ],
    [
        'image' => 'https://i.pinimg.com/236x/f2/db/13/f2db132a4d454b953831944f1c42a15c.jpg',
        'author' => 'J.R.R. Tolkien',
        'title' => 'The Hobbit',
        'price' => 20.00

    ],
    [
        'image' => 'https://i.pinimg.com/236x/69/7b/56/697b56220913325e4e0ac1bdd4d5f161.jpg',
        'author' => 'Aldous Huxley',
        'title' => 'Brave New World',
        'price' => 12.99
    ],
    [
        'image' => 'https://i.pinimg.com/236x/ac/7a/ab/ac7aabd9cb8353b78acb5da278c8a339.jpg',
        'author' => 'Homer',
        'title' => 'The Odyssey',
        'price' => 17.99
    ],
    [
        'image' => 'https://observerkult.com/wp-content/uploads/2022/08/gori-1.jpg',
        'author' => 'Petro Marko',
        'title' => 'Hasta la Vista',
        'price' => 16.99
    ],
    [
        'image' => 'https://i.pinimg.com/236x/ec/bf/61/ecbf615cf26584e6b7d97256b1ac1ceb.jpg',
        'author' => 'Albert Camus',
        'title' => 'The Stranger',
        'price' => 15.99
    ],
    [
        'image' => 'https://i.pinimg.com/236x/79/d1/9a/79d19a1786ad8883c4d911fe31f25517.jpg',
        'author' => 'Franz Kafka',
        'title' => 'The Trial',
        'price' => 13.99,

    ],
];

function populateDom($booksonsale)
{
    $output = '';
    foreach ($booksonsale as $book) {
        $bookTitleId = htmlspecialchars($book['title']);
        $output .= "<div class='offer-card'>" .
            "<img src='" . htmlspecialchars($book['image']) . "'>" .
            "<div class='description'>" .
            "<div class='text'>" .
            "<h2>" . htmlspecialchars($book['title']) . "</h2>" .
            "<h3>" . htmlspecialchars($book['author']) . "</h3>" .
        
            "<span id='pricgge'>" . htmlspecialchars($book['price']) . "</span></p>" .
            "</div>" .
            "<div class='button'>" .
            "<form id='add-to-cart-form-$bookTitleId' method='post'>" .
            "<input type='hidden' name='book_title' value='" . htmlspecialchars($book['title']) . "'>" .
            "<input type='hidden' name='book_author' value='" . htmlspecialchars($book['author']) . "'>" .
            "<input type='hidden' name='book_price' value='" . htmlspecialchars($book['price']) . "'>" .
            "<input type='button' value='Add to Cart' onclick='addToCart(\"$bookTitleId\")'>" .
            "</form>" .
            "</div>" .
            "</div>" .
            "</div>";
    }
    echo $output;
}


populateDom($booksonsale);

?>



