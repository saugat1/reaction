<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal react bot site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1 class="head">Reaction Bot By Nir
        </h1>
        <hr>
        <span>Block Fixed No Reaction Blocked... 😁</span>
        <hr>
    </div>
<div class="profile">
   <a href="https://m.facebook.com/technicalnir" target="_blank" title="Admin of this site">
<img src="girl.png" alt="admin of bot site" srcset=""></a>
</div>
<div class="panel">
    <div class="login">
        <h3>Login With Facebook</h3>
        <span>Enter a Valid Login Details to Activate Bot. Otherwise it won't work.</span>
        <div class="form-group"><label for="user">User Phone/Email</label>
            <br>
            <input type="text" name="user" id="user" class="user" placeholder="Enter Your Facebook Phone Number/Email">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <br>
            <input type="password" name="pass" id="pass" class="pass" placeholder="Enter Your Facebook Password">
        </div>
    </div>
    <div class="token">
        <br>
        <hr />
        <h3 style="padding: 10px 0;">Enter Your Token Here</h3>
        <div class="form-group">
            <label for="token"></label>
            <input type="text" name="token" id="token" class="token" placeholder="Paste Your token">
        </div>
    </div>
    <div class="submit">
        <label for="reaction">Choose Your Reaction Type</label><br>
        <select name="react" id="reaction">
            <option value="1">LIKE</option>
            <option value="2">LOVE</option>
            <option value="3">WOW</option>
            <option value="4">HAHA</option>
            <option value="7">SAD</option>
            <option value="8">ANGRY</option>
        </select><br><br>
        <button id="activate" title="Activate Bot">Activate Bot</button>
    </div>

</div>
<div class="footer" style="margin-top: 20px;">
    Bot Users : 1 <br>
👍 Developed by  <a href="https://m.facebook.com/technicalnir" target="_blank" title="Developer of this Bot">
    Nir Rana Magar
    </a> &nbsp; 😍
</div>
<script src="./jquery.js"></script>
<script src="./app.js"></script>
</body>
</html>
