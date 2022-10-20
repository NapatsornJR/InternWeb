<?php
$controllers = array(
    'pages'=>['home', 'error'],
    'document'=>['index'],
    'announce'=>['index'],
    'login'=>['index']
);

function call($controller, $action){
    
    require_once("./controllers/" .$controller."_controller.php");
    switch($controller){
        case "pages": $controller = new PagesController();
                                    break;

        case "document": $controller = new DocumentController();
                         break;
        
        case "announce": $controller = new AnnounceController();
                         break;

        case "login": $controller = new LoginController();
                      break;
    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)){
    if(in_array($action, $controllers [$controller])){
        call($controller, $action);
    }
    else{
        call('pages', 'error');
    }
}
else{
    call('pages', 'error');
}

?>