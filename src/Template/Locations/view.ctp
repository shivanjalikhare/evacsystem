<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>

<div>
    <?php echo hello ?>
</div>
<div class="related">
    <h4><?php echo ('City'); ?>
    <?php if (!empty($location->city)): ?>
    <table>
        <tr>
            <th><?php echo __('Type'); ?></th>
            <th><?php echo __('Address'); ?></th>
            
        </tr> 
        <?php foreach ($location->citys as $city): ?>
        <tr>
            <td><?php echo $marker->type; ?>
            <td><?php echo $marker->address; ?>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
