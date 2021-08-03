<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\controllers\Client;

class ClientTest extends TestCase {

	private $client;

	/**
	 * Setting default data
	 * @throws \Exception
	 */
	public function setUp(): void {
		parent::setUp();
		$this->client = new Client();
	}

	/** @test */
	public function getClients() {
		$results = $this->client->getClients();

		$this->assertIsArray($results);
		$this->assertIsNotObject($results);

		$this->assertEquals($results[0]['id'], 1);
	}

	public function createClient() {
		# code...
	}
}