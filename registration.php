<!DOCTYPE html>
<html>
<head>
    <title>registration</title>
</head>
<body style="background-color: LightGray;">

<h1 style="text-align: center;">Mehta Family School of Data Science and Artificial Intelligence</h1><br>

<form action="" method="post" id="info">
    <div style="margin-left: 750px; font-size: 20px;"> 
      Enter your first name:
      <input type="text" name="first_name" id="first_name" required="required" value=""> 
    </div><br>
    <div style="margin-left: 750px; font-size: 20px;"> 
      Enter your last name:
      <input type="text" name="last_name" id="last_name" required="required" value=""> 
    </div><br>
    <div style="margin-left: 750px; font-size: 20px;"> 
        Select DOB:
        <select name ="Gender">
          <option value = "male" selected>MALE</option>
          <option value = "female">FEMALE</option>
        </select>
    </div><br>
    <div style="margin-left: 750px; font-size: 20px;"> 
      Enter your DOB:
      <input type="date" name="dob" id="dob" required="required" value=""> 
    </div><br>
    <div style="margin-left: 750px; font-size: 20px;"> 
      Enter your Email:
      <input type="email" name="email" id="email" required="required" value=""> 
    </div><br>
    <div style="margin-left: 750px; font-size: 20px;"> 
      Enter password:
      <input type="password" name="pass" id="pass" required="required" value=""> 
    </div><br>
    <div style="margin-left: 750px; font-size: 20px;"> 
      Confirm password:
      <input type="password" name="conf_pass" id="conf_pass" required="required" value=""> 
    </div><br>
    
	
    <p style="margin-left: 750px; font-size: 20px;"> <span text-align:center > 
      <input type="submit" value="submit"> </span> </p>
    <p style="margin-left: 750px; font-size: 20px;"> <span text-align:center > 
      <input type="reset" value="reset"> </span> </p>  
</form>

    <div2>
        <button onclick="window.location.href = 'about.php'" style="margin-left: 100px;" type="button">About Us</button><br><br>
        <button onclick="window.location.href = 'login.php'" style="margin-left: 100px;" type="button">Login</button><br><br>
    </div2>

<?php
$fp=fopen("info.csv","a") or die("Unable to open file for writting!");
$delimiter = ","; 

$first_name=$_POST['first_name'];  
$last_name=$_POST['last_name'];
$gender=$_POST['Gender'];  
$dob=$_POST['dob'];
$email=$_POST['email'];  
$pass=$_POST['pass'];
$conf_pass = $_POST['conf_pass'];

if(preg_match("/^([a-zA-Z' ]+)$/",$first_name)){
    echo "<br>";
    echo 'Valid first name given.';
}else{
    echo "<br>";
    echo 'Invalid first name given.';
}

if(preg_match("/^([a-zA-Z' ]+)$/",$last_name)){
    echo "<br>";
    echo 'Valid last name given.';
}else{
    echo "<br>";
    echo 'Invalid last name given.';
}

$name = $first_name . " " . $last_name;

$fields = array($name, $gender, $dob, $email, $pass, $conf_pass); 
fputcsv($fp, $fields, $delimiter); 

fclose($fp);



?>

</body>
</html>