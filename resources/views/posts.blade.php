<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
<?php foreach ($posts as $post) : ?>
<article>
       <a href="/posts/<?= $post-> slug; ?>">
           <h1> <?= $post->title; ?></h1>
       </a>
    <div> <?= $post->excerpt; ?></div>

    <div><br>
        <a href="/posts/<?= $post-> slug; ?>"> Read More.....</a>
    </div>

</article>

<?php endforeach; ?>



</body>

