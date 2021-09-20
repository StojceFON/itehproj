<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title></title>
        <link rel="stylesheet" href="menu.css">
    </head>

    <body>
        
        <div class="menu-bar"> 
        <ul> 
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
            <li class="a"><a href="welcome.php">Početna</a></li>
            <li><a href="kultura.html">Kultura</a></li>
            <li><a href="muzika.html">Muzika</a>
                <div class="sub-menu-muzika">
                    <ul>
                        <li>Domaća</li>
                        <li>Strana</li>
                    </ul>
                </div>
            </li>
            <li><a href="sport.html">Sport</a>
                <div class="sub-menu-sport">
                    <ul>
                        <li>Fudbal</li>
                        <li>Kosarka</li>
                        <li>Ostali</li>
                    </ul>
                </div>
            </li>
            <li><a href="https://www.ticketline.rs">Kupi karte</a></li>
            <li><a href="logout.php">Izloguj se</a></li>
        </ul>
        </div>
    </body>

</html>