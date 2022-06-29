<!DOCtype HTML>
<html>
    <head>
        <title>Zuri login</title>
        <link rel="stylesheet" type="text/css" href="Zurilogin.css">
        <script src=""></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <!--HTML for the Login page-->
    <body>
    <form action="Zurihomepage.php" method="POST">
        <?php
        if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="login-design">
            <h4>Zuri</h4>
            <p>Login</p>
            <div>
             <label class="email1" for="email"><b>Email</b></label>
             <input type="email" name="email"placeholder="@mail.com" class="email" required><br><br><br>
             <label class="password1" name ="password" for="password"><b>Password</b></label>
             <input type="password" placeholder="" class="password" required><br><br>
             <button class="login"type="submit">LOGIN</button><br><br><br><br><br><br>
             <span href="Zuriupload.js" class="signup">Sign Up</span>
            </div>
            <p class="logo-image" style="background-image: url(africansetting.jpg);">
            </div>
        </div>
    </body>
</html>