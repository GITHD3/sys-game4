<?php
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<link rel="stylesheet" type="text/css" href="engine1/style.css" />

<body>
    <div class="container main">
        <div class="A">
            <h4 class="heading pt-2" style="font-family: 'Press Start 2P'; font-size: 22px; color: black;">
                <strong>Welcome to <br>ParaCrash Game Store</strong>
            </h4>
        </div>
        <div class="B">
            <div class="row row-cols-2 g-3">
                <div class="col card-body">
                    <div class="card mb-3 bcard" style="max-width: 650px;">
                        <h6 class="card-title cardtitle2 text-center">Most Played Game</h6>
                        <div class="row g-2">
                            <div class="col imgcards">
                                <img src="img 2/Fortnite.webp" class="img-fluid" />
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Fortnite</h5>
                                    <p class="card-text">
                                        <small class="text-muted">Battle Royale: A player-versus-player game for up to
                                            100 players, allowing solo,
                                            duo, or squad play.</small>
                                    </p>
                                    <pre>Action , Battle-Royale</pre>
                                    <p class="card-text">
                                    <form class="formbutton" method="POST" action="seppage.php">
                                        <input type="hidden" value="Fortnite" name="gameName">
                                        <button type="submit" class="btn">Buy</button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hrtag">
        <hr id="hrtag">
    </div>
    <div class="c">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <div class="container w-1000">
            <div class="section Flipcards">
                <header class="p-2 text-center">
                    <h2>Latest Games</h2>
                </header>
                <div class="row pl-3 pr-3 rowcards">
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Call Of Duty Modern Warfare.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Call Of Duty Modern Warfare</h5>
                                    <p class="position text-muted">Action Game </p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Prepare for Unstoppable Action in Modern Warfare - Where Combatants Evolve to Conquer
                                    the Dynamic and Evolving Battlefield!</p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="Call Of Duty Modern Warfare" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Grand Theft Auto V.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Grand Theft Auto V</h5>
                                    <p class="position text-muted">Action-Adventure Game </p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Grand Theft Auto V: Unleash Your Inner Outlaw in this Thrilling Action-Adventure!
                                    Embrace the Freedom of the Open World and Dive into Epic Missions!
                                </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="Grand Theft Auto V" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Ghostwire Tokyo.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Ghostwire Tokyo</h5>
                                    <p class="position text-muted">Action Game </p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Unleash the Magic Within - Ghostwire: Tokyo, an Action-Adventure Thrill Ride! Embrace
                                    Your Psychic Abilities, Defeat Haunting Spirits, and Upgrade Your Powers in the
                                    Mystical Streets of Tokyo!
                                </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="Ghostwire Tokyo" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Wolfenstein New Order.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Wolfenstein New Order</h5>
                                    <p class="position text-muted">Action Game </p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Unleash the Resistance in Wolfenstein: The New Order - Embark on an Epic
                                    First-Person Journey through Two Timelines. Your Choices Shape the Story,
                                    Characters, and Destiny!
                                </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="Wolfenstein New Order" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Cyberpunk2077.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Cyberpunk2077</h5>
                                    <p class="position text-muted">Action Open-World Game </p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Embrace the Future in Cyberpunk 2077 - Venture into Night City's Dark Megalopolis,
                                    Where Power, Glamor, and Body Modification Collide in an Open-World RPG Adventure!
                                </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="Cyberpunk2077" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Resident Evil 2.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Resident Evil 2</h5>
                                    <p class="position text-muted">Survival Horror Game</p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Escape the zombie-infested Raccoon City and unravel the dark secrets in this
                                    reimagined survival horror, controlling both Leon S. Kennedy and Claire Redfield.
                                </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="Resident Evil 2" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/DayZ.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">DayZ</h5>
                                    <p class="position text-muted">Action, Adventure, Massively Multiplayer</p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>DAYZ: Survive the unforgiving post-Soviet wasteland of Chernarus, where death is
                                    permanent, and your choices shape your destiny. </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="DayZ" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="i pt-2">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="img/Assassins Creed Odyssey.webp" alt="#" class="img-responsive pt-2">
                                <div class="info pt-2">
                                    <h5 class="name">Assassins Creed Odyssey</h5>
                                    <p class="position text-muted">Action Role-Play Game</p>
                                </div>
                            </div>
                            <div class="more pt-1">
                                <p>Embark on an epic odyssey as either Alexios or Kassandra, Greek mercenaries with
                                    royal Spartan blood, in the action-packed role-playing adventure of Assassin's Creed
                                    Odyssey. </p>
                                <form class="formbutton text-center pb-5" method="POST" action="seppage.php">
                                    <input type="hidden" value="DayZ" name="gameName">
                                    <button type="submit" class="btn">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
    <div class="hrtag">
        <hr id="hrtag">
    </div>


    <div class="container main">
        <h4>Top Action Games</h4>
        <hr class="hrtag2">
        <div class="row p-1 g-4">
    <?php 
    try {
        $dsn = "mysql:host=localhost;dbname=game4";
        $username = "root";
        $password = "";

        $dbconn = new PDO($dsn, $username, $password);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Perform the SQL query using PDO
        $sql = "SELECT * FROM games WHERE genre_name LIKE '%Action%' LIMIT 4";
        $result = $dbconn->query($sql);

        // Loop through the results and generate the HTML
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col">';
            echo '<div class="card smallcards" style="width: 13rem;">';
            echo '<img class="card-img-top imgsmallcard" style="height: 13rem;" src="img/' . $row['gamename'] . '.webp">';
            echo '<div class="card-body bodysmallcard pt-0">';
            echo '<p class="card-text">' . $row['gamename'] . '</p>';
            echo '<form class="formbutton formbutton2 text-center pb-1" method="POST" action="seppage.php">';
            echo '<input type="hidden" value="' . $row['gamename'] . '" name="gameName">';
            echo '<button type="submit" class="btn">Buy</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        // Close the database connection (not needed for PDO)
        // mysqli_close($connection);
    } catch (Exception $e) {
        echo "<pre><center>Sorry Can't Load Now</center></pre>";
    }
    ?>
