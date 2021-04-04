<?php
    $url = file_get_contents('https://api.jikan.moe/v3/anime/1/episodes/1');
    $menu = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Anime Episodes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">    
            <a class="navbar-brand" href="../index.html">InfoUpdate Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="top.php">Top</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="recommendations.php">Recommendations</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="episodes.php">Episodes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pictures.php">Pictures</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="videos.php">Videos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="userupdate.php">User Update</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="forum.php">Forum</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    <hr>

    <h1 class="text-center">Anime Episodes</h1>

    <hr>

    <div class="row" id="anime-list">
        <div class="row justify-content-center">
            <?php foreach ($menu['episodes'] as $data): ?>
            <div class="card">
                <div class="col-md-12">
                <center>
                    <div class="card-body">
                        <h5 class="card-title"> Judul : <?=$data['title']?></h5>
                        <p class="card-text"> Judul Jepang : <?=$data['title_japanese']?></p>
                        <p class="card-text"> Episode : <?=$data['episode_id']?></p>
                        <p class="card-text"> Tayang pada : <?=$data['aired']?></p>
                        <button type="button" class="btn btn-link"><a href="<?=$data['video_url']?>" target="_blank" class="text-primary stretched-link"><?=$data['video_url']?></a></button>
                    </div>
                </center>
                </div>
            </div>
            <?php endforeach; ?>
        </div>           
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>
