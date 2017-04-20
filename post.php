<?php 
  include 'inc/vars.php'; 
  $slug = $_REQUEST['slug'];
  $post = array_values(
    array_filter(
    $posts,
    function ($item) use($slug) {
        return $item->slug == $slug;
    }
    )
  )[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($post->title) ? $post->title : 'Not Found' ; ?></title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
          <div class="post">
            <h1 class="entry-title"><?= isset($post->title) ? $post->title : 'Not Found' ; ?></h1>
            <div class="entry-content">
              <?php readfile($post->content); ?>
            </div>
          </div>
      </div>
    </div>
</div>
</body>
</html>
