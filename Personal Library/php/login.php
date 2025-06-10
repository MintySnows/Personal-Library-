<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Personal Book Website</title>
</head>
<body>
    <header>
        <h1>Personal Book Website</h1>
        <div class="user-icon">User</div>
    </header>
    <main>
        <div class="login-container">
            <form id="loginForm">
                <label for="email">Email:</label>
                <input type="email" id="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" required>
                
                <button type="submit">Log In</button>
                <button type="button" id="signupBtn">Sign Up</button>
                <button type="button" id="cancelBtn">Cancel</button>
            </form>
        </div>
    </main>
    <script src="js/login.js"></script>
</body>
</html>
