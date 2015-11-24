<div class="socialSharings index">
	<h2><?php echo __('Social Sharings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('sharing_url'); ?></th>
			<th><?php echo $this->Paginator->sort('visiting_url'); ?></th>
			<th><?php echo $this->Paginator->sort('publish'); ?></th>
			<th><?php echo $this->Paginator->sort('published_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($socialSharings as $socialSharing): ?>
	<tr>
		<td><?php echo h($socialSharing['SocialSharing']['id']); ?>&nbsp;</td>
		<td><?php echo h($socialSharing['SocialSharing']['title']); ?>&nbsp;</td>
		<td><?php echo h($socialSharing['SocialSharing']['sharing_url']); ?>&nbsp;</td>
		<td><?php echo h($socialSharing['SocialSharing']['visiting_url']); ?>&nbsp;</td>
		<td><?php echo h($socialSharing['SocialSharing']['publish']); ?>&nbsp;</td>
		<td><?php echo h($socialSharing['SocialSharing']['published_at']); ?>&nbsp;</td>
		<td><?php echo h($socialSharing['SocialSharing']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $socialSharing['SocialSharing']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $socialSharing['SocialSharing']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $socialSharing['SocialSharing']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $socialSharing['SocialSharing']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Social Sharing'), array('action' => 'add')); ?></li>
	</ul>
</div>
