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
        <table align='left' border=0>   
            <?php
                echo $this->Form->create('Contact', array('url' => array('controller' => 'contacts', 'action' => 'index')));
                echo $this->Formadd->inputAdd('name', array('label' => 'Name', 'size' => '50%'));
                echo $this->Formadd->inputAdd('email', array('label' => 'Email', 'size' => '50%'));
                echo $this->Formadd->inputAdd('message', array('label' => 'Message', 'cols' => '57', 'rows' => '10', 'maxlength' => '1500'));
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
