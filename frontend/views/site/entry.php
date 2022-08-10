<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var \frontend\models\ContactForm $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'merchant_site_code')->textInput(['Placeholder' => 'Mã kết nối...']); ?>
<?= $form->field($model, 'order_code')->textInput(['Placeholder' => 'Mã đơn hàng...']); ?>
<?= $form->field($model, 'order_description')->textInput(['Placeholder' => 'Thêm mô tả...']); ?>
<?= $form->field($model, 'amount')->textInput(['Placeholder' => 'Tổng số tiền của đơn hàng (>= 20000)...']); ?>
<?= $form->field($model, 'currency')->textInput(['Placeholder' => 'Loại điền tệ (VND)...']); ?>
<?= $form->field($model, 'buyer_fullname')->textInput(['Placeholder' => 'Họ tên người mua...']); ?>
<?= $form->field($model, 'buyer_email')->textInput(['Placeholder' => 'Email người mua...']); ?>
<?= $form->field($model, 'buyer_mobile')->textInput(['Placeholder' => 'Số điện thoại người mua...']); ?>
<?= $form->field($model, 'buyer_address')->textInput(['Placeholder' => 'Địa chỉ người mua...']); ?>
<?= $form->field($model, 'return_url')->textInput(['Placeholder' => 'Đường link thanh toán thành công...']); ?>
<?= $form->field($model, 'cancel_url')->textInput(['Placeholder' => 'Link hủy thanh toán, khi người dùng bấm vào nút hủy thanh toán...']); ?>
<?= $form->field($model, 'notify_url')->textInput(['Placeholder' => 'Link nhận kết quả trả về (server to server), sau khi thanh toán thành công...']); ?>
<?= $form->field($model, 'language')->textInput(['Placeholder' => 'Ngôn ngữ hiển thị (mặc định là vi)...']); ?>
<?= $form->field($model, 'version')->textInput(['Placeholder' => '1.0...']); ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>