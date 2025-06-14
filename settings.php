<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
 
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
  align-items: center;
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
  margin-left: 460px;
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


.sideba {
  width: 200px;
  padding: 20px;
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  overflow: hidden; 
  z-index: 10;
  background-color: #fef0cc;
}


.profile-section {
  text-align: center;
  border: radius 50%; ;
  border: #333;
  margin-left: 40px;
}

.profile h2 {
  margin-left: 38%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  font-weight:400;
  color: #333;

}

.user-img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 10px;
  margin-top: 60px;
  margin-left: 0px;
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


.main-content {
  margin-left: 200px; 
  flex-grow: 1;
  height: 100vh;
  overflow-y: auto;
  padding: 20px;
  background-color: #fffdf7;
}

input {
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  background-color: #ffe4ab;
  font-size: 16px;
  width: 50%;
  margin-left: 25%;
}

/* Top Bar */
.topbar {
  background-color: #ffe4ab;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}

.logo-section {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo {
  width: 30px;
  height: 30px;
}

.user-section {
  display: flex;
  align-items: center;
  gap: 10px;
}

.top-avatar {
  width: 50px;
  height: 30px;
  border-radius: 50%;
}

/* Layout */
.container {
  display: flex;
  height: calc(100vh - 50px);
}

/* Sidebar */
.sidebar {
  width: 180px;
  background-color: #fff5dc;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px 10px;
  justify-content: space-between;
  border-right: 1px solid #eee;
}

.sidebar-profile {
  text-align: center;
}

.profile-image img {
  width: 110px;
  height: 120px;
  background-size: 60%;
  border-radius: 50%;
  border: 4px solid black;
  margin-left: 140px;
  margin-top: 10px;
  margin-bottom: 5px;

}

.profile-image p{
  margin-left: 150px;
}

.large {
  width: 100px;
  height: 100px;
  margin-bottom: 10px;
}

.sidebar-menu {
  display: flex;
  flex-direction: column;
  gap: 90px;
}

.logout {
  background-color: #ffe4ab;
}

/* Main Content */
.main-content {
  flex: 1;
  padding: 40px;
}

.profile-section {
  display: flex;
  gap: 40px;
}

.profile-image {
  text-align: center;
}

.profile-form {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.profile-form label {
  display: flex;
  flex-direction: column;
  font-weight: bold;
  font-size: 18px;
  margin-right: 340px;
}

.buttons {
  display: flex;
  gap: 90px;
  margin-top: 40px;
  margin-left: 38%;
}


#weh {

  padding: 10px 30px;
  border: none;
  border-radius: 20px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  background-color: rgba(128, 58, 0, 0.722);
  color: white;
  border: 1.7px solid;
  border-color: rgb(255, 255, 255);

}


#huh {
  padding: 8px 30px;
  border: none;
  border-radius: 20px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  background-color: rgba(128, 58, 0, 0.722);
  color: white;
  border: 1.7px solid;
  border-color: rgb(255, 255, 255);

}

.profile-form label{
  display: block;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 20px;
  color: #984e4e;
  margin: 5px px;
  margin-top: 0px;
  margin-left: 40px;
}

.profile-form input{
  margin-right: 30px;
  transition: all 0.3s ease;
}


#usertag, #username, #email{
    background-color: #fff1cd;
    margin-left: 40px;
    margin-right: 40px;
    width: 250px;
    padding: 8px;
    padding-left: 21px;
}
    </style>
</head>
<body>
 
  <header class="header">
    <div class="logo-bar">
      <div class="logo-left">
        <img src="img/book.png" alt="Logo" class="logo-img" />
        <h1>Personal Book Website</h1>
      </div>
      <div class="topuser">
        <span>Settings</span>
        <img src="img/github_logo.png" alt="User Icon" class="user-small-img" />
      </div>
    </div>
  </header>

<div class="container">
  <aside class="sidebar">
    <div class="profile-section">
      <img src="img/profile.jpg" alt="User Icon" class="user-img" />
      </div>
      <div class="profile">
        <h2>Settings</h2>
      </div>
             

    <div class="nav-buttons">
      <div class="main-buttons">
        <button>User</button>
        <button>Library</button>
        <button>Settings</button>
      </div>
      <button class="logout">Log Out</button>
    </div> 
</aside>
<main class="main-content">
      <br><br>
      <div class="profile-section">
        <div class="profile-image">
          <div>
            <img src="img/profile.jpg" alt="">
          </div>
          <p>Profile</p>
        </div>

        <form class="profile-form">
          <br>
          <label>
            User Tag:
            <input type="text" id="usertag" placeholder="User Tag" required>
          </label>
          <label>
            User Name:
            <input type="text" id="username" placeholder="Username" required>
          </label>
          <label>
            Email:
            <input type="email" id="email" placeholder="Email" required>
          </label>
        </form>
      </div>

      <div class="buttons">
        <button type="submit" id="weh">Save</button>
        <button type="button" id="huh">Cancel</button>
    </div>




    </main>
</div> 
</body>
</html>