<?php

DBCONECTION = new PDO('mysql:host=localhost;dbname=parmacie_db', 'root', '');

FOR($I=12;I<50;I++){
    $stmt = DBCONECTION->query("UPDATE pharmacies
SET tempfin = '03:00:00'
,tempdebut = '07:00:00' where id=$I");
    $pharmacies = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>