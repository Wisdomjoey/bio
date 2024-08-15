<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Bio</title>
</head>

<body>
  <main>
    <div class="name__display">
      <?php
      $name = 'JAY Z';

      echo "<h1>$name</h1>";
      ?>
    </div>

    <div class="description">
      <?php
      $description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo debitis veritatis quaerat ducimus numquam ipsum, odit aspernatur ab consectetur. Enim nulla quod iste obcaecati aliquid quasi fuga non? Dolore, saepe.';

      echo "<p>$description</p>";
      ?>
    </div>
  </main>

  <aside>
    <img class="profile" src="./images/IMG_20220718_175700.jpg" alt="Profile Image">
  </aside>
</body>

</html>