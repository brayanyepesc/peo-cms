<?php

namespace App\App\AuthClients\Controllers;

use App\App\Clients\Repositories\ClientRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthClientController extends Controller
{
    protected $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function index(Request $request)
    {
        $client = $this->clientRepository->getClientByEmail($request->email);
        if($client && Hash::check($request->password, $client->password)) {
            return response()->json([
                'message' => 'Client authenticated',
                'data' => [
                    'id' => $client->id,
                    'name' => $client->b_name,
                    'email' => $client->email,
                ],
            ]);
        } else {
            return response()->json([
                'message' => 'Client not authenticated'
            ]);
        }
    }

}