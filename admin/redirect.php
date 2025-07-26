

<?php
// redirect.php

// The URL of the target page
$target_url = 'https://www.linkedin.com/company/tpc-umit-sndt/redirect.php';

// Perform the redirection
header('Location: ' . $target_url);

// Ensure that no further code is executed after the redirection
exit();
?>
