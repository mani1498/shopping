<div class="productImages view">
<h2><?php echo __('Product Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productImage['ProductImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productImage['Product']['title'], array('controller' => 'products', 'action' => 'view', $productImage['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Src'); ?></dt>
		<dd>
			<?php echo h($productImage['ProductImage']['img_src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Alt'); ?></dt>
		<dd>
			<?php echo h($productImage['ProductImage']['img_alt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published At'); ?></dt>
		<dd>
			<?php echo h($productImage['ProductImage']['published_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($productImage['ProductImage']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Image'), array('action' => 'edit', $productImage['ProductImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Image'), array('action' => 'delete', $productImage['ProductImage']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productImage['ProductImage']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
