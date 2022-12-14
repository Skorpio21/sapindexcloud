<?php
include ('../conexion.php');
$mysqli =  conectar();

$query ="SELECT
t1.idContract,
concat( t5.NameProvider, ' ', t5.SurnameProvider ) AS DepProvider,
concat( t4.NameClient ) AS DepClient,
t1.DateIni,
t1.DateFin,
t1.RateProv,
concat( t1.CurRateProv, ' ', t3.Description ) AS DepMonProvider,
t1.RateCli,
concat( t1.CurRateCli, ' ', t3.Description ) AS DepMonClient,
t1.EndClient,
concat( t6.Description ) AS DepWorktype 
FROM
contracts AS t1
INNER JOIN currencies AS t2 ON t2.idcurrency = t1.CurRateCli
INNER JOIN currencies AS t3 ON t3.idcurrency = t1.CurRateProv
INNER JOIN clients AS t4 ON t4.idClient = t1.idClient
INNER JOIN providers AS t5 ON t5.idProvider = t1.idProvider
INNER JOIN work_type AS t6 ON t6.idWorkType = t1.work_type
order by  t1.idContract asc";
$resultado = mysqli_query($mysqli,$query);

$data["data"]= mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($data);