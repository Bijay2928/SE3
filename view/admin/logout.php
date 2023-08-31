<?php
session_start();//session start
session_unset();//session unset
session_destroy();//session destroy when logout
header('location:admin_home_view');//header location
 ?>