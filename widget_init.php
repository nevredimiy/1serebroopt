<?php
/*
Plugin Name: Artem Widget
Plugin URI: http://www.example.com/textwidget
Description: An example plugin to demonstrate widgets API in WordPress
Version: 0.1
Author: Author Name
Author URI: http://www.example.com
License: GPL2 
 
    Copyright 2011 Author Name
 
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License,
    version 2, as published by the Free Software Foundation. 
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

 add_action("widgets_init", function () {
    register_widget("TextWidget");
});

class TextWidget extends WP_Widget
{
    public function __construct() {
        parent::__construct("text_widget", "Кнопка Каталог",
            array("description" => "Размещает кнопку, при нажатии на которую запускается загрузка каталога"));
    }





	public function form($instance) {
    $title = "";
    $text = "";
    // если instance не пустой, достанем значения
    if (!empty($instance)) {
        $title = $instance["title"];
 
    }
 
    $tableId = $this->get_field_id("title");
    $tableName = $this->get_field_name("title");
    echo '<label for="' . $tableId . '">Title</label><br>';
    echo '<input id="' . $tableId . '" type="text" name="' .
    $tableName . '" value="' . $title . '"><br>';
 
 
}


public function update($newInstance, $oldInstance) {
    $values = array();
    $values["title"] = htmlentities($newInstance["title"]);
 
    return $values;
}

public function widget($args, $instance) {
    $title = $instance["title"]; 
 
    
    echo "<a href='/регистрация' id='button_catalog'>$title</a>";    
 
}

}






?>
