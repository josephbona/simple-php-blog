<?php include 'inc/vars.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Static PHP Blog ;)</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php foreach ($posts as $post) :  ?>
          <div class="post">
            <h1 class="entry-title"><a href="<?= get_slug($post->slug); ?>"><?= $post->title; ?></a></h1>
            <div class="entry-content">
              <?php readfile($post->content); ?>
              <a href="<?= get_slug($post->slug); ?>" class="btn btn-primary">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>
</body>
</html>
