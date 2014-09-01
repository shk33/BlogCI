<html>
<head>
	<title>Opciones de CRUD</title>
	<style type="text/css">
	label{
		display: block;
	}
	</style>
</head>
<body>
	<h2>Create</h2>
	<?php echo form_open('site/create'); ?>

	<p>
		<label for="title">Title</label>
		<input type="text" name="title" id="title">
	</p>
	<p>
		<label for="content">Contents</label>
		<input type="text" name="content" id="content">
	</p>
	<p>
		<input type="submit" value="Crear nuevo">
	</p>
	<?php echo form_close(); ?>
	<hr>
	<h2>Read</h2>

	<?php if (isset($records)): foreach($records as $row): ?>
		<h2><?php echo anchor("site/delete/$row->id",$row->title); ?></h2>
		<div><?php echo $row->contents; ?></div>
		<?php endforeach ?>
	<?php else : ?>
		<h3>No results</h3>
	<?php endif; ?>	

	<hr>
	<h2>Delete</h2>
	<p>To delete a post simply click on the title of the post</p>
</body>
</html>