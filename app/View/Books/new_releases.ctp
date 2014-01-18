<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books form">
<<<<<<< HEAD
		<h1>New Releases for the past 24 months!!!</h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="1" cellspacing="1" align="center">
			<tr>
				<th><?php echo $this->Paginator->sort('bkTitle', 'Book Title'); ?></th>
				<th><?php echo $this->Paginator->sort('bkAuthor', 'Author'); ?></th>
				<th><?php echo $this->Paginator->sort('bkRating', 'Rating'); ?></th>
			</tr>
=======
		<h1>New Releases</h1>
		<table align="center">
>>>>>>> c1943e0ea5ab48c36c5b0fc2e6f8e08f0e2407a1
			<?php  
		    	echo "Total records found: ".count($releases);
		    	for ($i=0; $i<count($releases); $i++) {
					echo "<br>Title: ".$releases[$i]['Book']['bkTitle'];
					echo "<br>Author: ".$releases[$i]['Book']['bkAuthor'];
					echo "<br>Rating: ".$releases[$i]['Book']['bkRating'];
		    	}
			?> 
		</table>
	</div>
</div>
