<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Html->link(__('Register User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="users form">
		<h1>Login</h1>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('usrEmail', array('label' => 'Email', 'size' => '25%'));
				echo $this->Formadd->inputAdd('usrPass', array('label' => 'Password', 'size' => '25%'));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Login'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
