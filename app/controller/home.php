<?php

Class Home extends Controller
{
    function index()
    {
        $data['page_title'] = "Portfolio";
        $this->view("home", $data);
    }
 
}