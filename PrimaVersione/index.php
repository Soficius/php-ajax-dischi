<?php
include __DIR__  . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <title>PHP-AJAX-DISC</title>
</head>

<body>
  <div>
    <!-- header -->
    <nav class="navbar navbar-expand-lg d-flex justify-content-between bg-grey">
      <div class="h-100 ">
        <img src="spotify.png" alt="" class="h-100 ">
      </div>
    </nav>
    <!-- main -->
    <section id="musics" class="container mt-5">
      <div class="row">
        <?php foreach ($discs as $disc) : ?>
          <div class="max-5 text-white mb-5" v-for="music in filteredMusic" :key="music.title">
            <div class="music-card text-center p-2 bg-grey h-100 ">
              <img src="<?php echo $disc['poster']; ?>" class="img-fluid">
              <h5 class="title"><?php echo $disc['title']; ?></h5>
              <div class="author"><?php echo $disc['author']; ?></div>
              <div class="anno"><?php echo $disc['year']; ?></div>
              <div class="genre"><?php echo $disc['genre']; ?></div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  </div>
</body>

</html>