<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<title>STUDENT REGISTRATION FORM</title>
</head>
<body>
<h1>Student Registration Details</h1>
<form action="connect.php" method="post">
Registration Number:<br />
  <input type="varchar" name="registrationnumber"><br />
  First name:<br />
  <input type="text" name="firstname"><br />
  Last name:<br>
  <input type="text" name="lastname"><br />
Gender:<br />
<select name ="gender">
  <option value="male">male</option>
  <option value="female">female</option>
  
</select><br />
Course:<br />
<select name = "course">
  <option value="Computer Science">computerscience</option>
  <option value="Engineering">engineering</option>
  <option value="Medicine ">medicine</option>
  <option value="Agriculture">agriculture</option>
<option value="Education">education</option>
</select><br />
Year of Study: <br />
<select name ="year">
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd ">3rd</option>
  <option value="4th">4th</option>
<option value="5th">5th</option>
</select>  <br />
<input type="Submit" value="submit"/>
</form>
</body>
</html>