</div>


         
        </div>

    <div class="hrtag">
        <hr id="hrtag">
    </div>

    <div class="container main">
        <h4>Top Racing Games</h4>
        <hr class="hrtag2">
        <div class="row p-1 g-4">
    <?php 
    try {
        $dsn = "mysql:host=localhost;dbname=game4";
        $username = "root";
        $password = "";

        $dbconn = new PDO($dsn, $username, $password);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Perform the SQL query using PDO
        $sql = "SELECT * FROM games WHERE genre_name LIKE '%Racing%' LIMIT 4";
        $result = $dbconn->query($sql);

        // Loop through the results and generate the HTML
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col">';
            echo '<div class="card smallcards" style="width: 13rem;">';
            echo '<img class="card-img-top imgsmallcard" style="height: 13rem;" src="img/' . $row['gamename'] . '.webp">';
            echo '<div class="card-body bodysmallcard pt-0">';
            echo '<p class="card-text">' . $row['gamename'] . '</p>';
            echo '<form class="formbutton formbutton2 text-center pb-1" method="POST" action="seppage.php">';
            echo '<input type="hidden" value="' . $row['gamename'] . '" name="gameName">';
            echo '<button type="submit" class="btn">Buy</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        // Close the database connection (not needed for PDO)
        // mysqli_close($connection);
    } catch (Exception $e) {
        echo "<pre><center>Sorry Can't Load Now</center></pre>";
    }
    ?>
</div>


         
        </div>

</body>

