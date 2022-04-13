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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!-- username: admin, password : l3tMEinBRUH_I_OWN_YOU!! -->
<b id="flag"></b>
<form method="post" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" id="usr"/>
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" id="pass"/>
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>
<script>
    $('form').submit(function(e){
        e.preventDefault();
        let username = $('#usr').val();
        let password = $('#pass').val();
        
        
        if(username =='admin' && password =='majorFacePalm'){
            let encrypted = 'VTIxR01sbFlUbXBqYld4M1pFTkNhR050VldkaWJWWXlXbGhKWjJOSVNuQmtiVVl3V2xORmFFbFRRVXRaV0ZKMldXbzRMMUI1UWxWaFIyeDZTVWRzZWtsSGNERmpNMUZuV1ZOQ2FWbFlUbXhPYWxGbldrZFdhbUl5VW14amFUUjFUR2xDV0dGSGJHcGhRMEp1V2xjMWNHUllUV2RhUjFacVlWZFNiRnBEUWpCaFIwWXdTVWRLYUdNeVZUSk9RMEp3WTNsQ2VscFhUakZqYlZaclVIZHZTMHBwVFhoTmFtdDZUVlJuUzBOck5VUlJNM1JhVFVoV1psbFlTWHBZTVVsM1dUSjBjR0p0WkdaYVIyeDZTVk5GYUdaUmIwdERaejA5';
            
            for(let i = 0; i< 3; i++){
                encrypted = atob(encrypted);
            }
            
            $('#flag').html(encrypted);
        } else {
            alert('Ricky!!!!');
        }
    });
</script>
</body>
</html>