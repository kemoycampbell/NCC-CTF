<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
  <style>
    {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
}
h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
div.form-element {
    margin: 20px 0;
}
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: bold;
    background: green;
    color: white;
    border: none;
}
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
p.error {
    background: orangered;
}
  </style>
</head>
<body>
<!-- username: admin, password : l3tMEinBRUH_I_OWN_YOU!! -->
<form method="post" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username"/>
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>

</body>
</html>

<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] == 'admin' && $_POST['password']=='l3tMEinBRUH_I_OWN_YOU!!')
        {
            echo "NCC{HTML_S0urC3_C0d3_are_V1sible!}";
        } else{
            header("Location:https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            die();
        }
    } else {
        header("Location:https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            die();
    }
?>