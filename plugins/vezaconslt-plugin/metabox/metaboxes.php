<?php
if (! function_exists("vezaconslt_add_metaboxes")) {
	function vezaconslt_add_metaboxes($metaboxes)
	{
		$directories_array = array(
			// 'post.php',
			// 'room.php',
			// 'event.php',
		);
		foreach ($directories_array as $dir) {
			$metaboxes[] = require_once(VEZACONSLTPLUGIN_PLUGIN_PATH . '/metabox/' . $dir);
		}
		return $metaboxes;
	}
	add_action("redux/metaboxes/vezaconslt_options/boxes", "vezaconslt_add_metaboxes");
}
