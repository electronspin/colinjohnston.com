<?php 
$kirbyenv = env('APP_MODE');  
if ($kirbyenv != 'development'): ?>
<script src="https://cdn.usefathom.com/script.js" site="XRUIYLTW" defer></script>
<?php endif ?>