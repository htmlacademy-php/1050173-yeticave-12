

<?php 
    require('helpers.php');

     $cat = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
     

     $announcement = 
     [
         [
             'title' => '2014 Rossignol District Snowboard',
             'category' => 'Доски и лыжи',
             'price' => '10999',
             'URL' => 'img/lot-1.jpg',
             'date' => '2021-06-01'
         ],
         [
             'title' => 'DC Ply Mens 2016/2017 Snowboard',
             'category' => 'Доски и лыжи',
             'price' => '159999',
             'URL' => 'img/lot-2.jpg',
             'date' => '2021-10-01'
         ],
         [
             'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
             'category' => 'Крепления',
             'price' => '8000',
             'URL' => 'img/lot-3.jpg',
             'date' => '2021-06-23'
         ],
         [
             'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
             'category' => 'Ботинки',
             'price' => '10999',
             'URL' => 'img/lot-4.jpg',
             'date' => '2021-07-05'
         ],
         [
             'title' => 'Куртка для сноуборда DC Mutiny Charocal',
             'category' => 'Одежда',
             'price' => '7500',
             'URL' => 'img/lot-5.jpg',
             'date' => '2021-06-29'
         ],
         [
             'title' => 'Маска Oakley Canopy',
             'category' => 'Разное',
             'price' => '5400',
             'URL' => 'img/lot-6.jpg',
             'date' => '2021-07-25'
         ],    
     ];

    $main_page = include_template('main.php' , ['category' => $cat, 'announcement' => $announcement]); 

    $layout_content = include_template('layout.php', ['content' => $main_page, 'title' => 'Главная', 'category' => $cat]);

    echo($layout_content);

?>


