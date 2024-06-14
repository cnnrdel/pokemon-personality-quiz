

<!doctype html>
<html>
    <head>
        <title>Macro Assignment 7</title>
        <style>
            

            .question {
                display: flex;
                flex-direction: column;
                padding: 20px;
                width: 34%;
                border: 1px solid black;
                border-radius: 15px;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            form {
                display: flex;
                justify-context: center;
                flex-direction: column;
            }

            select {
                margin-top: 15px;
                margin-bottom: 15px;
                border-radius: 10px;
            }

            input {
                margin-top: 40px;
                margin-bottom: 40px;
                margin-left: 100px;
                margin-right: 100px;
            }

            h3 {
                /* font-size: 10px; */
            }

            input {
                border-radius: 10px;
                background-color: white;
            }

            .questionRow {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                margin: 15px;
            }

            .quizHeader {
                padding-top: 25px;
            }

            #quiz {
                border: 1px solid black;
                display: flex;
                align-items: center;
                flex-direction: column;
                margin-top: 40px;
                /* margin-bottom: 80px; */
                border-radius: 20px;
            }

            .questionText {
                font-size: 16px;
            }

            #missingInput {
                width: 100%;
                color: red;
            }


            /* INDEX RESULTS */   
            h2 {
                display: flex;
                justify-content: center;
            }

            .container {
                border: black 1px solid;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-top: 80px;
                padding: 30px;
                border-radius: 20px;
                background-color: white;
            }

            .announce h1 {
                font-size-adjust: .2;
            }

            #pokemonContainer {
                height: 250px;
                display: flex;
                justify-content: center;
                align-items: center;        
            }
            
            #darkrai {
                height: 240px;
            }

            #shaymin {
                height: 100px;
            }

            #marill {
                height: 100px;
            }

            #entei {
                height: 240px;
            }

            button {
                border-radius: 10px;
                background-color: white;
            }

            .viewButton {
                display: flex;
                justify-content: center;
                align-items: center;
                /* width: 100%; */
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: 215px;
                margin-right: 215px;
            }

            #topMargin {
                margin-top: 60px;
            }

            #bottomMargin {
                margin-bottom: 40px;
            }

        </style>
    </head>
    <body>
    <?php
        if(isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($_GET['error'] == "missing input") { ?>
                <div id="missingInput">
                    <marquee behavior="scroll" direction="left">ERROR! PLEASE SELECT AN OPTION FOR EACH FIELD! ERROR!</marquee>
                </div>
           <?php }
        }
    ?>

    <?php
        if(isset($_COOKIE['pokemon'])) { ?>
        
            <body class="">
            <div class="container">
              <div id="topSpace"></div>
              <div class="announce">
                <h1>You're Pokemon is...</h1>
                <?php
                  $pokemon = $_COOKIE['pokemon'];
                ?>
              </div>
              <div id="pokemonContainer" >
                <img id="<?php echo $pokemon; ?>" src="images/<?php echo $pokemon; ?>.gif">
              </div>
              <div class="announce">
                <h1><?php print ucfirst($pokemon);?>!</h1>
              </div>
              <div>
                <form action="clearcookie.php">
                  <button onclick="">play again</button>
                </form>        
              </div>
              <div id="bottomSpace"></div>
            </div>
        
        <?php } else { ?>
            <div id="quiz">
                <h1 class="quizHeader">Take My Quiz!</h1>
                <form action="processresults.php" method="POST">
                    <div class="questionRow">
                        <div class="question">
                            <h2 class="questionText">Pick a cluster of music genres: </h2>
                            <select name="music">
                                <option value="unknown">Select</option>
                                <option value="shaymin">Jazz, Rock, & Folk</option>
                                <option value="darkrai">Techno, House, & Trance</option>
                                <option value="marill">Eurodance, Pop, & 90s</option>
                                <option value="entei">Classical, Ambient, & Film Score</option>
                            </select>
                        </div>
                        <div class="question">
                            <h2 class="questionText">Pick your favorite atmosphere: </h2>
                            <select name="atmosphere">
                                <option value="unknown">Select</option>
                                <option value="shaymin">Sunny breezy day</option> 
                                <option value="darkrai">Quiet clear night</option>
                                <option value="marill">Tranquil rainy morning</option>
                                <option value="entei">Warm summer sunset</option>
                            </select>
                        </div>
                    </div> 
                    <div class="questionRow">
                        <div class="question">
                            <h2 class="questionText">Choose your preferred way to spend your free time:</h2>
                            <select name="pastime">
                                <option value="unknown">Select</option>
                                <option value="shaymin">Walking in a beautiful garden</option>
                                <option value="darkrai">Exploring new places</option>
                                <option value="marill">Dancing at a club</option>
                                <option value="entei">Working on something you enjoy</option>
                            </select>
                        </div>
                        <div class="question">
                            <h2 class="questionText">Pick where you'd prefer to eat:</h2>
                            <select name="dining">
                                <option value="unknown">Select</option>
                                <option value="shaymin">On a blanket in a park</option>
                                <option value="darkrai">In a special restaurant</option>
                                <option value="marill">On a boardwalk by the beach</option>
                                <option value="entei">At a cozy, candlelit dining table at home</option>
                            </select>
                        </div>
                    </div>
                    <div class="questionRow">
                        <div class="question">
                            <h2 class="questionText">Pick your preferred form of expression:</h2>
                            <select name="expression">
                                <option value="unknown">Select</option>
                                <option value="shaymin">Sewing, crafting, and decorating</option>
                                <option value="darkrai">Writing and drawing</option>
                                <option value="marill">Talking with others</option>
                                <option value="entei">Dressing up</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit">

                </form>
            </div>
            <div id="quiz">
            <form action="results.php">
                <button class="viewButton">view aggregate results</p>
            </form>
            </div>
            <div id="bottomMargin"></div>

    <?php } ?>
    

    </body>
</html>

