<?php 
$kirbyenv = env('APP_MODE');  
$fathom_id = env('FATHOM_ID');
if ($kirbyenv === 'production'): ?>
<script src="https://invisible-ninja.colinjohnston.com/script.js" data-site="<?php echo $fathom_id; ?>" defer></script>
<?php endif ?>