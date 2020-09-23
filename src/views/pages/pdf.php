

<?php 
include("mpdf60/mpdf.php");

$html = "
<div >
    <table style='border-collapse: collapse,'>
    <style>
        table, th, td {
            border: 1px solid black;
        }

        table{
            width: 100%;
        }
        th, td {
            padding: 15px;
            text-align: left;
          }
    </style>
        <br>
        <thead>
            <tr >
                <th>Código</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
            </tr>
        </thead>
        <tbody>
        ";
foreach ($usuarios as $usuario):
        
 $html.='<tr >';
 $html.= '<td>' .$usuario['matricula']. '</td>';
 $html.=" <td> " .$usuario['nome']. "</td>";
 $html.=" <td>" .$usuario['data']. "</td>";
 $html.=" <td>" .$usuario['horario']."</td>";
 $html.="  </tr>";
        endforeach;

 $html.="</tbody>";

 $html.="  </table>";
 $html.="   </div>";

$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output($arquivo, 'D');

?>


