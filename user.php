<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Personal Book Website</title>

  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background-color: #fff;
  color: #333;
}

/* Header */
.header {
  background-color: #fce5b5;
  padding: 10px 20px;
}

.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo-left {
  display: flex;
  align-items: left;
  gap: 10px;
}

.logo-img {
  margin-left: 30px;
  width: 70px;
  height: 60px;
  border: #333;
  margin-left: 200px;
}

.logo-bar h1 {
  font-weight: 100;
  font-size: 20px;
  font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  color: #555;
  margin-left: 400px;
}


.topuser {
  display: flex;
  align-items: center;
  gap: 10px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  font-weight: bold;
}

.topuser span{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.user-small-img {
  width: 42px;
  height: 32px;
  border-radius: 50%;
}

/* Layout */

.container {
  display: flex;
  height: 100vh;
  overflow: hidden;
}

/* Sidebar */

.sidebar {
  width: 200px;
  background-color: #fef0cc;
  padding: 20px;
  position: fixed;
  top: 80px;
  left: 0;
  
  height: 100vh;
  overflow: hidden; 
  z-index: 10;
}


.profile-section {
  text-align: center;
  border: radius 50%; ;
  border: #333;
}

.user-img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 10px;
  margin-top: 60px;
  
}

.nav-buttons {
  display: flex;
  flex-direction: column;
  margin-top: 10px;
  width: 100%;
}

.nav-buttons {
  padding: 10px;
  gap: 10px;
  background-color: #fef3dc;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  font-weight: bold;
}

.main-buttons {
  display: flex;
  flex-direction: column;
  gap: 10px;
}


.nav-buttons button {
  width: 100%;
  padding: 12px;
  margin-bottom: 3px;
  margin-top: 10px;
  background-color: #ffe5a1;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  font-weight: bold;
  transition: all 0.3s ease;
}



.nav-buttons .logout {
  background-color: #f5c748;
  margin-top: 340px;
  margin-bottom: 1000px;
}

/* Main content */
.main-content {
  margin-left: 200px; 
  flex-grow: 1;
  height: 100vh;
  overflow-y: auto;
  padding: 20px;
  background-color: #fffdf7;
}

/* User Tag Section */
.user-tag-section {
  text-align: center;
  margin: 40px 0;
  padding: 20px;
}

.user-tag-title {
  font-size: 36px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
  letter-spacing: 3px;
  font-family: 'Arial', sans-serif;
}

.user-tag-username {
  font-size: 24px;
  color: #666;
  font-weight: 500;
}

/* Book container */
.top-picks {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

/* Search */
.search-section {
  display: flex;
  align-items: center;
  margin-bottom: 40px;
}

.search-bar {
  width: 100%;
  margin-left: 300px;
  max-width: 500px;
  padding: 10px 15px;
  border: 2px solid #ccc;
  border-radius: 25px;
  font-size: 16px;
}

.search-btn {
  margin-left: 10px;
  padding: 10px 20px;
  background-color: #f4d06f;
  border: none;
  border-radius: 20px;
  font-weight: bold;
  cursor: pointer;
}

/* Top Picks */
.top-picks h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.book-cards {
  margin-left: 50px;
  margin-top: 40px;
  display: flex;
  gap: 40px;
  flex-wrap: wrap;
}

.book-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.book-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}


.book-card {
  background-color: #fff7e6;
  padding: 20px;
  text-align: center;
  border-radius: 10px;
  width: 180px;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}

.book-card img {
  width: 100%;
  height: auto;
  margin-bottom: 10px;
  border-radius: 5px;
}

.book-card .author {
  font-size: 12px;
  color: #555;
}

      .header-user-name {
        display: none;
      }

  </style>
</head>
<body>
    
  <header class="header">
    <div class="logo-bar">
      <div class="logo-left">
        <img src="book.png" alt="Logo" class="logo-img" />
        <h1>Personal Book Website</h1>
      </div>
      <div class="topuser">
        <span>User</span>
        <img src="github_logo.png" alt="User Icon" class="user-small-img" />
      </div>
    </div>
  </header>
      <div class="header-user" tabindex="0" aria-label="User account info">
        <span class="header-user-name">User</span>
        <div class="header-user-icon" aria-hidden="true">
          <span class="material-icons">account_circle</span>
        </div>
