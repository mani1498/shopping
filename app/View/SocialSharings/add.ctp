<div class="socialSharings form">
<?php echo $this->Form->create('SocialSharing'); ?>
	<fieldset>
		<legend><?php echo __('Add Social Sharing'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('sharing_url');
		echo $this->Form->input('visiting_url');
		echo $this->Form->input('publish');
		echo $this->Form->input('published_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Social Sharings'), array('action' => 'index')); ?></li>
	</ul>
</div>
