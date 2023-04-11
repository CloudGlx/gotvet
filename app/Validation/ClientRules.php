<?php
namespace App\Validation;

use App\Models\ClientsModel;
use App\Models\StaffModel;

class ClientRules
{

    public function validateUser(string $str, string $fields, array $data){

        $model= new ClientsModel();
        $client=$model-> where('email', $data['email'])
                        ->first();

        if(!$client)
        return false;

        return password_verify($data['password'], $client['password']);
    }
}