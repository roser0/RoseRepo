
<h1><?php echo $article['title']; ?></h1>
<p><?php echo $article['content']; ?></p>

<h3>Comentarios:</h3>
<?php foreach ($article['comments'] as $comment): ?>
    <p><?php echo $comment['content']; ?> (<?php echo $comment['created_at']; ?>)</p>
<?php endforeach; ?>

<form action="/public/index.php?action=add_comment" method="POST">
    <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
    <textarea name="content" required></textarea>
    <button type="submit">Añadir Comentario</button>
</form>
