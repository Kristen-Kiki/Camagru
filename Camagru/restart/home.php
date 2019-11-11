<!DOCTYPE HTML>
<HTML>
    
<HEAD>
    
    <meta charset="UTF-8">
    <TITLE> WELCOME TO CAMAGRU! </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- NAV_LINKS -->
    <link rel="stylesheet" href="css/navsystem.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="css/font.css">


<!-- NAV_FUNC-->
    <script>
        function openNav()
        {
            document.getElementById('menu').style.width='250px';
            document.getElementById('opennav').style.width='250px';
        }

        function closeNav()
        {
            document.getElementById('menu').style.width='0px';
            document.getElementById('opennav').style.width='0px';
            
        }
    </script> <!-- END_NAV_FUNC -->

<!-- BG_IMG -->
    <style>
        body
        {
            background-image: url("./img/skagway.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: 100%; 
        }
    </style>

</HEAD>

<BODY>
<section> 
    <nav>
<!-- NAV_SYSTEN -->
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()" hidden> &times; </a> 
            <br>
            <a href="camera.php"> <b> Capture </b> </a> 
            <a href="#"> <b> Gallery </b> </a> 
            <a href="#"> <b> Profile </b> </a> 
            <a href="#"> <b> Account </b> </a> 
        </div>
    </nav>
</section>

<article>
    <header>
        <b> Camagru </b> 
        <h2> Let's get Schwifty! </h2>
    </header>
</article>

<footer>
  <p>@kmcgrego</p>
</footer>

</BODY>

</HTML>