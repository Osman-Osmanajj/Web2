<?php 
session_start();
$_SESSION['title'] = "About US";
include "../components/header.php";
?>
<link rel="stylesheet" href="../css/booksapi.css">
<div class="divider"></div>
<style>
    .book {
        border: 1px solid #ddd;
        padding: 15px;
        margin: 10px 0;
    }
    .book img {
        max-width: 100px;
    }
</style>

<h1>Search for Books</h1>
<form id="searchForm">
    <input type="text" id="keyword" placeholder="Enter a keyword" required>
    <button type="submit">Search</button>
</form>
<div id="results"></div>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const keyword = document.getElementById('keyword').value;
        searchBooks(keyword);
    });

    // Fshije QEt koment
    // function searchBooks(keyword) {
    //     const xhr = new XMLHttpRequest();
    //     xhr.withCredentials = true;

    //     xhr.addEventListener('readystatechange', function () {
    //         if (this.readyState === this.DONE) {
    //             try {
    //                 const response = JSON.parse(this.responseText);
    //                 console.log('Parsed response:', response); // Added for debugging
    //                 displayResults(response);
    //             } catch (error) {
    //                 console.error('Error parsing response:', error); // Added for debugging
    //                 console.error('Response text:', this.responseText); // Added for debugging
    //             }
    //         }
    //     });

    //     xhr.open('GET', `https://goodreads12.p.rapidapi.com/searchBooks?keyword=${encodeURIComponent(keyword)}&page=1`);
    //     xhr.setRequestHeader('x-rapidapi-key', '8de719f8c6msh4a3d6fffb417f52p1197d2jsn715e46d132e9');
    //     xhr.setRequestHeader('x-rapidapi-host', 'goodreads12.p.rapidapi.com');

    //     xhr.send(null);
    // }

    function displayResults(response) {
        const resultsDiv = document.getElementById('results');
        resultsDiv.innerHTML = '';

        if (response && Array.isArray(response)) {
            response.forEach(book => {
                const bookDiv = document.createElement('div');
                bookDiv.className = 'bookBox';
                bookDiv.innerHTML = `
                <div class="vitiPublikimit">${book.publishedYear}</div>
                    <h3>${book.title}</h3>
                    <img src="${book.imageUrl}" alt="${book.title}">
                    <p class="readMore"><strong>Read more:</strong> <a href="https://www.goodreads.com${book.bookUrl}" target="_blank">More Info</a></p>
                `;
                resultsDiv.appendChild(bookDiv);
            });
        } else {
            resultsDiv.innerHTML = '<p>No results found.</p>';
        }
    }
</script>
<?php
include "../components/footer.php";
?>
