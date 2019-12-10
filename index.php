<?php
if(!$_GET){
    $_GET['lang'] = 'it';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>test</title>
</head>
<body>
    <form action="" method="get" class='formsend'>
        <select name="lang" id="lang" onchange=this.form.submit()>
            <option value="it" <?=$_GET['lang'] == 'it'?'selected':""?>>Italiano</option>
            <option value="en" <?=$_GET['lang'] == 'en'?'selected':""?>>Inglese</option>
            <option value="fr" <?=$_GET['lang'] == 'fr'?'selected':""?>>Francese</option>
            <option value="es" <?=$_GET['lang'] == 'es'?'selected':""?>>Spagnolo</option>
        </select>
    </form>
    <?php
    //phpinfo();
        include('retriveFaq.php');
        $json = json_decode(file_get_contents('question.json'),true);
        $values = $json['values'];?>
        <main>
        <?php foreach ($values as $arrayLang):
        $getlang = $arrayLang['lingua'];
        retriveFaq($arrayLang['faq'], $getlang);
            /*switch ($getlang) {
            case 'it':
                retriveFaq($arrayLang['faq'], 'it');
            break;
            case 'en':
                retriveFaq($arrayLang['faq'], 'en');
            break;
            case 'fr':
                retriveFaq($arrayLang['faq'], 'fr');
            break;
            case 'es':
                retriveFaq($arrayLang['faq'], 'es');
            break;
        };*/
        endforeach ?>  
        </main>    
    <script src="script.js"></script>
</body>
</html>


                       
                    
                