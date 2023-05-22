<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ManufacturesController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function create() {
        $manufacturerArr = [
            [
                'brand' => 'brand 1',
                'country' => 'country 1',
                'phone' => '=380661234567',
                'email' => 'mail.1@email.com',
            ],
            [
                'brand' => 'brand 2',
                'country' => 'country 2',
                'phone' => '=380664567123',
                'email' => 'mail.2@email.com',
            ],
            [
                'brand' => 'brand 3',
                'country' => 'country 3',
                'phone' => '=380662948516',
                'email' => 'mail.3@email.com',
            ],
        ];
        foreach ($manufacturerArr as $item) {
            Manufacturer::create($item);
        }
    }

}
