
<!DOCTYPE html>
<html>
<head>
<title>Welcome to my world</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
  color: white;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* for images */
.main_block {
    
    }

.main_block: before, .main_block: after {
    overflow: hidden;
    content: "";
    display: table;
}

.main_block: after {
    clear: both;
}

.inner_block {
    display: inline-block;
    float: left;
    width: 40%;
}

.inner_block img {
   
    
    vertical-align: middle;
}

</style>
</head>

<body>

<h1 align="center">Hello World</h1>
<marquee scrollamount="5">
<i>Welocome to my world!!!</i>
</marquee>
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn" href="index.php">Home  
    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="#">Profile</a>
      <a href="#">View</a>
    </div>
  </div> 
  <a href="#news">News</a>
  <a href="#about">About</a>
</div>

<div class="main_block" style="overflow: hidden; display: flex; justify-content:space-around;">

    <div class="inner_block">
        <img src="image/pexels-photo.jpg" height="150"> 
    </div>
    <div class="inner_block">
        <img src="image/1.jpg" height="150">
    </div>  
    <div class="inner_block">
        <img src="image/3.jpg" height="150">
    </div>   
    <div class="inner_block">
        <img src="image/2.jpg" height="150">
    </div> 
      <div class="inner_block">
        <img src="image/4.jpg" height="150">
    </div> 
      <div class="inner_block">
        <img src="image/5.jpg" height="150">
    </div> 
      <div class="inner_block">
        <img src="image/6.jpg" height="150">
    </div>  
</div>
</body>
</html>
