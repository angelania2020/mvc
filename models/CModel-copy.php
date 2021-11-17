<?php

class Cmodel
{
    public function GetData()
    {
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://cdn.pixabay.com/photo/2019/09/17/18/48/computer-4484282_1280.jpg',
            'TEXT' => 'brbtrbrt',
        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site NEW',
            'DATE' => '21.10.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://cdn.pixabay.com/photo/2015/10/02/15/07/diary-968603_1280.jpg',
            'TEXT' => 'rregtrrh4',
        );
        return $arrayResult;
    }
}
