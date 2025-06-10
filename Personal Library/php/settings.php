<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/settings.css">
    <title>Personal Book Website</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Personal Book Website</h1>
            <div class="user-icon">User</div>
        </header>
        <main>
            <aside>
                <nav>
                    <button>User</button>
                    <button>Library</button>
                    <button>Settings</button>
                    <button>Log Out</button>
                </nav>
            </aside>
            <section class="profile">
                <h2>Profile</h2>
                <form id="profileForm">
                    <label for="userTag">User Tag:</label>
                    <input type="text" id="userTag" name="userTag" required>
                    <label for="userName">User Name:</label>
                    <input type="text" id="userName" name="userName" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <div class="buttons">
                        <button type="submit">Save</button>
                        <button type="button" id="cancelBtn">Cancel</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
    <script src="js/settings.js"></script>
</body>
</html>
