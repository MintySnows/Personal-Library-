<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/library.css">
    <title>Personal Book Website</title>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="user-icon">
            <img src="user-icon.png" alt="User">
            <span>User</span>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button id="search-button">Search</button>
        </div>
    </header>

    <!-- Sidebar Navigation -->
    <nav class="sidebar">
        <ul>
            <li>User</li>
            <li>Library</li>
            <li>Settings</li>
            <li><a href="#" id="logout">Log Out</a></li>
        </ul>
    </nav>

    <!-- Main Content Section -->
    <main>
        <div class="book-container">
            <div class="book">
                <img src="book-cover.png" alt="Book Cover">
                <h3>Book Name</h3>
                <p>Author Name</p>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="book">
                <img src="book-cover.png" alt="Book Cover">
                <h3>Book Name</h3>
                <p>Author Name</p>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="book">
                <img src="book-cover.png" alt="Book Cover">
                <h3>Book Name</h3>
                <p>Author Name</p>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
        </div>
    </main>

    <script src="js/library.js"></script>
</body>
</html>