<div class="container">
  <aside class="sidebar">
    <div class="profile-section">
      <img src="profile.jpg" alt="User Icon" class="user-img" />
      <p>User</p>
    </div>

    <div class="nav-buttons">
      <div class="main-buttons">
        <form method="get" action="user.html" style="display:inline;">
          <button type="submit" name="userBtn">User</button>
        </form>
        <form method="post" action="library.php" style="display:inline;">
          <button type="submit" name="libraryBtn">Library</button>
        </form>
        <form method="post" action="settings.php" style="display:inline;">
          <button type="submit" name="settingsBtn">Settings</button>
        </form>
      </div>
      <form method="post" action="logout.php">
        <button type="submit" class="logout" name="logoutBtn">Log Out</button>
      </form>
    </div>
  </aside>

    <main class="main-content">
      <section class="search-section">
        <form method="post" action="search.php" style="display:flex;">
          <input type="text" name="search" placeholder="Search..." class="search-bar" />
          <button type="submit" class="search-btn" name="searchBtn">Search</button>
        </form>
      </section>

      <!-- User Tag Section -->
      <section class="user-tag-section">
        <h1 class="user-tag-title">USER TAG</h1>
        <p class="user-tag-username">@Username</p>
      </section>

      <section class="top-picks">
        <h3>Recent Reads</h3>
        <div class="book-cards">
          <div class="book-card">
            <img src="crime-and-mystery-cover-scaled-1.jpeg" alt="Book Cover" />
            <p><strong>Fortress Blood</strong></p>
            <p class="author">L.D Goffigan</p>
          </div>
          <div class="book-card">
            <img src="OIP.jpg" alt="Book Cover" />
            <p><strong>The Fortress of Shadow</strong></p>
            <p class="author">L.D Goffigan</p>
          </div>
          <div class="book-card">
            <img src="BWISIT.jpg" alt="Book Cover" />
            <p><strong>Shade of Fae</strong></p>
            <p class="author">J.L Myers</p>
        </div>
         <div class="book-card">
            <img src="forged_blood.jpg" alt="Book Cover" />
            <p><strong>Forged in Blood</strong></p>
            <p class="author">Lindsay Buroker</p>
          </div>
          <div class="book-card">
            <img src="historical-romance-book-cover-design-ebook-kindle-amazon-sarah-edwards-defying-roger_orig.jpg" alt="Book Cover" />
            <p><strong>Defying Roger</strong></p>
            <p class="author">Sarah Edwards</p>  
          </div>
          <div class="book-card">
            <img src="crime-and-mystery-cover-scaled-1.jpeg" alt="Book Cover" />
            <p><strong>Fortress Blood</strong></p>
            <p class="author">L.D Goffigan</p>
          </div>
          <div class="book-card">
            <img src="OIP.jpg" alt="Book Cover" />
            <p><strong>The Fortress of Shadow</strong></p>
            <p class="author">L.D Goffigan</p>
          </div>
          <div class="book-card">
            <img src="BWISIT.jpg" alt="Book Cover" />
            <p><strong>Shade of Fae</strong></p>
            <p class="author">J.L Myers</p>
        </div>
         <div class="book-card">
            <img src="forged_blood.jpg" alt="Book Cover" />
            <p><strong>Forged in Blood</strong></p>
            <p class="author">Lindsay Buroker</p>
          </div>
          <div class="book-card">
            <img src="historical-romance-book-cover-design-ebook-kindle-amazon-sarah-edwards-defying-roger_orig.jpg" alt="Book Cover" />
            <p><strong>Defying Roger</strong></p>
            <p class="author">Sarah Edwards</p>  
          </div>
        </div>
      </section>
    </main>
  </div>
</div>
</body>
</html>