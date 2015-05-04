<?php
/**
 * Created by PhpStorm.
 * User: S.KoeH
 * Date: 04-05-15
 * Time: 11:43 AM
 */

abstract class BaseController {

    protected $controllerName;
    protected $actionName;
    protected $layoutName = DEFAULT_LAYOUT;
    protected $isViewRendered = false;
    protected $isPost = false;

    function __construct($controllerName, $actionName) {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
       // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     //       $this->isPost = true;
     //   }
    }

    public function  index (){
       // echo "IndexView";
    }

    public function renderView($viewName = null, $includeLayout = true) {
        if (!$this->isViewRendered) {
            if ($viewName == null) {
                $viewName = $this->actionName;
            }
            $viewFileName = 'views/' . $this->controllerName
                . '/' . $viewName . '.php';
            $this->isViewRendered = true;

            include_once($viewFileName);
        }
    }
}