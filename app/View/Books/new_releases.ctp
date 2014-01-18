<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php
					if (isset($this->Session->read('Auth')['User']) && ($this->Session->read('Auth')['User']['usrRole'] === '2' || $this->Session->read('Auth')['User']['usrRole'] === '3')) {
						echo $this->Html->link(__('New Book'), array('action' => 'add'));
					}
				?></li>
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
		<h1>New Releases for the past 24 months!!!</h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" align="center">
			<?php echo "Total records found: ".count($releases)."<br>"; ?>
			<tr>
				<!-- <th><?php echo $this->Paginator->sort('bkTitle', 'Book Title'); ?></th>
				<th><?php echo $this->Paginator->sort('bkAuthor', 'Author'); ?></th>
				<th><?php echo $this->Paginator->sort('bkRating', 'Rating'); ?></th> -->
				<th>Book Title</th>
				<th>Author</th>
				<th>Published Date</th>
				<th>Rating</th>
			</tr>
				<?php 
			    	for ($i=0; $i<count($releases); $i++) {
			    		echo "<tr>";
						echo "<td>".$releases[$i]['Book']['bkTitle'];
						echo "<td>".$releases[$i]['Book']['bkAuthor'];
						echo "<td>".$releases[$i]['Book']['bkPubDate'];
						echo "<td>".$releases[$i]['Book']['bkRating'];
						echo "</tr>";
			    	}
			    	echo "<br>";
				?>
		</table>
	</div>
</div>
