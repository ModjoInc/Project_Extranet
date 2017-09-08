<?php
	$rooms = array_fill(0, 9, NULL);
?>
<div class="row rooms-list">
	<h3>Trouvez l'espace qui vous faut</h3>
	<?php foreach ($rooms as $key => $value) { ?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
			      <img src="holder.js/350x250" alt="...">
			      <div class="caption">
			        <h3>Salle</h3>
			        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum illo eligendi voluptatem recusandae sit aliquid eos, vel, molestiae aut.</p>
			      </div>
			    </div>
			</div>
	<?php } ?>
</div>