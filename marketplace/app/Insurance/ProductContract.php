<?php

namespace App\Insurance;

Interface ProductContract
{
    public function getCreateForm();

    /**
     * Return target model class name 
     *
     * @return string
     */
    public function getTarget() : string;
        
     /**
     * Return coefficients as array 
     * where key is target field and coefficient name value 
     *
     * @return array
     */
    public function getCoefficientsList() : array;
}