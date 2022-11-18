<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientsRequest;
use App\Service\ClientService;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct(private ClientService $service)
    {
    }
    public function listClients()
    {
        try {
            $clients = $this->service->listClients();

            return response()->json($clients);
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }

    public function registerClients(CreateClientsRequest $request)
    {
        try {
            $this->service->registerClients(
                $request->names,
                $request->gender,
                $request->phonenumber,
                $request->address,
                $request->gatenumber,
                $request->nationalid,
                $request->username,
                $request->password
            );

            return response()->json([
                "success" => "clients registered successfully"
            ]);
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }

    public function updateClients()
    {
        try {
            //code...
        } catch (\Exception $e) {
            //throw $th;
        }
    }
}
