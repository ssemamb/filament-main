<?php
echo "PHP Version: " . phpversion() . "\n";
echo "Extensions directory: " . ini_get('extension_dir') . "\n";

if (extension_loaded('intl')) {
    echo "intl extension is loaded!\n";
} else {
    echo "intl extension is NOT loaded\n";
}

// Check if the DLL exists
$ext_dir = ini_get('extension_dir');
$intl_file = $ext_dir . DIRECTORY_SEPARATOR . 'php_intl.dll';
echo "Looking for: " . $intl_file . "\n";
echo "File exists: " . (file_exists($intl_file) ? 'YES' : 'NO') . "\n";
?>