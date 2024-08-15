<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Bio</title>
</head>

<body>
  <?php
    const NAME = "JAY Z";
    const DESCRIPTION = "I am Jonathan Wisdom and I am a Fullstack Developer. I am currently learning PHP on the Bincom Academy session of August 2024. As a beginner in PHP I hope to accomplish a lot using PHP and to use my skills to solve problems";
    $more_link = "https://example.com";
    $subscribe_link = "https://example.com";
  ?>

  <div class="card__container">
    <div class="card__wrapper">
      <div class="image__wrapper">
        <img src="./images/IMG_20220718_175700-1.jpg" />
      </div>
      
      <div class="description__wrapper">
        <div class="name__wrapper">
          <?php
          echo "<h1>$NAME</h1>";
          ?>
          <p>&starf;&starf;&starf;&star;&star;</p>
        </div>

        <?php
          echo "<p>$DESCRIPTION</p>";
        ?>

        <div class="btn__wrapper">
          <?php
            echo "<a href='$more_link'>Read More</a>";
            
            echo "<a href='$subscribe_link'>Subscribe</a>";
          ?>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
