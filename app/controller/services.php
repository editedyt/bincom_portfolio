<?php

Class Services extends Controller
{
    function index()
    {
        $data['page_title'] = "Services";
        $this->view("services", $data);
    }
 
}