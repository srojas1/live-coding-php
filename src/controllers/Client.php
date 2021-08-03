<?php

namespace Src\controllers;

use Src\helpers\Helpers;
use Src\models\ClientModel;

class Client {

	private function getClientModel(): ClientModel {
		return new ClientModel();
	}

	public function getClients() {
		return $this->getClientModel()->getClients();
	}

	public function createClient($client) {
		return $this->getClientModel()->createClient($client);
	}
}