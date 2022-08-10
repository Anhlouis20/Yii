<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

namespace app\models;


use yii\base\Model;

   class EntryForm extends Model
{

    public $merchant_site_code;
    public $order_code;
    public $order_description;
    public $amount;
    public $currency;
    public $buyer_fullname;
    public $buyer_email;
    public $buyer_mobile;
    public $buyer_address;
    public $return_url;
    public $cancel_url;
    public $notify_url;
    public $language;
    public $version;


    public function rules()
    {
        return [

            [['merchant_site_code','order_code','order_description','amount','currency','buyer_fullname','buyer_email','buyer_mobile','buyer_address','return_url','cancel_url','notify_url','language','version'],'string'],
        ];


    }

}