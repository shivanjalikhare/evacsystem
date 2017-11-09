<div >
    <h4><?php echo hello ?>
</div>
<div class='related'>
    <h4><?php echo __('Markers for location'); ?>
    <?php if(!empty($location->city)): ?>
    <table>
        <tr>
            <th><?php echo __('type'); ?></th>
            <th><?php echo __('city'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($location->city as $city): ?>
        <tr>
            <td><?php echo $city->city; ?> </td>
            <td class="actions">
                <?php 
        </tr>
    </table>
