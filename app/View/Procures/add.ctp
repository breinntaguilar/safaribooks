<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Procures'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Procure Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Procure Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="procures form">
		<h1>Add Procure</h1>
		<?php echo $this->Form->create('Procure'); ?>
		<table align='left' border=0>	
			<?php
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'size' => '5%'));
				echo $this->Formadd->inputAdd('prcQnty', array('label' => 'Procure Quantity', 'size' => '5%'));
				echo $this->Formadd->inputAdd('prcLprice', array('label' => 'Procure Price', 'size' => '5%'));
				echo $this->Formadd->inputAdd('empID', array('label' => 'Employee ID', 'size' => '5%'));
				echo $this->Formadd->inputAdd('prcStat', array('label' => 'Procure Status', 'size' => '5%'));
			?>
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
		</table>
	</div>
</div>
