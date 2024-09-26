
<form action="/public/index.php?action=create_article" method="POST">
    <label for="title">Título:</label>
    <input type="text" name="title" required>
    <label for="content">Contenido:</label>
    <textarea name="content" required></textarea>
    <label for="category">Categoría:</label>
    <input type="text" name="category" required>
    <label for="tags">Etiquetas (separadas por comas):</label>
    <input type="text" name="tags">
    <button type="submit">Crear Artículo</button>
</form>
