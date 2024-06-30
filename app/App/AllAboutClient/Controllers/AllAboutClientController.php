<?php

namespace App\App\AllAboutClient\Controllers;

use App\App\Clients\Repositories\ClientRepository;
use App\Http\Controllers\Controller;

class AllAboutClientController extends Controller
{
    protected $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function index($client_email)
    {
        try {
            $client = $this->clientRepository->getClientByEmail($client_email);
            $employees = $client->employees;
            $clientWithoutEmployees = $client->toArray();
            unset($clientWithoutEmployees['employees']);
            return response()->json([
                'message' => 'Employees retrieved',
                'data' => [
                    "client" => $clientWithoutEmployees,
                    "employees" => $employees
                ],
            ]);
        } catch (\Exception $e) {

        }
        
    }

}