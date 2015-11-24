<div class="menu">
  <div class="mainmenu">
    <div class="menuleft">
      <ul class="menuH decor1" style="width1:92%">
            
       <?php 	$host = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
					$url = explode(BASE_URL, $host.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
					$url = explode('/',$url[1]);
					if(!empty($staticpages)){
					foreach($staticpages as $staticpage){
						if($staticpage['Staticpage']['link']!='sblogs' && $staticpage['Staticpage']['link']!='sdiscussion'){
						if($staticpage['Staticpage']['parent']==0){
							foreach($staticpages as $subpage){
								if($url[0]==$subpage['Staticpage']['link'] && $staticpage['Staticpage']['sid']==$subpage['Staticpage']['parent']) $sclass ='1';
								if($staticpage['Staticpage']['sid']==$subpage['Staticpage']['parent'])
								{
									$ptyp=$subpage['Staticpage']['ptype']=='menu' ? 'href="#"' : 'href="'.BASE_URL.$subpage['Staticpage']['link'].'"';
									
									if(!empty($subpage['Staticpage']['title'])) $subpage=$subpage; 
										   else {
											   $subpage = Classregistry::init('Staticpage')->find(array('status'=>'Active','sid !='=>$subpage['Staticpage']['sid'],'link'=>$subpage['Staticpage']['link']),'','');
											   			   	   }
									
									$submenu[] = '<li class="active"><a  id="dsaf1" '.$ptyp.'>'.$subpage['Staticpage']['name'].'</a>';
									$substaticpages = Classregistry::init('Staticpage')->findAll(array('status'=>'Active','lan'=>$this->Session->read('Config.language'),'parent'=>$subpage['Staticpage']['sid']),'','position ASC');
									if(!empty($substaticpages)) {
										$submenu[]='<ul class="newmenuH childmenu">';
										foreach($substaticpages as $substaticpageslist){ 
										if(!empty($substaticpageslist['Staticpage']['title'])) $substaticpageslist=$substaticpageslist; 
										   else {
											   $substaticpageslist = Classregistry::init('Staticpage')->find(array('status'=>'Active','sid !='=>$substaticpageslist['Staticpage']['sid'],'link'=>$substaticpageslist['Staticpage']['link']),'','');
										   }
										   
											$submenu[] = '<li class="childchild"><a class="arrow"  id=" dsaf2"  href="'.BASE_URL.$substaticpageslist['Staticpage']['link'].'">'.$substaticpageslist['Staticpage']['name'].'</a></li>';
										}
										$submenu[]='</ul>';
									}
									$submenu[]='</li>';
								}
							}
							$class = $url[0]==$staticpage['Staticpage']['link'] || isset($sclass) || ( $url[0]=='' && '.'==$staticpage['Staticpage']['link']) ? 'class="active menu"' : 'class="menu"';
							// $actpage = Classregistry::init('Staticpage')->find(array('status'=>'Active','link'=>$url[0]),'','');
							if(isset($submenu)){
								//$class = $url[0]==$staticpage['Staticpage']['link'] || isset($sclass) || ( $url[0]=='' && '.'==$staticpage['Staticpage']['link']) ? 'class="submenus active"' : 'class="submenus"';
								$actpage = Classregistry::init('Staticpage')->find(array('status'=>'Active','link'=>$url[0]),'','');
								if(!empty($actpage))
								$class = $actpage['Staticpage']['parent']==$staticpage['Staticpage']['sid'] || isset($sclass) || ( $url[0]=='' && '.'==$staticpage['Staticpage']['link']) ? 'class="submenus active"' : 'class="submenus"';
								else
								$class='';
								
								echo '<li><a  id=" dsaf3"  href="#" '.$class.'>'.$staticpage['Staticpage']['name'].'</a><ul  class="12 newmenuH">'.implode('',$submenu).'</ul></li>';
								unset($submenu);
								unset($sclass);
							}
							else	{	
							/*if(!empty($staticpage['Staticpage']['title'])) $staticpage=$staticpage; 
										   else {
											   $staticpage = Classregistry::init('Staticpage')->find(array('status'=>'Active','sid !='=>$staticpage['Staticpage']['sid'],'link'=>$staticpage['Staticpage']['link']),'','');
										   }*/
											
								echo '<li><a href="'.BASE_URL.$staticpage['Staticpage']['link'].'" '.$class.'>'.$staticpage['Staticpage']['name'].'</a></li>';
							}
						}}
					}
					
				} else echo 'No Menus';
				
				
				
					?>
      
      
     
      </ul>
      <?php $class1 = $this->params['controller']=='blogs' || $this->params['controller']=='discussions' ? 'class="submenus active"' : 'class="submenus"';
					echo '<ul class="menuH decor1" style="width1:8%"><li><a href="#" '.$class1.' >'.__('MORE').'</a><ul  class="newmenuH ">
                <li><a href="'.BASE_URL.'sdiscussion" >'.$forumtitle['Staticpage']['title'].'</a></li>
                <li><a href="'.BASE_URL.'sblogs" >'.$blogtitle['Staticpage']['title'].'</a></li>
            </ul>
        </li> </ul>'; ?>
    </div>
    
    </div>
  </div>
  
  