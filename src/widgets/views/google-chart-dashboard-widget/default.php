<?php

use yii\web\View;
use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use codexten\yii\widgets\GoogleChart\widgets\GoogleChart;

/* @var $this View */
/* @var $widget DashboardWidget */

$widget = $this->context;
?>

<?php $widget = DashboardWidget::begin([
    'fetchUrl' => $widget->fetchUrl,
]) ?>

<?php $widget->beginContent('content') ?>

<?= GoogleChart::widget(['dataBinding' => 'widget.data']) ?>

<?php $widget->endContent() ?>

<?php $widget->end() ?>
