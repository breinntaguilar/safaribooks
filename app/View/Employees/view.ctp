<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('EmpID'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['empID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnID'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['cmnID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpPass'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['empPass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpSSN'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['empSSN']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['empID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['empID']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['empID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Details'); ?></h3>
	<?php if (!empty($employee['EmployeeDetail'])): ?>
		<dl>
			<dt><?php echo __('CmnID'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnFname'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnFname']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnLname'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnLname']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnSuffix'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnSuffix']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnAddress'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnAddress']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnPhone'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnPhone']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnRole'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnRole']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnStat'); ?></dt>
		<dd>
	<?php echo $employee['EmployeeDetail']['cmnStat']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Employee Detail'), array('controller' => 'details', 'action' => 'edit', $employee['EmployeeDetail']['cmnID'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($employee['EmployeeReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('RevID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('EmpID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('RevDesc'); ?></th>
		<th><?php echo __('RevRating'); ?></th>
		<th><?php echo __('RevStat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['EmployeeReview'] as $employeeReview): ?>
		<tr>
			<td><?php echo $employeeReview['revID']; ?></td>
			<td><?php echo $employeeReview['cusID']; ?></td>
			<td><?php echo $employeeReview['empID']; ?></td>
			<td><?php echo $employeeReview['bkID']; ?></td>
			<td><?php echo $employeeReview['revDesc']; ?></td>
			<td><?php echo $employeeReview['revRating']; ?></td>
			<td><?php echo $employeeReview['revStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $employeeReview['revID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $employeeReview['revID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $employeeReview['revID']), null, __('Are you sure you want to delete # %s?', $employeeReview['revID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Procures'); ?></h3>
	<?php if (!empty($employee['EmployeeProcure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('PrcID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('PrcQnty'); ?></th>
		<th><?php echo __('PrcLprice'); ?></th>
		<th><?php echo __('EmpID'); ?></th>
		<th><?php echo __('PrcStat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['EmployeeProcure'] as $employeeProcure): ?>
		<tr>
			<td><?php echo $employeeProcure['prcID']; ?></td>
			<td><?php echo $employeeProcure['bkID']; ?></td>
			<td><?php echo $employeeProcure['prcQnty']; ?></td>
			<td><?php echo $employeeProcure['prcLprice']; ?></td>
			<td><?php echo $employeeProcure['empID']; ?></td>
			<td><?php echo $employeeProcure['prcStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'procures', 'action' => 'view', $employeeProcure['prcID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'procures', 'action' => 'edit', $employeeProcure['prcID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'procures', 'action' => 'delete', $employeeProcure['prcID']), null, __('Are you sure you want to delete # %s?', $employeeProcure['prcID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
