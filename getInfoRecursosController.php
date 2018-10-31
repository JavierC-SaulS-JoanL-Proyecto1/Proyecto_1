<?php
require('queriesMysql.php');
$link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
$id_recurso = $_POST['recurso'];
$infoRecurso = queriesMysql::getInfoRecurso($link, (int)$id_recurso);
echo utf8_encode($infoRecurso[0])."@".$infoRecurso[1];
