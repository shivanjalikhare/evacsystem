<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Storagelocation $storagelocation
 */
?>

<div>
    <?php echo hello ?>
</div>
<div class="related">
    <h4><?php echo ('City'); ?>
    <?php if (!empty($storagelocation->city)): ?>
    <table>
        <tr>
            <th><?php echo __('Type'); ?></th>
            <th><?php echo __('Address'); ?></th>
            
        </tr> 
        <?php foreach ($storagelocation->citys as $city): ?>
        <tr>
            <td><?php echo $storagemarker->type; ?>
            <td><?php echo $storagemarker->address; ?>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
