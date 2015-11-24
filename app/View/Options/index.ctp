<div class="options index">
	<h2><?php echo __('Options'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('options_name'); ?></th>
			<th><?php echo $this->Paginator->sort('options_values'); ?></th>
			<th><?php echo $this->Paginator->sort('img_src'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($options as $option): ?>
	<tr>
		<td><?php echo h($option['Option']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($option['Product']['title'], array('controller' => 'products', 'action' => 'view', $option['Product']['id'])); ?>
		</td>
		<td><?php echo h($option['Option']['options_name']); ?>&nbsp;</td>
		<td><?php echo h($option['Option']['options_values']); ?>&nbsp;</td>
		<td><?php echo h($option['Option']['img_src']); ?>&nbsp;</td>
		<td><?php echo h($option['Option']['created_at']); ?>&nbsp;</td>
		<td><?php echo h($option['Option']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $option['Option']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $option['Option']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $option['Option']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $option['Option']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Option'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
