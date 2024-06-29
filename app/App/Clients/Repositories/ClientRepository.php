<?php

namespace App\App\Clients\Repositories;

use App\Models\Client;

class ClientRepository implements ClientInterface
{
    protected $client;

    public function __construct(
            Client $client,
        )
    {
        $this->client = $client;
    }

    public function getAllClients()
    {
        return $this->client->all();
    }

    public function createClient($request)
    {
        return $this->client->create($request);
    }

    public function getClientById($id)
    {
        return $this->client->find($id);
    }

    public function deleteClient($id)
    {
        return $this->client->where('id', $id)->delete();
    }

}