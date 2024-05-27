<?php
class Book
{
    private $image;
    private $author;
    private $title;
    private $price;

    public function __construct($image, $author, $title, $price){
        $this->image = $image;
        $this->author = $author;
        $this->title = $title;
        $this->price = $price;
    }
    public function getImage(){
        return $this->image;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function displayInfo(){
        return "Title: {$this->title}, Author: {$this->author}, Price: {$this->price}";
    }
}

$books = [
    new Book("https://i.pinimg.com/236x/b5/2f/21/b52f216591803d8d2aaca40103c57bef.jpg", "J.K. Rowling", "Harry Potter and the Sorcerer's Stone", 22),
    new Book("https://i.pinimg.com/236x/76/8a/4e/768a4e5b69a78b0114b312a9687aa53c.jpg", "F. Scott Fitzgerald", "The Great Gatsby", 30),
    new Book("https://s-media-cache-ak0.pinimg.com/564x/f9/8e/2d/f98e2d661445620266c0855d418aab71.jpg", "Mary Shelley", "Frankenstein", 34),
    new Book("https://i.pinimg.com/236x/ee/fe/dd/eefeddfd8629067d1b087ba45b3c5bce.jpg", "Agatha Christie", "Murder on the Orient Express", 26),
    new Book("https://i.pinimg.com/236x/f2/db/13/f2db132a4d454b953831944f1c42a15c.jpg", "J.R.R. Tolkien", "The Hobbit", 32),
    new Book("https://i.pinimg.com/236x/33/a7/d7/33a7d7f862e24d526af4485b1feaf9b6.jpg", "Jane Austen", "Sense and Sensibility", 27),
    new Book("https://i.pinimg.com/236x/4d/29/16/4d29168c41b3b17a3a851b487bc03161.jpg", "Charles Dickens", "A Tale of Two Cities", 23),
    new Book("https://i.pinimg.com/236x/27/9a/b4/279ab49914059f7d2cb6f7c165a76102.jpg", "Emily Brontë", "Wuthering Heights", 31),
    new Book("https://i.pinimg.com/236x/25/c6/ee/25c6eee24a06578dd7f08151b138e9af.jpg", "Arthur Conan Doyle", "The Hound of the Baskervilles", 25),
    new Book("https://i.pinimg.com/236x/a2/0b/a6/a20ba6bec423ab62cfc242c712813ea5.jpg", "H.G. Wells", "The War of the Worlds", 29),
    new Book("https://i.pinimg.com/236x/7b/47/7f/7b477fb5b4cd1c1f6dff4a58008e4002.jpg", "George Orwell", "Animal Farm", 28),
    new Book("https://i.pinimg.com/236x/ac/7a/ab/ac7aabd9cb8353b78acb5da278c8a339.jpg", "Homer", "The Odyssey", 22),
    new Book("https://i.pinimg.com/236x/69/7b/56/697b56220913325e4e0ac1bdd4d5f161.jpg", "Aldous Huxley", "Brave New World", 30),
    new Book("https://observerkult.com/wp-content/uploads/2022/08/gori-1.jpg", "Petro Marko", "Hasta la Vista", 26),
    new Book("https://i.pinimg.com/236x/a9/7c/69/a97c69d3e2cbf5ac7debcff653cd6957.jpg", "Jules Verne", "Twenty Thousand Leagues Under the Sea", 32),
    new Book("https://i.pinimg.com/236x/c4/e1/d2/c4e1d283f9bd589b8c721abbfc3f9816.jpg", "Jean-Paul Sartre", "Nausea", 28),
    new Book("https://i.pinimg.com/236x/ec/bf/61/ecbf615cf26584e6b7d97256b1ac1ceb.jpg", "Albert Camus", "The Stranger", 22),
    new Book("https://i.pinimg.com/236x/1f/98/4a/1f984a7e4fcc5582ed84416d96792e98.jpg", "Fyodor Dostoevsky", "Notes from Underground", 30),
    new Book("https://i.pinimg.com/236x/79/d1/9a/79d19a1786ad8883c4d911fe31f25517.jpg", "Franz Kafka", "The Trial", 26),
    new Book("https://i.pinimg.com/236x/ab/82/d3/ab82d397d0735bc81644dbfeee6ea660.jpg", "Friedrich Nietzsche", "Thus Spoke Zarathustra", 28)
];


function populateDom($books) {
    $output = '';
    foreach ($books as $book) {
        $output .= "<div class='book read'>" .
            "<div class='cover'>" .
            "<img src=" . $book->getImage() . ">" .
            "</div>" .
            "<div class='description'>" .
            "<p class='title'>" . $book->getTitle() . "<br>" .
            "<span class='author'>" . $book->getAuthor() . "</span></p>" .
            "<div>" . $book->getPrice() ."<div class='button'>" .
            "<button onclick='buyNow()'>+</button>" .
            
      " </div>" .
            "</div>" .
            
            "</div>" .
            "</div>";
    }

    return $output;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sortCriteria = $_POST["sort"];

   
    if ($sortCriteria === "title") {
        usort($books, function ($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    } elseif ($sortCriteria === "price") {
        usort($books, function ($a, $b) {
            return $a->getPrice() <=> $b->getPrice();
        });
    }
}

echo populateDom($books);
?>
