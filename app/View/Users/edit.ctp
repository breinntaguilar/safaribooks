<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>

				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.usrID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.usrID'))); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="users form">
	<?php echo $this->Form->create('User', array('type' => 'file')); ?>
		<h1><?php echo __('Edit User'); ?></h1>
		<table align='left'>
		<?php
			echo $this->Formadd->inputAdd('usrID', array('label' => 'User ID', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrEmail', array('label' => 'Email', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrPass', array('label' => 'Password', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrFname', array('label' => 'Firstname', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrLname', array('label' => 'Lastname', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrAddress1', array('label' => 'Address 1', 'size' => '75%'));
			echo $this->Formadd->inputAdd('usrAddress2', array('label' => 'Address 2', 'size' => '75%'));
			echo $this->Formadd->inputAdd('usrCity', array('label' => 'City', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrProvince', array('label' => 'Province', 'size' => '50%'));
			echo $this->Formadd->inputAdd('usrZIP', array('label' => 'ZIP', 'size' => '25%'));
			echo $this->Formadd->inputAdd('usrPhone', array('label' => 'Phone', 'size' => '25%'));
			echo $this->Formadd->inputAdd('usrSSN', array('label' => 'SSN', 'size' => '25%'));
			echo $this->Formadd->inputAdd('usrRole', array('label' => 'Role', 'size' => '15%'));
			echo $this->Formadd->inputAdd('usrStat', array('label' => 'Stat', 'size' => '15%'));
		?>
		</table>
		<tr><td colspan="3"><div class="cleaner_with_image" /></td></tr>
	            <tr>
	                <td colspan="3" align="left">
	                    <div class="submit">
	                        <hr><br>
	                        <?php echo $this->Form->submit(__('Submit'), array('div' => false)); ?>
	                    </div>
	                    <!-- <?php echo $this->Form->end(__('Submit')); ?> -->
	                </td>
	            </tr>
	<!--<?php echo $this->Form->end(__('Submit')); ?>-->
	</div>
</div>
