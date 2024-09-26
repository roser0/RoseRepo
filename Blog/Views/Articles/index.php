
<h1>Artículos</h1>
<?php foreach ($articles as $article): ?>
    <h2><?php echo $article['title']; ?></h2>
    <p><?php echo substr($article['content'], 0, 150) . '...'; ?></p>
    <a href="/public/index.php?action=article&id=<?php echo $article['id']; ?>">Leer más</a>
<?php endforeach; ?>
