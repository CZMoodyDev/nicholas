<?php get_header(); ?>

<article>
	<img src="<?= $post->image; ?>" alt="<?= $post->title; ?>">
	
	<h1><?= $post->title; ?></h1>	
	<p class="lead">Posted on <?= date('jS F Y', $post->date); ?> • Filed under <?= display_tag_list($post->tags); ?>

	<?= $post->body; ?>
</article>

<?php get_footer(); ?>