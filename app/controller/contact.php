<?php

Class Contact extends Controller
{
    function index()
    {
        $data['page_title'] = "Portfolio";
        $this->view("contact", $data);
    }
 
}