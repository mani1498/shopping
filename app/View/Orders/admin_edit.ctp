<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('bill_date');
		echo $this->Form->input('required_date');
		echo $this->Form->input('shipped_date');
		echo $this->Form->input('ship_via');
		echo $this->Form->input('ship_name');
		echo $this->Form->input('ship_address');
		echo $this->Form->input('ship_phone');
		echo $this->Form->input('ship_email');
		echo $this->Form->input('order_status');
		echo $this->Form->input('payment_status');
		echo $this->Form->input('unit_price');
		echo $this->Form->input('discount');
		echo $this->Form->input('quantity');
		echo $this->Form->input('fullfilled');
		echo $this->Form->input('published_at');
		echo $this->Form->input('modified_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Order.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
