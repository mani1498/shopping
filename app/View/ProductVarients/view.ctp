<div class="productVarients view">
<h2><?php echo __('Product Varient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productVarient['Product']['title'], array('controller' => 'products', 'action' => 'view', $productVarient['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List Price'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['list_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sku'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['barcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['shipping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published At'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['published_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($productVarient['ProductVarient']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Varient'), array('action' => 'edit', $productVarient['ProductVarient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Varient'), array('action' => 'delete', $productVarient['ProductVarient']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productVarient['ProductVarient']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Varients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Varient'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
