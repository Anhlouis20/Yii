<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

class PayController extends Controller
{
    public function payment()
    {
        $curl = curl_init();
        $url = "https://sandbox2.nganluong.vn/vietcombank-checkout/vcb/api/web/checkout/version_1_0";

        $merchant_passcode ='123456789';
        $params = [
            'function' => 'CreateOrder',
            'merchant_site_code' => $_POST['merchant_site_code'],
            'order_code' =>  $_POST['order_id'],
            'order_description' => $_POST['order_description'],
            'amount' => $_POST['price'],
            'currency' => $_POST['currency'],
            'buyer_fullname' => $_POST['buyer_fullname'],
            'buyer_email' => $_POST['buyer_email'],
            'buyer_mobile' => $_POST['buyer_mobile'],
            'buyer_address' => $_POST['buyer_address'],
            'return_url' => $_POST['return_url'],
            'cancel_url' => $_POST['cancel_url'],
            'notify_url' => $_POST['notify_url'],
            'language' => $_POST['language'],
            'version' => $_POST['version'],

        ];
//        dd($params);
        $params['checksum'] = md5($params['merchant_site_code'].'|'.$params['order_code'].'|'.$params['order_description'].'|'.$params['amount'].'|'.$params['currency'].'|'.$params['buyer_fullname'].'|'.$params['buyer_email'].'|'.$params['buyer_mobile'].'|'.$params['buyer_address'].'|'.$params['return_url'].'|'.$params['cancel_url'].'|'.$params['notify_url'].'|'.$params['language'].'|'.$merchant_passcode);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params
        ));

        $response = curl_exec($curl);

        $data = json_decode($response,true);//chuyển chuỗi
//        var_dump($data);die;
        $url=$data['result_data']['checkout_url'];//lấy url
//        dd($url);

        header("Location: {$url}");die();

//        curl_close($curl);
//        echo $response;
    }
}
