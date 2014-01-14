<div id="templatemo_content_left">
    <div class="templatemo_content_left_section">
        <div class="actions">
            <h1><?php echo __('Actions'); ?></h1>
            <ul>
                <li><?php echo $this->Html->link(__('List Book'), array('controller' => 'books', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Book Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Book Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Book Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Book Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
</div>

<div id="templatemo_content_right">
    <div class="books form">
        <h1>Contact Us</h1>
        <table align='center'>
        <?php
        echo $this->Form->create('Contact', array('url' => array('controller' => 'contacts', 'action' => 'contact')));
        
        echo $this->Form->input('name', array('label' => 'Name', 'size' => '75%'));
        echo $this->Form->input('email', array('label' => 'Email', 'size' => '75%'));
        echo $this->Form->input('message', array('label' => 'Message', 'cols' => '57', 'rows' => '10', 'maxlength' => '1500'));
        
        echo $this->Form->submit();
        echo $this->Form->end();
        ?>
        </table>
    </div>
</div>
