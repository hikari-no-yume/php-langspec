--TEST--
PHP Spec test generated from ./expressions/source_file_inclusion/return_with_value.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

// has explicit return value, so when included, that value is returned

return 987;
--EXPECT--
