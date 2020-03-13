<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Section;
/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form ActiveForm */
$this->title = '';
?>
<div class="userupdate">
        <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'section')->dropDownList(
        ArrayHelper::map(Section::find()->all(), 'section_id', 'section_name'),['prompt' => '-- โปรดเลือกส่วนงาน -- '])?>
    
    <?= $form->field($model, 'email') ?>
   
    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::classname(), [
    'mask' => '99-9999-9999',
    'clientOptions' => [
     'removeMaskOnSubmit' => true //กรณีไม่ตอ้งการให้มันบันทึก format ลงไปดว้ยเช่น 99-9999-9999 ก็จะเป็น 9999999999
    ]
    ]) ?>
    <div class="form-group">
    <?= Html::submitButton('บันทึก', ['class' => 'btn btnprimary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    </div>

    <a class="btn btn-success" href="/yii2-advancedtest2/frontend/web/index.php?r=site%2Fuserupdate&id=<?= Yii::$app->user->identity->id;?>">แก้ไขข้อมูล</a>