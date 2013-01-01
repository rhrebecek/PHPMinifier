<?php 
/**
 * ╭━━━╮╭╮╱╭╮╭━━━╮╱╱╱╱╭━╮╭━╮╱╱╱╱╱╱╱╱╱╭━╮
 * ┃╭━╮┃┃┃╱┃┃┃╭━╮┃╱╱╱╱┃┃╰╯┃┃╱╱╱╱╱╱╱╱╱┃╭╯
 * ┃╰━╯┃┃╰━╯┃┃╰━╯┃╱╱╱╱┃╭╮╭╮┃╭╮╭━╮╱╭╮╭╯╰╮╭╮╭━━╮╭━╮
 * ┃╭━━╯┃╭━╮┃┃╭━━╯╭━━╮┃┃┃┃┃┃┣┫┃╭╮╮┣┫╰╮╭╯┣┫┃┃━┫┃╭╯
 * ┃┃╱╱╱┃┃╱┃┃┃┃╱╱╱╰━━╯┃┃┃┃┃┃┃┃┃┃┃┃┃┃╱┃┃╱┃┃┃┃━┫┃┃
 * ╰╯╱╱╱╰╯╱╰╯╰╯╱╱╱╱╱╱╱╰╯╰╯╰╯╰╯╰╯╰╯╰╯╱╰╯╱╰╯╰━━╯╰╯
 * 
 * This file is part of the GITHUB (http://www.github.com/rhrebecek)
 *
 * Copyright (c) 2013  Radek Hřebeček (rhrebecek@gmail.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 *
 * 
 * @package PhpMinifier
 * @author Radek Hřebeček <rhrebecek@gmail.com>
 * @license New BSD License
 * @copyright 2013
 * @final
 */

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
