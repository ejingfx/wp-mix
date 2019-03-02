<?php

function assets_uri($subpath = '') {
	return esc_url(rtrim(get_template_directory_uri(), '/').'/assets/'.ltrim($subpath, '/'));
}
