<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Html->link(__('Edit profile'), array('action' => 'edit', $user['User']['usrID'])); ?></li>
			<?php
				if ($this->Session->read('Auth')['User']['usrID'] == $this->request->params['pass'][0]) {
					echo '<li>' . $this->Html->link(__('Edit password'), array('action' => 'edit_pass', $user['User']['usrID'])) . '</li>';
				}
				if ($user['User']['usrStat'] == 0 && $this->Session->read('Auth')['User']['usrRole'] === '1') {
					echo '<li>' . $this->Html->link(__('Deactivate account'), array('action' => 'delete', $user['User']['usrID']), null, __('Are you sure you want to deactivate the account? You will be logged out after.')) . '</li>';
					echo '<li>' . $this->Html->link(__('Add credit card'), array('controller' => 'credits', 'action' => 'add')) . '</li>';
					echo '<li>' . $this->Html->link(__('View credit cards'), array('controller' => 'credits', 'action' => 'index')) . '</li>';
					echo '<li>' . $this->Html->link(__('View books'), array('controller' => 'books', 'action' => 'index')) . '</li>';
					echo '<li>' . $this->Html->link(__('View active coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
				}
				elseif ($user['User']['usrStat'] == 0 && $user['User']['usrRole'] == 1 && $this->Session->read('Auth')['User']['usrRole'] === '2') {
					echo '<li>' . $this->Html->link(__('Deactivate account'), array('action' => 'delete', $user['User']['usrID']), null, __('Are you sure you want to deactivate the account?')) . '</li>';
				}
				elseif ($user['User']['usrStat'] == 0 && $this->Session->read('Auth')['User']['usrRole'] === '3') {
					echo '<li>' . $this->Html->link(__('Deactivate account'), array('action' => 'delete', $user['User']['usrID']), null, __('Are you sure you want to deactivate the account?')) . '</li>';
				}
				elseif ($user['User']['usrRole'] == 1 && $this->Session->read('Auth')['User']['usrRole'] === '2') {
					echo '<li>' . $this->Html->link(__('Re-activate account'), array('action' => 'readd', $user['User']['usrID']), null, __('Are you sure you want to re-activate the account?')) . '</li>';
				}
				elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
					echo '<li>' . $this->Html->link(__('Re-activate account'), array('action' => 'readd', $user['User']['usrID']), null, __('Are you sure you want to re-activate the account?')) . '</li>';
				}
			?>
		</ul>
	</div>
	<?php
		if (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
				echo '<li>' . $this->Html->link(__('Add new customer'), array('controller' => 'users', 'action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
				echo '<li>' . $this->Html->link(__('Add new book'), array('controller' => 'books', 'action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
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
	<div class="users view">
		<h1><?php echo h($user['User']['usrFname'] . ' ' . $user['User']['usrLname']); ?></h1>
		<ul>
			<?php
				if ($user['User']['usrRole'] != '1' && ($this->Session->read('Auth')['User']['usrRole'] === '2' OR $this->Session->read('Auth')['User']['usrRole'] === '3')) {
					echo '<li>' . __('User ID: ') . h($user['User']['usrID']) . '</li>';
				}
			?>
			<li><?php echo __('Email Address: ') . h($user['User']['usrEmail']); ?></li>
			<li></li>
			<li></li>
			<li><?php echo __('First Name: ') . h($user['User']['usrFname']); ?></li>
			<li><?php echo __('Last Name: ') . h($user['User']['usrLname']); ?></li>
			<li></li>
			<li></li>
			<li><?php echo __('Barangay: ') . h($user['User']['usrAddress1']); ?></li>
			<?php
				if (!empty($user['User']['usrAddress2'])) {
					echo '<li><font color="#1c1c1b">' . __('Barangay: ') . '</font>' . h($user['User']['usrAddress2']) . '</li>';
				}
			?>
			<li><?php echo __('City: ') . h($user['User']['usrCity']); ?></li>
			<li><?php echo __('Province: ') . h($user['User']['usrProvince']); ?></li>
			<li><?php echo __('ZIP Code: ') . h($user['User']['usrZIP']); ?></li>
			<li></li>
			<li></li>
			<li><?php echo __('Phone Number: ') . h($user['User']['usrPhone']); ?></li>
			<?php
				if ($user['User']['usrRole'] != '1' && ($this->Session->read('Auth')['User']['usrRole'] === '2' OR $this->Session->read('Auth')['User']['usrRole'] === '3')) {
					echo '<li>' . __('SS Number: ') . h($user['User']['usrSSN']) . '</li>';
				}
			?>
			<li></li>
			<li></li>
			<?php
				if ($this->Session->read('Auth')['User']['usrRole'] !== '1') {
					if ($this->Session->read('Auth')['User']['usrRole'] === '3') {
						echo '<li>' . __('Role: ') . ($user['User']['usrRole'] == '1' ? 'Customer' : ($user['User']['usrRole'] == '2' ? 'Employee' : 'Manager')) . '</li>';
					}
					echo '<li>' . __('User Status: ') . ($user['User']['usrStat'] == '1' ? 'Deactivated' : 'Active') . '</li>';
				}
			?>
		</ul>
	</div>
</div>
