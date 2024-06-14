<!doctype html>
<html>
  <head>
    <style>

      body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
        padding: 30px;
      }

      button {
        margin-top: 4px;
      }

      .histogramContainer {
        width: 300px;
        border: solid black 1px;
        height: 30px;
        margin: 2px;
      }

      .shayminColor {
        background-color: #98FB98;
      }

      .darkraiColor {
        background-color: #290916;
      }

      .announce h1 {
        font-size-adjust: .2;
      }

      .container {
        border: black 1px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-top: 50px;
        padding: 30px;
        border-radius: 20px;
        background-color: white;
      }


      #darkraiBar {
        background-color: #290916;
        width: 100%;
        width: 0%;
        height: 100%;
      }

      #shayminBar {
        background-color: #98FB98;
        width: 100%;
        width: 0%;
        height: 100%;

      }

      #marillBar {
        background-color: #2DB3FF;
        width: 0%;
        height: 100%;

      }

      #enteiBar {
        background-color: #91232A;
        width: 0%;
        height: 100%;
      }

      .chart {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .histogramTitle {
        align-self: flex-start;
      }

      #returnButton {
        margin-top: 40px;
        margin-bottom: 38.72px;
        border-radius: 10px;
        background-color: white;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 4px;
        padding-bottom: 4px;
      }

      #submissionsCount {
        margin-top: 0px;
        font-size: 12px;
      }

      #containerTitle {
        margin-bottom: 5px;
      }

    </style>
  </head>
      <?php 
      $filename = getcwd() . '/data/results.txt';
      
      $filecontents = rtrim(file_get_contents($filename));

      $data = explode("\n", $filecontents);

      // total num quiz submissions
      $numSubmissions = count($data);

      $marillCount = 0;
      $enteiCount = 0;
      $shayminCount = 0;
      $darkraiCount = 0;
      for ($i = 0; $i < $numSubmissions; $i++) {
        // echo $data[$i];

        if ($data[$i] == 'marill') {
          $marillCount++;
        } else if ($data[$i] == 'entei') {
          $enteiCount++;
        } else if ($data[$i] == 'shaymin') {
          $shayminCount++;
        } else if ($data[$i] == 'darkrai') {
          $darkraiCount++;
        }
      }
      ?>

    <div class="container">
      <h3 id="containerTitle">Histogram</h3>
      <p id="submissionsCount">total number of submissions: <?php echo $numSubmissions ?></p>
      <div class="chart">
        <p class="histogramTitle">Shaymin</p>  
        <div class="histogramContainer">
          <div id="shayminBar" style="width: <?php print $shayminCount / $numSubmissions * 100 ?>%"></div>
        </div>
        <p class="histogramTitle">Darkrai</p> 
        <div class="histogramContainer">
          <div id="darkraiBar" style="width: <?php print $darkraiCount / $numSubmissions * 100 ?>%"></div>
        </div>
        <p class="histogramTitle">Marill</p> 
        <div class="histogramContainer">
          <div id="marillBar" style="width: <?php print $marillCount / $numSubmissions * 100 ?>%"></div>
        </div>
        <p class="histogramTitle">Entei</p> 
        <div class="histogramContainer">
          <div id="enteiBar" style="width: <?php print $enteiCount / $numSubmissions * 100 ?>%"></div>
        </div>
      </div>

      <form action="index.php">
        <button id="returnButton">return to quiz</button>
      </form>
    </div>

  </body>

</html>

<!-- get cookie and use it to displays the results -->



