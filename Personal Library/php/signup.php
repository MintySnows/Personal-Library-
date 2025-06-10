<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Personal Book Website</title>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Personal Book Website</h1>
            <div class="user-icon">User</div>
        </div>
    </header>
    
    <main>
        <div class="signup-container">
            <h2>Sign Up</h2>
            <form id="signup-form">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Sign Up</button>
                <button type="button" id="cancel-button">Cancel</button>
            </form>
        </div>
    </main>

    <script src="js/signup.js"></script>
</body>
</html>
