<?php
file_exists('../main.inc.php') or die('System Error');

// Disable sessions for the API. API should be considered stateless and
// shouldn't chew up database records to store sessions
if (!function_exists('noop')) { function noop() {} }
session_set_save_handler('noop','noop','noop','noop','noop','noop');
define('DISABLE_SESSION', true);

require_once('../main.inc.php');
require_once(INCLUDE_DIR.'class.api.php');
require_once(INCLUDE_DIR.'class.topic.php');


$x = new Topic();
echo json_encode($x->getHelpTopics(true));
?>