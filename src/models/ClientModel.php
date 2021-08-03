<?php

namespace Src\models;

use Src\helpers\Helpers;

class ClientModel {

	private $clientData;
	private $helper;

	function __construct() {
		$this->helper = new Helpers();
		$string = file_get_contents(dirname(__DIR__) . '../scripts/clients.json');
		$this->clientData = json_decode($string, true);
	}

	public static function getClients() {
		return $this->clientData;
	}

	public function createClient($data) {
		$clients = $this->getClients();

		$data['id'] = end($clients)['id'] + 1;
		$clients[] = $data;

		$this->helper->putJson($clients);

		return $data;
	}
}