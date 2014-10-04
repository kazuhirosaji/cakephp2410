<p><?php var_dump($users); ?></p>
<h1>Users</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Role</th>
	</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['role']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>