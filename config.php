<?php
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'].'/includes');

//Date 

date_default_timezone_set('America/Los_Angeles');

//Content Variables

//Project Names

$psws     = 'Paul Saffo Website';
$slcs     = 'Solano CI Interface'; // Solano Labs CI Session View
$mwcc     = 'Moovweb Control Center';
$mwdc     = 'Moovweb Developer Center';
$mwsdk    = 'Moovweb Developer Dashboard';

$slcc     = 'Solano Labs CI Product Concepts';
$libsass  = 'Libsass Logo & Website';

$moovui   = '<a href="http://moovweb.github.io/moovui/">MoovUI</a>';

//Overview Subheadings - taken from http://susanhosking.com/portfolio/


$overview_section_a = 'Challenge'; //Challenge
$overview_section_b = 'Approach'; //Solution
$overview_section_c = 'Outcome'; //Result


$overview_tab = 'Project Overview'; //Overview
$process_tab = 'Process &amp; Artifacts'; //Process

$casetitle1 = 'Selected Artifacts of the Design Process';
$casesub1   = 'Below is an incomplete selection of deliverables that were presented during the product design process.';

$overview_sidebar_heading = 'What I Did'; //What I Did

?>