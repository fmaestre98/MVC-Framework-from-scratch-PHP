<?php

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/autoloader.php'; 

$modelsPath = __DIR__ . '/app/models';
foreach (glob("$modelsPath/*.php") as $file) {
    require_once $file;
    $className = 'app\\models\\' . basename($file, '.php');
    if (is_subclass_of($className, 'app\\models\\Model') && property_exists($className, 'schema')) {
        $schema = $className::$schema;
        $table = strtolower(basename($className::$tableName, '.php'));
        $columns = [];
        foreach ($schema as $col => $type) {
            $columns[] = "`$col` $type";
        }
        $sql = "CREATE TABLE IF NOT EXISTS `$table` (" . implode(', ', $columns) . ")";
        $model = new $className();
        $conn = $model->get_Connection();
        $conn->query($sql);
        echo "Tabla '$table' verificada/creada.\n";
        $model->close_Connection();
    }
}