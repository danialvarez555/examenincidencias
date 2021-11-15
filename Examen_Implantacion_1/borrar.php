<?php

include 'head.php';
session_start();
if(isset($_REQUEST['borrar']))
{
    $num_incidencia=$_REQUEST['num_incidencia']-1; //se resta 1 porque el array empieza en 0
    $contantes=count($_SESSION['incidencias']); //para lo de no se encuentra elemento
    unset($_SESSION['incidencias'][$num_incidencia]);
    $contdespues=count($_REQUEST['incidencias']); //para lo de no se encuentra elemento
    if($contantes==$contdespues)
    {
        echo "No se encuentra el elemento que quieres borrar";
    }
}                                             
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';