<form id="category_archive_form" action="">
<fieldset><legend><h3>Browse Archives</h3></legend>

<ul><li><select name="archive_categories" onchange="window.location =
(document.forms.category_archive_form.archive_categories[document.forms.category_archive_form.archive_categories.selectedIndex].value);">

    <option value=''>by category</option>
    <?php $categories = $content->categories; foreach( $categories as $category ): ?>
    	<option value="<?php echo $category[ 'url' ]; ?>"><?php echo $category[ 'category' ] . $category[ 'count' ];
	?></option>
    <?php endforeach; ?>
</select></li></ul>
</fieldset>
</form>