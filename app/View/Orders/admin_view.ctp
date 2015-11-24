<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['product_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['bill_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['required_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipped Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipped_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship Via'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_via']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship Address'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship Phone'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship Email'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['payment_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Price'); ?></dt>
		<dd>
			<?php echo h($order['Order']['unit_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($order['Order']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($order['Order']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullfilled'); ?></dt>
		<dd>
			<?php echo h($order['Order']['fullfilled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published At'); ?></dt>
		<dd>
			<?php echo h($order['Order']['published_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified At'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
