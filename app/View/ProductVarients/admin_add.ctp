<div class="productVarients form">
<?php echo $this->Form->create('ProductVarient'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Product Varient'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('price');
		echo $this->Form->input('list_price');
		echo $this->Form->input('sku');
		echo $this->Form->input('barcode');
		echo $this->Form->input('quantity');
		echo $this->Form->input('weight');
		echo $this->Form->input('tax');
		echo $this->Form->input('shipping');
		echo $this->Form->input('published_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Varients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
