<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beautiful Website</title>
  <link rel="stylesheet" href="styles.css" />
  <?php include("db.php"); ?>
</head>

<body>
  <header>Website</header>

  <section>
    <h2>List of Terms</h2>
    <ul>
      <?php
      $result = mysqli_query($mysql, "SELECT * FROM `Terms`");

      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li>
          <span class="definition">
            <?php echo $row['name'] ?>:
          </span>
          <?php echo $row['definition'] ?>
        </li>
      <?php } ?>
    </ul>
  </section>

  <section>
    <h2>Image Grid</h2>
    <div class="image-grid">
      <?php
      $result = mysqli_query($mysql, "SELECT * FROM `Images`");

      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <a href="#" title="<?php echo $row['name'] ?>">
          <img src="<?php echo $row['url'] ?>" alt="Image 1" />
        </a>
      <?php } ?>
    </div>
  </section>
</body>

</html>