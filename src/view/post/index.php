<h2>Tous les articles</h2>

<?php foreach($posts as $post) : ?>
    <div style="border: solid; margin: 1em">
        <h3><a href="/post/show?id=<?= $post->getId() ?>"><?= htmlspecialchars($post->getTitle()) ?></a> </h3>
        <p><?= htmlspecialchars($post->getContent()) ?></p>
    </div>
<?php endforeach; ?>

<!-- Utilisation de htmlspecialchars pour se protéger de la faille XSS. -->