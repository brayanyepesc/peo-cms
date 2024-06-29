<?php

namespace App\App\Clients\Controllers;

use App\App\Clients\Repositories\ClientRepository;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    protected $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function index()
    {
        try {
            $clients = $this->clientRepository->getAllClients();
            return view('clients.clients', compact('clients'));
        } catch (\Exception $e) {

        }
    }

    public function create()
    {
        try {
            return view('clients.create');
        } catch (\Exception $e) {
            
        }
    }

    public function store(Request $request)
    {
        try {
            $hashedPassword = Hash::make($request->password);
            $this->clientRepository->createClient([
                'b_name' => $request->b_name,
                'email' => $request->email,
                'password' => $hashedPassword,
                'pay_period' => $request->pay_period,
                'contact' => $request->contact,
                'website' => $request->website,
            ]);
            return redirect()->route('clients');
        } catch (\Exception $e) {
            return back()->withErrors('Error creating client. Please try again.');
        }
    }

    public function show(Client $client)
    {
        try {
            $client = $this->clientRepository->getClientById($client->id);
            return view('clients.show', compact('client'));
        } catch (\Exception $e) {
            
        }
    }

    public function edit(Client $client)
    {
        try {
            $client = $this->clientRepository->getClientById($client->id);
            return view('clients.edit', compact('client'));
        } catch (\Exception $e) {
            
        }
    }

    public function destroy($id)
    {
        try {
            $this->clientRepository->deleteClient($id);
            return redirect()->route('clients');
        } catch (\Exception $e) {
            return back()->withErrors('Error deleting client. Please try again.');
        }
    }

}