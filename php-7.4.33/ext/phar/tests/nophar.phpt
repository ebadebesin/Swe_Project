--TEST--
Phar: phar run without ext/phar with default stub
--SKIPIF--
<?php if (extension_loaded("phar")) die("skip Phar extension must be disabled for this test"); ?>
--FILE--
<?php
include __DIR__ . '/files/nophar.phar';
?>
===DONE===
--EXPECT--
in b
<?php include "b/c.php";
in d
===DONE===
