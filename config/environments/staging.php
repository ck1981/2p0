<?php
/* Staging */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
define('DISALLOW_FILE_MODS', true); // this disables all file modifications including updates and update notifications

define('WP_DEBUG', true); //added to try find reason for site not loading after deploy to remote droplet
