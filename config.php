<?php
//define constants used later
!defined('SITE_ROOT')?define('SITE_ROOT',$_SERVER['DOCUMENT_ROOT']):NULL;
!defined('LIB_PATH')?define('LIB_PATH',SITE_ROOT.'/includes/'):NULL;
!defined('HOST')?define('HOST','localhost'):NULL;
!defined('USER')?define('USER','root'):NULL;
!defined('PASS')?define('PASS',''):NULL;
!defined('DB')?define('DB',''):NULL;
!defined('READABLE_LOG_FILE')?define('READABLE_LOG_FILE',LIB_PATH."log_readable"):NULL;
!defined('ADMIN_LOGIN_PAGE')?define('ADMIN_LOGIN_PAGE',"/admin/index.php"):NULL;
!defined('UPLOAD_DIR')?define('UPLOAD_DIR',"../pictures/"):NULL;
