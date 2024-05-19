<?php
return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../../common/config/main-local.php',
    require __DIR__ . '/../config/test.php',
    require __DIR__ . '/../config/test-local.php',
    require __DIR__ . '/config.php'
);
