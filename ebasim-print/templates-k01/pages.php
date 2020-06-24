<?php
foreach (new DirectoryIterator(__DIR__) as $file) {
	if ($file->isFile()) {
		echo '<a href="' . $file->getFilename() . '" target="_blank">' . $file->getFilename() . "</a><br>";
	}
}
?>