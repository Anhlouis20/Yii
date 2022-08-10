<h2>Open an Account</h2>
<?php
$form = ActiveForm::begin([
    'id' => 'live-account-form',
    'enableClientValidation' => true,
    'fieldConfig' => [
        'template' => '{input}{error}',
        'options' => [
            'tag' => false,
        ]
    ],
    'options' => [
        'class' => 'form-horizontal'
    ]
]);
?>

<div class="form-group">
    <label for="signupform-first_name" class="col-sm-3 control-label">First Name*</label>
    <div class="col-sm-9 field-signupform-first_name">
        <?= $form->field($model, 'first_name')->textInput(['placeholder' => "Enter First Name"]) ?>

    </div>
</div>

<div class="form-group">
    <label for="singupform-last_name" class="col-sm-3 control-label">Last Name*</label>
    <div class="col-sm-9 field-signupform-last_name">
        <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Enter Last Name']) ?>
    </div>
</div>

<div class="form-group">
    <label for="signupform-email" class="col-sm-3 control-label">Email*</label>
    <div class="col-sm-9 field-signupform-email">
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Enter Email Address"]) ?>
    </div>
</div>

<div class="form-group">
    <label for="signupform-country" class="col-sm-3 control-label">Country*</label>
    <div class="col-sm-9 field-signupform-country">
        <?= $form->field($model, 'country')->dropDownList(
            ArrayHelper::map(PhCountry::find()->all(), 'intid', 'country_name'),
            [
                'prompt' => 'Select Country',
                'onchange' => '$( "select#signupform-country_code" ).html("showLoading");
                                    $.get( "index.php/site/fetch-country-code?id='.'"+$(this).val(), 
                                    function(data) {
                                        $( "#signupform-country_code" ).val(data);
                                    });'
            ]
        ) ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Phone Number*</label>
    <div class="col-sm-9 phone-number-div">
        <div>
            <?= $form->field($model, 'country_code')->textInput(['placeholder' => 'Code', 'class' => 'country-code form-control']) ?>
        </div>
        <div class="field-signupform-phone">
            <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Enter Phone Number', 'class' => 'enter-phone-number form-control']) ?>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-default">Create Account</button>
<?php
ActiveForm::end();
?>