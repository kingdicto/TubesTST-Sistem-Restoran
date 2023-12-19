<?php

namespace App\Models;

use CodeIgniter\Model;

class InsightAPImodel extends Model
{
    protected $apiUrl = 'http://localhost:8080/insightAPI';

    public function getInsightData()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->get($this->apiUrl);

        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody(), true)['dbpesanantar'];
        } else {
            return [];
        }
    }
}

