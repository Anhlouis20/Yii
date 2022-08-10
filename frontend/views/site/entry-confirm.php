<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var \frontend\models\ContactForm $model */

use yii\helpers\Html;

?>
<p>Bạn đã nhập với những thông tin như sau:</p>

<ul>
    <li><label>merchant_site_code</label>: <?= Html::encode($model->merchant_site_code) ?></li>
    <li><label>order_code</label>: <?= Html::encode($model->order_code) ?></li>
    <li><label>order_description</label>: <?= Html::encode($model->order_description) ?></li>
    <li><label>amount</label>: <?= Html::encode($model->amount) ?></li>
    <li><label>currency</label>: <?= Html::encode($model->currency) ?></li>
    <li><label>buyer_fullname</label>: <?= Html::encode($model->buyer_fullname) ?></li>
    <li><label>buyer_email</label>: <?= Html::encode($model->buyer_email) ?></li>
    <li><label>buyer_mobile</label>: <?= Html::encode($model->buyer_mobile) ?></li>
    <li><label>buyer_address</label>: <?= Html::encode($model->buyer_address) ?></li>
    <li><label>return_url</label>: <?= Html::encode($model->return_url) ?></li>
    <li><label>cancel_url</label>: <?= Html::encode($model->cancel_url) ?></li>
    <li><label>notify_url</label>: <?= Html::encode($model->notify_url) ?></li>
    <li><label>notify_url</label>: <?= Html::encode($model->notify_url) ?></li>
    <li><label>version</label>: <?= Html::encode($model->version) ?></li>

</ul>