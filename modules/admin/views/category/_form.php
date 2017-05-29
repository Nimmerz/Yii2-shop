<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-category-parent_id has-success">
        <label class="control-label" for="category-parent_id">Parent category</label>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]">
            <option value="0">Independent category</option>
            <?= \app\components\MenuWidget::widget(['tpl' => 'select', 'model' => $model]); ?>
        </select>

        <div class="help-block"></div>
    </div>
    <div class="form-group field-category-name required">
        <label class="control-label" for="category-name">Название</label>
        <input type="text" id="category-name" class="form-control" name="Category[name]" value="Sportswear"
               maxlength="255" aria-required="true">

        <div class="help-block"></div>
    </div>


    <?php echo $form->field($model, 'parent_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
