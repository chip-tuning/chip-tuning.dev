<?php

namespace App\Services\Instagram;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Services\Instagram\Exception\InvalidTokenException;
use App\Services\Instagram\Exception\InvalidParameterException;

class Instagram
{
	/**
	 * Config
	 * 
	 * @var array
	 */
	private $config;

	/**
	 * Guzzle Http client
	 * 
	 * @var object
	 */
	private $client;

	/**
	 * Instagram API
	 * 
	 * @param array $config
	 */
	public function __construct(array $config) {
		$this->config = json_decode(json_encode($config), FALSE);
		$this->client = new Client(['base_uri' => $this->config->api]);
	}

	/**
	 * Check if users access token is defined
	 * 
	 * @return bool
	 */
	private function checkToken() : bool
	{
		if (empty($this->config->token))
			throw new InvalidTokenException("Error: This API requires an valid users access token.");
		
		return true;    	
	}

	/**
	 * Check if number is in provided range
	 * 
	 * @param  int $value
	 * @param  int $min
	 * @param  int $max
	 * @return bool
	 */
	private function inRange(int $value, int $min = 0, int $max =20)  : bool
	{
		if (!filter_var($value, FILTER_VALIDATE_INT, [
				'options' => [
					'min_range' => $min, 
					'max_range' => $max
				]
			]
		))
			return false;

		return true;
	}

	/**
	 * Perform get request
	 * 
	 * @param  string $endPoint
	 * @param  array  $params
	 * @return array
	 */
	protected function get(string $endPoint, array $params = []) : array
	{
		if ($this->checkToken())
			$params['access_token'] = $this->config->token;
		
		$response = $this->client->request('GET', $endPoint, [
			'headers' => [
				'Accept' => 'application/json',
			],
			'query' => $params,
		]);

		return json_decode($response->getBody(), true); 
	}

	/**
	 * Get a list of recently tagged media.
	 * 
	 * @param  string $name
	 * @param  int    $limit
	 * @return array
	 */
	public function getMediasByTag(string $name, int $limit = 20) : array
	{
		if (!$this->inRange($limit))
			throw new InvalidParameterException('Error: Maximum number of media objects are 20.');

		return $this->get("tags/{$name}/media/recent", ['count' => $limit]);
	}

}