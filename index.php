<!doctype html>
<html>
<head>
    <meta name="viewpoint" content="width=device-width" ,initial-scale ="1">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    img{
        width:100%;
        height:45em;
        object-fit: cover;
        top:0;
        left:0;
        right:0;
        bottom: 0;
    }
    .bottom{
        position:absolute;
        top:75%;
        left:50%;
        transform:translate(-50%, -50%);
        color:antiquewhite;
        font-size: 85px;
        font-family:'Fascinate Inline', cursive;
    }
    .bottom1{
        position:absolute;
        top:85%;
        left:50%;
        transform:translate(-50%, -50%);
        color:cornsilk;
        font-size: 25px;
        font-family: 'Open Sans Condensed', sans-serif;
    }

    .dropdown{
        position: absolute;
        top:90%;
        left:47%;
        background: transparent;
    }
    .btn{
        background: transparent;
    }
</style>
    <body>
        <div class="bg">
            <img src="http://localhost/project/Archives.jpg">
            <div class="bottom"> ARCHIVE </div>
            <div class="bottom1">"Acharya" achivement "Archive".</div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                        <a class="dropdown-item" href="about.html">About</a>
                 </div>
            </div>
            </div>
           </div>
    </body>
    </head>
</html>