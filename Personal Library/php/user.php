<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Book Website</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Personal Book Website</h1>
            <div class="user-icon">User</div>
        </header>

        <nav>
            <ul>
                <li><button onclick="showSection('user')">User</button></li>
                <li><button onclick="showSection('library')">Library</button></li>
                <li><button onclick="showSection('settings')">Settings</button></li>
            </ul>
            <button onclick="logout()">Log Out</button>
        </nav>

        <main>
            <section id="user">
                <h2>USER TAG</h2>
                <p>@Username</p>
            </section>

            <section id="library" style="display:none;">
                <h2>Recent Reads</h2>
                <div class="book">
                    <h3>BOOK NAME</h3>
                </div>
                <div class="book">
                    <h3>BOOK NAME</h3>
                </div>
                <div class="book">
                    <h3>BOOK NAME</h3>
                </div>
            </section>

            <section id="settings" style="display:none;">
                <h2>Settings</h2>
                <p>Settings content goes here.</p>
            </section>
        </main>
    </div>
    <script src="js/user.js"></script>
</body>
</html>
