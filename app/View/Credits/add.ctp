<div id="templatemo_content_left">
	<?php
		if (!isset($this->Session->read('Auth')['User']) OR $this->Session->read('Auth')['User']['usrRole'] === '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Actions') . '</h1>';
			echo '<ul>';
			echo '<li>' . $this->Html->link(__('View profile'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth')['User']['usrID'])) . '</li>';
			echo '<li>' . $this->Html->link(__('View credit cards'), array('controller' => 'credits', 'action' => 'index')) . '</li>';
			echo '<li>' . $this->Html->link(__('View books'), array('controller' => 'books', 'action' => 'index')) . '</li>';
			echo '<li>' . $this->Html->link(__('View active coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
			echo '</ul>';
			echo '</div>';
		}
		elseif (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
				echo '<li>' . $this->Html->link(__('Add new customer'), array('controller' => 'users', 'action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
				echo '<li>' . $this->Html->link(__('Add new book'), array('controller' => 'books', 'action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View book procurements'), array('controller' => 'procures', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View wishlist'), array('controller' => 'wishlists', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			echo '</ul>';
			echo '</div>';
		}
	?>
</div>

<div id="templatemo_content_right">
	<div class="credits form">
		<h1><?php echo __('Add Credit Card'); ?></h1>
		<?php echo $this->Form->create('Credit'); ?>
		<table align='center'>
			<?php
				echo $this->Form->hidden('usrID', array('value' => $this->Session->read('Auth')['User']['usrID']));
				echo $this->Formadd->inputAdd('ccBank', array(
					'label' => 'Bank Name',
					'error' => false,
					'size' => '50%',
					'id' => 'focusme'));
				echo $this->Formadd->inputAdd('ccNum', array(
					'label' => 'Card Number',
					'error' => false,
					'size' => '17%',
					'type' => 'text',
					'maxlength' => '16',
					'onkeypress' => 'return isDecKey(event)'));
				echo $this->Formadd->inputAdd('ccType', array(
						'label' => 'Card Type',
						'error' => false,
						'options' => array(
							'Visa' => 'Visa',
							'American Express' => 'American Express',
							'Discover' => 'Discover',
							'Master Card' => 'Master Card')));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Add card'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
						&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'button', 'div' => false, 'onclick' => 'clearForm(this.form)')); ?>
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
