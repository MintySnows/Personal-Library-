<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js/home.css">
    <title>Personal Book Website</title>
</head>
<body>

    <header>
        <h1>Personal Book Website</h1>
        <div class="user-info">
            <div class="avatar"></div>
            <span>User</span>
        </div>
        <input type="text" placeholder="Search" class="search-bar">
        <button class="search-btn">Search</button>
    </header>

    <nav>
        <ul>
            <li><button>User</button></li>
            <li><button>Library</button></li>
            <li><button>Settings</button></li>
            <li><button class="logout-btn">Log Out</button></li>
        </ul>
    </nav>

    <main>
        <h2>Top Picks:</h2>
        <div class="book-container">
            <div class="book-card">
                <img src="book_image_url" alt="Book Cover">
                <h3>BOOK NAME</h3>
                <p>AUTHOR NAME</p>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="book-card">
                <img src="book_image_url" alt="Book Cover">
                <h3>BOOK NAME</h3>
                <p>AUTHOR NAME</p>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="book-card">
                <img src="book_image_url" alt="Book Cover">
                <h3>BOOK NAME</h3>
                <p>AUTHOR NAME</p>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
        </div>
    </main>

    <script src="js/home.js"></script>
</body>
</html>
