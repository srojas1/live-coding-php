<?php

namespace Src\helpers;

class Helpers {
	function putJson($users) {
		file_put_contents(dirname(__DIR__) . '/../scripts/clients.json', json_encode($users, JSON_PRETTY_PRINT));
	}
	public static function arraySearchI($needle, $haystack, $column) {
		return array_search($needle, array_column($haystack, $column));
	}
}