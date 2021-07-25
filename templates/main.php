<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">

            <!--заполните этот список из массива категорий-->
            
            <?php foreach ($category as $value): ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html"><?= htmlspecialchars($value) ?></a>
            </li>
            <?php endforeach; ?>
            <!--/заполните этот список из массива категорий-->

        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>


        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
           

                            <!-- ------------------Цикл по разделению цены----------------- -->
                            <?php function separate_price($arg)
                            {
                            $round_price = ceil($arg); 

                            if($round_price >= 1000) {
                                $separate = number_format($round_price, 0, "", " ");
                                return $separate ."<b class=rub>"."</b>";
                            } else {
                                return $round_price ."<b class=rub>"."</b>";}
                            } ?>
                            <!-- ------------------/Цикл по разделению цены----------------- -->



                <!-- ------------------Подсчет оставшегося времени----------------- -->
                <?php function left_time($dte) {
                    date_default_timezone_set("Europ/Moscow");

                    $current_time = time();         //Метка времени 1
                    $target_time = strtotime($dte); //Метка времени 2
                                      
                    $difference = $target_time - $current_time; //Разница в секундах

                    $hours = floor($difference / 3600); // Вычисление часов
                    if ($hours < 10) {
                        $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
                    }
                    
                    $minutes = floor(($difference % 3600) / 60); // Вычисление минут
                    if ($minutes < 10) {
                        $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
                    }

                    return compact('hours','minutes');
      
                }?>
                <!-- ------------------Подсчет оставшегося времени----------------- -->
                


            <!--заполните этот список из массива с товарами-->
            <?php foreach ($announcement as $key => $value): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="  <?= htmlspecialchars($value['URL']) ?>  " width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category">  <?= htmlspecialchars($value['category']) ?>  </span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html">  <?= htmlspecialchars($value['title']) ?>  </a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <!-- ------------------Цикл по разделению цены----------------- -->
                            <span class="lot__cost">  <?= strip_tags( separate_price($value['price'])) ?>   </span>
                            <!-- ------------------/Цикл по разделению цены----------------- -->
                        </div>

                        <!-- ------------------Подсчет оставшегося времени----------------- -->
                        <?php $array = left_time(htmlspecialchars($value['date'])); ?>

                        <div class="lot__timer timer <?=$array['hours'] < 01 ?'timer--finishing' : "" ?>">
                            <?=($array['hours']. " : " .$array['minutes']);?>                           
                        </div>
                        <!-- ------------------Подсчет оставшегося времени----------------- -->
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
            <!--/заполните этот список из массива с товарами-->
        </ul>


    </section>