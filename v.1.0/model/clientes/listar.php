<?php
include ('../conexion.php');
$mysqli =  conectar();

$query ="select t1.idClient, t1.NameClient,t1.AddressClient, CONCAT(t1.CountryClient, ' ',UCASE(t2.Description)) DetCountry ,
 CONCAT(t1.CurrClient, ' ',UCASE(t3.Description)) DetCurr,t1.VAT, t1.DateIni,
t1.email1,t1.email2,t1.email3,t1.email4,t1.email5 from clients as t1
inner join country as t2 on t2.IdCountry = t1.CountryClient
inner join currencies as t3 on t3.idcurrency = t1.CurrClient
order by  t1.idClient asc";
$resultado = mysqli_query($mysqli,$query);

$data["data"]= mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($data);