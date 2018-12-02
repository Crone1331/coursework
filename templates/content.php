
<div class="content">

    <?php

        $stat = get_articles($conn); // вызов функции получения данных о постах
        

    ?>
    <?php 
        foreach($stat as $staty): // перебираем массив постов
    ?>
        <div class="stat">
            <h1>
                <?=$staty['headline'] //заголовок статьи?> 
            </h1>
            <p>
                    <?=$staty['text'] //текст статьи?>
            </p>
            <p>
                <time>
                    <?=$staty['date'] //дата статьи?>
                </time>
            </p>
        </div>
    <?php
        endforeach; //заканчиваем перебирать массив постов
    ?>
</div>