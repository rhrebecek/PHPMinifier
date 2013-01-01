PHPMinifier
===========

Tool for minimizing PHP script

---code
include 'PhpMinifier.php'; 

$dir_iterator = new RecursiveDirectoryIterator("path");
$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);

$files = array();
foreach ($iterator as $file) {
  if(substr($file->getPathname(), -3) === 'php') {
		$files[] = $file->getPathname();
	}
}
usort($files);

PhpMinifier::minify($files, 'minified.php'); 
/---code
