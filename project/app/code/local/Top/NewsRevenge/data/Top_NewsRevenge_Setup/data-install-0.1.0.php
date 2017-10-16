<?php

$categories = array(
    array(
        'code' => 'SKU1',
        'name' => 'Ciao',
        'status' => true,
    ),
    array(
        'code' => 'SKU2',
        'name' => 'Ciao 2',
        'status' => false,
    )
);

$stories = array(
    array(
        'code' => 'SKU1',
        'title' => 'Ciao',
        'content' => 'Hi',
        'category_id' => 1,
        'status' => true,
    ),
    array(
        'code' => 'SKU1',
        'title' => 'Ciao',
        'content' => 'Hi',
        'category_id' => 2,
        'status' => true,
    )
);

foreach ($categories as $category) {
    Mage::getModel('top_newsrevenge/category')->setData($category)->save();
}

foreach ($stories as $story) {
    Mage::getModel('top_newsrevenge/story')->setData($story)->save();
}