<?php
/**
 * Created by PhpStorm.
 * User: mayingbing
 * Date: 16/5/10
 * Time: 09:39
 */
class IndexController extends Controller{
    public function indexAction(){

        //实例化模型
        $adminModel = new AdminModel('category');
        $cats = $adminModel->getCats();
        include CUR_VIEW_PATH . "index.html";

    }

}