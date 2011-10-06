<h2>Sitemap</h2>

<?php

echo make_list(PAI_FILEPATH_CONTENT.'/page');

function make_list($dir, $path = '', &$index = false) {
	$d = dir($dir);

	$error = pai_conf('content', 'page', 'default');
	$error_length = strlen($error);

	$html = '<ul>';
	while (false !== ($entry = $d->read())) {
		if ($entry[0] == '.' OR (!$path AND $error == substr($entry, 0, $error_length)) ) { continue; }
		
		$name = substr($entry, 0, strrpos($entry, '.'));
		if ($path AND $name == 'index') { $index = true; continue; }
		
		$html .= '<li>';

		if (is_dir($dir.'/'.$entry)) {
			$h = make_list($dir.'/'.$entry, $path.$entry.'/', $rindex);
			$html .= ($rindex ? '<a href="'.PAI_PATH.$path.$entry.'">' : '').$entry.($rindex ? '</a>' : '').'<ul>'.$h.'</ul>';
		}
		else {
			$html .= '<a href="'.PAI_PATH.$path.($name == 'index' ? '' : $name).'">'.$name.'</a>';
		}
		
		$html .= '</li>';
	}
	$html .= '</ul>';
	
	$d->close();
	
	return $html;
}


?>