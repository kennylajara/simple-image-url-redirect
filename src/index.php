<?php

	define('PERMANENT', filter_var(getenv('PERMANENT'), FILTER_VALIDATE_BOOLEAN));
	define('URL', getenv('URL'));

	if (filter_var(URL, FILTER_VALIDATE_URL)) {
		if (PERMANENT)
			header("HTTP/1.1 301 Moved Permanently");
		header('Location: ' . URL);
	} else {
		echo 'Invalid URL or not defined.';
	}
