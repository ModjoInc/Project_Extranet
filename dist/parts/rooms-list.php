<?php
	$rooms = array_fill(0, 9, NULL);
?>
<div class="row rooms-list">
	<h2>Trouvez l'espace qui vous faut</h2>
	<?php foreach ($rooms as $key => $value) { ?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
			      <img src="..." alt="...">
			      <div class="caption">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			</div>
	<?php } ?>
</div>