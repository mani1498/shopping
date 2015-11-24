<div class="socialSharings view">
<h2><?php echo __('Social Sharing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sharing Url'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['sharing_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visiting Url'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['visiting_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publish'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['publish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published At'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['published_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($socialSharing['SocialSharing']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Social Sharing'), array('action' => 'edit', $socialSharing['SocialSharing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Social Sharing'), array('action' => 'delete', $socialSharing['SocialSharing']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $socialSharing['SocialSharing']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Social Sharings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Social Sharing'), array('action' => 'add')); ?> </li>
	</ul>
</div>
