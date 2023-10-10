<?php
 $fecha1 = $_POST['fecha1'];
 echo $fecha1; //Aquí la fecha es un simple texto(string)

 $fechaNacimiento=strtotime($fecha1);
 echo "<br>".$fechaNacimiento;

 $fecha2=date("d/m/y"); 
 echo "<br>".$fecha2;

 $fechaActual=strtotime($fecha2);
 echo "<br>".$fechaActual;

if(isset($_POST['boton']))
{
    $dias=diferenciaFechas($fechaNacimiento,$fechaActual); //Llamada
    echo "La diferencia en días en días es: ".$dias;
} 
function diferenciaFechas($f1,$f2)
{
   /*
   $diferenciaSegundos=$f2-$f1;
   $diferenciaDias=floor($diferenciaSegundos/60/60/24);
   echo "<br> Diferencia en días: ".$diferenciaDias;
   */
  return floor(($f2-$f1)/60/60/24);


}
?>