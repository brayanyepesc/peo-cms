<?php

namespace App\App\Clients\Repositories;

interface ClientInterface
{
    public function getAllClients();
    public function createClient($request);
}