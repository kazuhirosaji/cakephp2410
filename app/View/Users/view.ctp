
<h3><?php echo $user['User']['username']. " page" ?></h3>

<h4>Posts</h4>
<table>
	<tr>
		<th>Title</th>
		<th>Last Update</th>
	</tr>
<?php foreach($posts as $post): ?>
	<tr>
		<td><?php echo $this->Html->link($post['Post']['title'], 
		array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td><?php echo h($post['Post']['modified']); ?></td>
	</tr>
<?php endforeach ?>
<?php unset($post) ?>
</table>

