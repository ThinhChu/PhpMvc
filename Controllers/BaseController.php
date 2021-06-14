<?php

class BaseController
{
    const VIEW_FOLDER_FILE = 'Views';
    const MODEL_FOLDER_FILE = 'Models';

    protected function view($viewPath, array $data = []){
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        require (self::VIEW_FOLDER_FILE.'/'.str_replace('.', '/', $viewPath).'.php');
    }

    protected function loadModel($modelPath)
    {
        require (self::MODEL_FOLDER_FILE.'/'.$modelPath.'.php');
    }
}