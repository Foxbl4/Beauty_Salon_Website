<?php
if(isset($_POST['firstname']) && isset($_POST['servises']) && 
    isset($_POST['email']) && isset($_POST['tnumber'])) 
{
    $name = htmlentities($_POST['firstname']);
    $servises = htmlentities($_POST['servises']);
    if(isset($_POST['hostel'])) $hostel = "да";
    $comment = htmlentities($_POST['comment']);
    $tnumber = $_POST['tnumber'];
    $output ="
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $name<br />
    Форма обучения: $servises<br />
    Выбранные курсы:
    <ul>";
    foreach($tnumber as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>