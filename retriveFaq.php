<?php
function retriveFaq($theLang, $lang){
    foreach ($theLang as $couple) :?>
            <?php if($_GET['lang'] == $lang) :?>
            <div class='faq'>
            <div class='theQuestion'><?=$couple['domanda']?></div>
                <div class=all-asks>
                <?php foreach ($couple['risposta'] as $ask):?>
                    <div class="theAsk"><?=$ask;?></div>
                <?php endforeach ?>
                </div>
            </div>
            <?php endif ?>
        <?php endforeach;
    return null;
};
?>