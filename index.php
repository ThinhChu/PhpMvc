<?php
    require "./Controllers/BaseController.php";
    require "./Core/Database.php";
    require "./Models/BaseModel.php";

    $controllername = ucfirst(strtolower((($_REQUEST['controller']) ?? 'Home').'Controller'));
    $actionName = ucfirst(strtolower(($_REQUEST['action'] ?? 'index')));
    require "./Controllers/${controllername}.php";

    $objectController = new $controllername;
    $objectController->$actionName();