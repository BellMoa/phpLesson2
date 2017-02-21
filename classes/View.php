<?php

/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 2/21/17
 * Time: 11:16 AM
 */
class View
{
    protected $data = [];


    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }


    public function render($template)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;
        }
        ob_start();
        include __DIR__ . '/../view/' . $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

//TODO Разобраться с интерфейсом ITERATOR
}
