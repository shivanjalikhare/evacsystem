<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>


<div class="alert alert-warning text-center" role="alert" onclick="this.classList.add('hidden');"><a href="#" class="alert-link"><?= $message ?></a></div>
