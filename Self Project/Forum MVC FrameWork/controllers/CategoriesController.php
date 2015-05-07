<?php

class CategoriesController extends BaseController {

    public function getAll(){
        $this->db= new CategoriesModel();
        $this->categories = $this->db->getAll();
        $this->renderView('',false);
    }

}