</html>
<style>
    .imgsmallcard {
        border-radius: 7px;
    }

    .formbutton2 {
        margin-top: auto;
        padding: 0;
        padding-bottom: 3px;
    }

    .bodysmallcard {
        text-align: center;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 0;
        border-radius: 12px;
        font-weight: bold;
        transition: 0.2s;
    }
    .bodysmallcard:hover{

    }

    .smallcards {
        background-color: transparent;
        outline: 2px solid beige; 
        border-radius: 3px;
        color: whitesmoke;
        border: none;
        overflow:hidden;
        height: 320px;
        transition: 0.4s;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
   
    .smallcards:hover {
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        background-color: rgba(255, 255, 255, 0.28);
    }
    
    .smallcards:hover .imgsmallcard{
        transform: scale(1.06);
  transition: transform 0.3s ease;
  transform-origin: center center;
        backface-visibility:hidden;
        z-index: 1000;
        position:relative;

    }

    .hrtag2 {
        margin: 30px auto;
        max-width: 300px;
        border-top: 2px solid #333;
    }

    .rowcards {
        display: flex;
        justify-content: space-between;
    }

    .img-responsive {
        max-width: 90%;
        height: 100%;
        border-radius: 5px;
    }

    .Flipcards {
        padding-bottom: 25px;
        background-color: rgba(173, 216, 230, 0.28);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        height: 100%;
    }

    .Flipcards h2 {
        color: #fff;
        margin: 0 0 30px 0;
    }

    .position {
        font-size: 10px;
    }

    @media (max-width:500px) {
        .i {
            height: 400px;
            width: 230px;
            align-self: center;
            padding: 0;
        }

        .more {
            font-size: 12px;
            padding: 2px;

        }

        .rowcards {
            justify-content: center;
        }
    }

    .i {
        max-width: 270px;
        height: 400px;
    }

    .Flipcards .i .c {
        background: #fff;
        -webkit-box-shadow: 0 4px 0 #2b86ac;
        -moz-box-shadow: 0 4px 0 #2b86ac;
        box-shadow: 0 4px 0 #2b86ac;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        position: relative;
        overflow: hidden;
        padding-bottom: 110px;
    }

    .Flipcards .i .c .wrap {
        position: relative;
    }

    .Flipcards .i .c .wrap img {
        width: 100%;
        height: 250px;
        /* Set your desired fixed height for the images */
        object-fit: cover;
        /* Ensures the image covers the entire container */
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        transition: all 0.3s ease;
    }

    .Flipcards .i .c .wrap .info {
        padding: 10px 0;
        position: absolute;
        top: 100%;
        width: 100%;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
    }

    .Flipcards .i .c .wrap .info .name {
        margin: 0;
        font-size: 20px;
        padding: 1px;
        font-weight: 700;
        margin: 0 0 8px 0;
    }

    .more {
        padding-top: 2px;
        font-size: 14px;
        color: dodgerblue;
        font-weight: bold;

    }

    .Flipcards .i .c .wrap .info .position {
        margin: 0;
        font-size: 15px;
        color: #555659;
    }

    .Flipcards .i .c .more {
        position: absolute;
        bottom: -100%;
        width: 100%;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
    }

    .Flipcards .i .c .more p {
        margin: 0 18px 30px 18px;
        line-height: 22px;

    }

    .Flipcards .i .c:hover img {
        -moz-opacity: 0;
        -khtml-opacity: 0;
        -webkit-opacity: 0;
        opacity: 0;
    }

    .i:hover .c {
        transition: 0.3s;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 19px 38px, rgba(0, 0, 0, 0.33) 0px 15px 12px;

    }

    .Flipcards .i .c:hover .info {
        top: 0;
    }

    .Flipcards .i .c:hover .more {
        bottom: 0;
    }

    .hrtag {
        padding: 0 15px;
        size: 3px;
        border-radius: 10px;
    }

    .cardpotratit {
        max-width: 400px;
        border-radius: 16px;
        padding: 4px;
    }

    .card-text {
        font-size: 17px;
        padding: 1px 2px;
    }

    .formbutton {
        text-decoration: none;
        text-align: left;
    }

    .btn {
        text-align: center;
        background-color: black;
        color: beige;
        outline: 2px solid black;
        border-radius: 4px;
        transition: 0.5s;
    }

    .btn:hover {
        background-color: #33363D;
        border-radius: 7px;
        color: blanchedalmond;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    }

    .cardtitle2 {
        background-image: linear-gradient(to left, darkblue, Purple);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .bcard {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background: linear-gradient(135deg, #9D7ABD, #E1A2B7, #F4E3EE);
        background-color: rgba(255, 255, 255, 0.15) !important;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        padding: 8px;
        max-width: 400px;
    }

    .card-body {
        max-height: 500px !important;
    }

    .img-fluid {
        max-width: 100%;
        height: 100%;
        border-radius: 10px;
        padding: 5px;
    }

    .main {
        display: flex;
        background-color: none;
        justify-content: center;
        padding-top: 20px;
        gap: 10px;
        max-width: 98%;
        align-items: center;
    }

    .B {
        width: 50%;
        padding-right: 8px;
        padding-left: 8px;
        padding-bottom: 20px;
    }

    .A {
        width: 50%;
    }

    body {
        font-family: sans-serif;
        background: linear-gradient(#404ccc, slateblue);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    @media (max-width: 768px) {
        .main {
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .bcard {
            text-align: center;
            width: 300px;
            height: 450px;
            align-self: center;
        }

        .A {
            width: 100%;
            text-align: center;
        }

        .formbutton {
            text-align: center;
        }
    }
</style>
