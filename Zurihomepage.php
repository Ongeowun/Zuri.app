<!DOCTYPE html>
<html>
    <head>
        <title>zuri app</title>
        <link rel="stylesheet" type="text/css" href="zuri.css">
        <script src=""></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p class="Logo-name">Zuri App</p>
     <!-- This is the side bar menu-->
     <div class="sidebar">
     <nav>
         <ul>
            <a href="settime" class="set-timer">Set timer</a>
            <a href="Settings" class="setting">Settings</a>
            <a href="#" class="About-zuri">About Zuri</a>
            <a href="Logout.php" class="logout">Logout</a>
         </ul>
     </nav>
    </div>
  <!-- Glassmorphism -->

    <div class="glassmorphism">
        <h4>Welcome to Zuri</h4>
        <p>Please drop your apps here</p>
        <input class="uploadfile" onclick="uploadFile()" type="file" name="uploadfile">
        <input class="downloadfile" onclick="downloadFile()" type="file" name="downloadfile">
    </div>
    <footer>@steven</footer>
          <!-- Javascript for the file upload -->

  <script>
        function uploadFile() {
        let formData = new FormData(); 
        formData.append("file", fileupload.file[0]);
        await fetch('/zuriupload.php', {
        method: "POST", 
         body: formData
          }); 
          alert('Your App has been frozen succesfully.');
          }
  </script>
    </body> 
</html>
<?php
