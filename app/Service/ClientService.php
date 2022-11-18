<?php

namespace App\Service;

class ClientService
{
    public function listClients(): array
    {
        $clients =  [
            [
                'id' => '1',
                'name' => 'Client 1',
                'email' => 'client1@example.com',
                'created_at' => '2018-01-01 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'Client 2',
                'email' => 'client2@example.com',
                'created_at' => '2018-01-02 00:00:00',
            ]
        ];

        return $clients;
    }

    public function registerClients($names, $gender, $phonenumber, $address, $gatenumber, $nationalid, $username, $password)
    {
        
    }
}
