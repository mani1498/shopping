<div id="myslidemenu" class="jqueryslidemenu">
<ul>
	<?php 
		$class = $this->params['controller']=='dashboard' ? 'active' : 'normal';
		echo '<li class="'.$class.'"><div class="icon"></div><div class="arrow"></div>'.$this->Html->link('Dashboard', array('controller' => 'dashboard','action' => 'index')).'</li>';
		$class = $this->params['controller']=='adminusers' && $this->params['action']!='admin_changepassword' && $this->params['action']!='admin_profile' ? 'active' : 'normal';
		echo '<li class="'.$class.'">'.$this->Html->link('Admin Users', array('controller' => 'adminusers','action' => 'index'));
			echo '<ul>';
				echo '<li>'.$this->Html->link('All Admin Users', array('controller' => 'adminusers','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Add New Admin', array('controller' => 'adminusers','action' => 'add')).'</li>';
				echo '<li>'.$this->Html->link('Trash Admin Users', array('controller' => 'adminusers','action' => 'trash')).'</li>';
			echo '</ul>';
		echo '</li>';
				
		$class = $this->params['controller']=='staticpages' || $this->params['controller']=='articles' || $this->params['controller']=='testimonials' || $this->params['controller']=='campaigns' || $this->params['controller']=='refrences' || $this->params['controller']=='blogs' || $this->params['controller']=='features'? 'active' : 'normal';
		echo '<li class="'.$class.'">'.$this->Html->link('CMS', array('controller' => 'staticpages','action' => 'index'));
			echo '<ul>';
				//echo '<li>'.$this->Html->link('Banners', array('controller' => 'slides','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Campaigns', array('controller' => 'campaigns','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Articles', array('controller' => 'articles','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Refrences', array('controller' => 'refrences','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Static Pages', array('controller' => 'staticpages','action' => 'index')).'</li>';
				//echo '<li>'.$this->Html->link('Testimonials', array('controller' => 'testimonials','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Blogs', array('controller' => 'blogs','action' => 'index')).'</li>';
				//echo '<li>'.$this->Html->link('Footer Logo', array('controller' => 'logos','action' => 'index')).'</li>';
			echo '</ul>';
		echo '</li>';
				
		$class = $this->params['controller']=='questionanswers' || $this->params['controller']=='consultations' || $this->params['controller']=='proposals' || $this->params['controller']=='job' ? 'active' : 'normal';
		echo '<li class="'.$class.'">'.$this->Html->link('Management', array('controller' => 'questionanswers','action' => 'index'));
			echo '<ul>';
				//echo '<li>'.$this->Html->link('Contact Us', array('controller' => 'contactus','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Question Answer', array('controller' => 'questionanswers','action' => 'index')).'</li>';
			echo '</ul>';
		echo '</li>';
		
		$class = $this->params['controller']=='settings' || $this->params['action']=='admin_changepassword' || $this->params['action']=='admin_profile' ? 'active' : 'normal';
		echo '<li class="'.$class.'">'.$this->Html->link('Settings', array('controller' => 'adminusers','action' => 'profile'));
			echo '<ul>';
				echo '<li>'.$this->Html->link('General Settings', array('controller' => 'settings','action' => 'index/1/en')).'</li>';
				echo '<li>'.$this->Html->link('Mailchimp Settings', array('controller' => 'settings','action' => 'mailchimp')).'</li>';
				echo '<li>'.$this->Html->link('Change Profile', array('controller' => 'adminusers','action' => 'profile')).'</li>';
				echo '<li>'.$this->Html->link('Change Password', array('controller' => 'adminusers','action' => 'changepassword')).'</li>';
			echo '</ul>';
		echo '</li>';
		
		$class =  $this->params['controller']=='discussions' || $this->params['controller']=='discats' ? 'active' : 'normal';
		echo '<li class="'.$class.'">'.$this->Html->link('Forum', array('controller' => 'discats','action' => 'index'));
			echo '<ul>';
				echo '<li>'.$this->Html->link('Forum Category', array('controller' => 'discats','action' => 'index')).'</li>';
				echo '<li>'.$this->Html->link('Forun List', array('controller' => 'discussions','action' => 'index')).'</li>';
			echo '</ul>';
		echo '</li>';
		
		//echo '<li class="'.$class.'"><div class="icon"></div><div class="arrow"></div><a class="chat" rel="'.$adminuser['Adminuser']['aid'].'">Live Chat old</a></li>';
		
		//$class =  $this->params['controller']=='admins' ? 'active' : 'normal';
		//echo '<li class="'.$class.'" style="cursor:pointer;" ><div class="icon"></div><div class="arrow"></div><a class="chat1" rel="'.$adminuser['Adminuser']['aid'].'">Live Chat</a></li>';
	?>
    </ul>
</div>