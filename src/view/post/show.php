<h2><?= htmlspecialchars($post->getTitle())  ?></h2>
<p>Publié le <?= $post->getCreated_at() ?></p>
<p><?= htmlspecialchars($post->getContent()) ?></p>