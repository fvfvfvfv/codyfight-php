<?php

namespace Fvfvfvfv\CodyfightClient;

use Fvfvfvfv\CodyfightClient\Enums\GameMode;
use Fvfvfvfv\CodyfightClient\Exceptions\CodyfightException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Codyfight
{
    const API_URL = 'https://game.codyfight.com/';

    private Client $client;

    public function __construct(public string $cKey)
    {
        $this->client = new Client();
    }

    public function init(GameMode $gameMode, ?string $opponent = null): Game
    {
        return $this->makeRequest(
            'post',
            ['mode' => $gameMode->value, 'opponent' => $opponent]
        );
    }

    public function check(): Game
    {
        return $this->makeRequest();
    }

    public function cast(int $skillId, int $x, int $y): Game
    {
        return $this->makeRequest('patch', [
            'skill_id' => $skillId,
            'x' => $x,
            'y' => $y,
        ]);
    }

    public function move(int $x, int $y): Game
    {
        return $this->makeRequest('put', [
            'x' => $x,
            'y' => $y
        ]);
    }

    public function surrender(): Game
    {
        return $this->makeRequest('delete');
    }

    /**
     * @throws CodyfightException
     */
    private function makeRequest(string $method = 'get', array $body = []): Game
    {
        $options['body'] = $body;
        $options['headers'] = [['Content-Type' => 'application/json']];

        if (empty($options['body']['ckey'])) {
            $options['body']['ckey'] = $this->cKey;
        }

        try {
            $response = $this->client->request($method, self::API_URL, $options);
        } catch (GuzzleException $e) {
            throw new CodyfightException($e->getMessage(), $e->getCode(), $e);
        }

        if ($response->getStatusCode() !== 200) {
            $body = json_decode($response->getBody(), true);
            throw new CodyfightException($body['message'], $body['code']);
        }

        return Game::createFromArray(json_decode($response->getBody(), true));
    }
}
