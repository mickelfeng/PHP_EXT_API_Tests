--TEST--
Test extension API
--FILE--
<?php
var_dump(check_latest_api('eapi_test', 100, 120));
var_dump(check_latest_api('eapi_test', 2000000000, 1999999999));
var_dump(check_latest_api('easpi_test', 100, 120));
var_dump(check_latest_api('eapi_tst', 100, 120));
 ?>
--EXPECT--
int(220)
int(0)
string(13) "Not available"
string(13) "Not available"
