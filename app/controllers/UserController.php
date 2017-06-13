<?php

/*  controlador de ejemplo */
class UserController
{
    public function actionLogin(){
        Response::render('login', []);
    }

}
