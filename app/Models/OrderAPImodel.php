<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderAPImodel extends Model
{
    protected $apiUrl = 'http://localhost:8080/orderAPI';
    
    public function getOrderData()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->get($this->apiUrl);

        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody(), true)['dbpesanantar'];
        } else {
            return [];
        }
    }

    //  public function getOrderInsight()
    // {
    //     $table ='viewinsight';
    //     $client = \Config\Services::curlrequest();
    //     $response = $client->get($this->apiUrl);

    //     if ($response->getStatusCode() == 200) {
    //         return json_decode($response->getBody(), true)['dbpesanantar'];
    //     } else {
    //         return [];
    //     }
    // }
}
