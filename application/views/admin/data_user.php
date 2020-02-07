<div class="container-fluid">
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Username</th>
		</tr>

		<?php
		foreach ($user as $usr) : ?>
		<tr>
			<td><?php echo $usr->id ?></td>
			<td><?php echo $usr->nama ?></td>
			<td><?php echo $usr->username ?></td>
		</tr>


		<?php endforeach; ?>
	</table>
</div>