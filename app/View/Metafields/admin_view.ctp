<div class="metafields view">
<h2><?php echo __('Metafield'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Handle'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['url_handle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published At'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['published_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($metafield['Metafield']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Metafield'), array('action' => 'edit', $metafield['Metafield']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Metafield'), array('action' => 'delete', $metafield['Metafield']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $metafield['Metafield']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Metafields'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metafield'), array('action' => 'add')); ?> </li>
	</ul>
</div>
