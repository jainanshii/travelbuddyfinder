<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
 body {
  margin: 0;
  font-family: Arial, sans-serif;
}
#container {
  display: flex;
}
#sidebar {
  width: 200px;
  height: 100vh;
  background-color: #333;
  color: #fff;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
}
#content {
  flex: 1;
  padding: 20px;
}
#profile-img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 20px;
}
#sidebar a {
  color: #fff;
  text-decoration: none;
  padding: 10px;
  margin: 5px 0;
  text-align: center;
}
#sidebar a:hover {
  background-color: #555;
}
h1 {
  color: #333;
}
label {
  display: block;
  margin-bottom: 8px;
}
input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  box-sizing: border-box;
}
input[type="submit"] {
  background-color: #333;
  color: #fff;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #555;
}
.success {
  color: #4CAF50;
}
.error {
  color: #f44336;
}
  </style>
</head>
<body>
  <div id="container">
    <div id="sidebar">
      <a href="profile.php">Profile</a>
      <a href="Home.php">Home</a>
      <a href="destination.php">Destination</a>
      <a href="contact.php">Contact Us</a>
      <a href="logout.php">Log Out</a>
    </div><div id="content">
      <h1>Contact Us</h1>
      <form method="post" action="mailto:anshikajain4204@gmail.com">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <input type="submit" value="Submit">
      </form>
      Or simple mail us on travelbuddy@gmail.com
    </div></div>
</body>
</html>
