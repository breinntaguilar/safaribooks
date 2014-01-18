<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['usrID'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>	
			<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>

<div id="templatemo_content_right">
<div class="users view">
	<h1><?php echo __('User'); ?></h1>
	<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
		<tr>
			
			<dt><?php echo __('User ID: '); echo h($user['User']['usrID']); ?><br><br></dt>
			
			<dt><?php echo __('User Email: '); echo h($user['User']['usrEmail']); ?><br><br></dt>
			
			<dt><?php echo __('User Password: '); echo h($user['User']['usrPass']); ?><br><br></dt>
			
			<dt><?php echo __('Firstname: '); echo h($user['User']['usrFname']); ?><br><br></dt>
			
			<dt><?php echo __('Lastname: '); echo h($user['User']['usrLname']); ?><br><br></dt>
			
			<dt><?php echo __('Address 1: '); echo h($user['User']['usrAddress1']); ?><br><br></dt>
			
			<dt><?php echo __('Address 2: '); echo h($user['User']['usrAddress2']); ?><br><br></dt>
			
			<dt><?php echo __('City: '); echo h($user['User']['usrCity']); ?><br><br></dt>
			
			<dt><?php echo __('Province: '); echo h($user['User']['usrProvince']); ?><br><br></dt>
			
			<dt><?php echo __('ZIP: '); echo h($user['User']['usrZIP']); ?><br><br></dt>
			
			<dt><?php echo __('Phone: '); echo h($user['User']['usrPhone']); ?><br><br></dt>
			
			<dt><?php echo __('SSN: '); echo h($user['User']['usrSSN']); ?><br><br></dt>
			
			<dt><?php echo __('Role: '); echo h($user['User']['usrRole']); ?><br><br></dt>
			
			<dt><?php echo __('Stat'); echo h($user['User']['usrStat']); ?><br><br></dt>
		</tr>
	</table>
</div>
