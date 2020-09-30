<?php 
$kirbyenv = env('APP_MODE');  
$fathom_id = env('FATHOM_ID');
if ($kirbyenv === 'production'): ?>
<script src="https://cdn.usefathom.com/script.js" site="<?php echo $fathom_id; ?>" defer></script>
<?php endif ?>