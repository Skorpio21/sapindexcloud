<?php
include ('../conexion.php');
$mysqli =  conectar();

$query ="SELECT
t1.idProvider,
t1.NameProvider,
t1.SurnameProvider,
t1.email_corp,
t1.email_pers,
t1.profile_,
t1.dist_group,
concat(t1.IdCountry,' ',t3.Description) DepCountry,
t1.city,
t1.addressProvider,
t1.phone,
t1.sap_year,
t1.lang1,
t1.lang2,
t1.lang3,
t1.lang4,
t1.lang5,
t2.descPayment DepPayment,
t1.user_payment,
t1.link_payment,
t1.day_payment 
FROM
providers as t1
INNER JOIN payments AS t2 on t2.idPayment = t1.idPayment
INNER JOIN country AS t3 on t3.idCountry = t1.IdCountry
order by  t1.idProvider asc";
$resultado = mysqli_query($mysqli,$query);

$data["data"]= mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($data);