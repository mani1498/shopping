<div class="metafields index">
	<h2><?php echo __('Metafields'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('key'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('url_handle'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('published_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($metafields as $metafield): ?>
	<tr>
		<td><?php echo h($metafield['Metafield']['id']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['key']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['title']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['description']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['url_handle']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['type']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['published_at']); ?>&nbsp;</td>
		<td><?php echo h($metafield['Metafield']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $metafield['Metafield']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $metafield['Metafield']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $metafield['Metafield']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $metafield['Metafield']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Metafield'), array('action' => 'add')); ?></li>
	</ul>
</div>
