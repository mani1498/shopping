<div class="settings index">
	<h2><?php echo __('Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('store_name'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('currency'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_system'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('time_zone'); ?></th>
			<th><?php echo $this->Paginator->sort('enquiry_email'); ?></th>
			<th><?php echo $this->Paginator->sort('logo_name'); ?></th>
			<th><?php echo $this->Paginator->sort('logo_image'); ?></th>
			<th><?php echo $this->Paginator->sort('logo_url'); ?></th>
			<th><?php echo $this->Paginator->sort('copy_rights_text'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_from'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_zone'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_label'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_package_dimension'); ?></th>
			<th><?php echo $this->Paginator->sort('publish'); ?></th>
			<th><?php echo $this->Paginator->sort('published_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($settings as $setting): ?>
	<tr>
		<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['store_name']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['phone']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['email']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['address']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['currency']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['unit_system']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['weight']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['time_zone']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['enquiry_email']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['logo_name']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['logo_image']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['logo_url']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['copy_rights_text']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['ship_from']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['ship_zone']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['ship_label']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['ship_package_dimension']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['publish']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['published_at']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setting['Setting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setting['Setting']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $setting['Setting']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?></li>
	</ul>
</div>
