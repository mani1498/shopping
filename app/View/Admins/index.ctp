  <div class="cont-container">
                <div class="panel panel-default">
                   <p class="commenthead"><strong> Actions </strong></p>
                   <?php if(!isset($nouser)){ ?>
                   <div class="commenttab">
                    <p><a href="admins/unassigned_chats">View Unassigned chats</a></p>
                    <p><a href="admins/my_chats">View my assigned chats</a></p>
                   </div>
                   <?php } else { ?>
                    <div class="commenttab">
                    <p><?php echo $nouser; ?></p>
                   </div>
                   <?php } ?>
                </div>
        </div>
   