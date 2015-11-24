<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bill_date'); ?></th>
			<th><?php echo $this->Paginator->sort('required_date'); ?></th>
			<th><?php echo $this->Paginator->sort('shipped_date'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_via'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_name'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_address'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_email'); ?></th>
			<th><?php echo $this->Paginator->sort('order_status'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_status'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_price'); ?></th>
			<th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('fullfilled'); ?></th>
			<th><?php echo $this->Paginator->sort('published_at'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['product_id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['bill_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['required_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipped_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_via']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_address']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_phone']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_email']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_status']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['payment_status']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['unit_price']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['discount']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['fullfilled']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['published_at']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
	</ul>
</div>
