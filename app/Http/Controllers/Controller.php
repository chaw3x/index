<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function obtenerIP()
    {
        $ip = request()->ip(); // Utiliza la función helper de Laravel para obtener la IP
        return $ip;
    }
    public function ValidateRecaptcha($code) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array( 'secret' => '6Ldm8a4qAAAAAIpHthcyS7ptjA2uWPaM05LVoDQE', 'response' => $code, 'remoteip' => $_SERVER['REMOTE_ADDR'] );
        $curlConfig = array( CURLOPT_URL => $url, CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_POSTFIELDS => $data );
        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);
        $jsonResponse = json_decode($response);
        if ($jsonResponse->success === true && $jsonResponse->score>0.5) {
            return true;
        } else {
            return false;
        }
    }
}
