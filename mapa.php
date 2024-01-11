<?php
    include "valida.inc";
?>
<html>

<head>
    <title>Mapa</title>
    <link rel="Website Icon" type="png"href="inden.png">
    <link rel="stylesheet" href="styleM.css">
    <meta charset="utf-8">
</head>
<?php
    include "cabecalho.inc";
    include "menu2.inc";
?>
<body class="bodyTwo">
    <br><br>
    <main>
        
        <table border="1">
            <tr height="100px">
                <a href="RiscoL.html"></a>
                <td colspan="3" width="150px" class="az">
                    <a class="link-sala" href="mecanica.php"> </a>
                    </td>
                    <td width="150px" class="az">
                        <a class="link-sala" href="sala102b.php">102 B </a>
                    </td>   
                    <td width="140px" class="az">
                        <a class="link-sala" href="sala101b.php"> 101 B </a>
                    </td> 
                    
                
            </tr>
            <tr height="40px">
                
                <td width="140px" class="blue">
                    <a class="link-sala" href="mecanica.php"> laboratorio mecanico </a>
                </td>
                <td colspan="4" class="az"><a class="link-sala"href="mapa.php">corredor</a></td>
                
                
            </tr>
            <tr height="120px">
                
                <td colspan="2" class="blue" ><a class="link-sala"href="mecanica.php"></a></td>
                <td class="blues"><a class="link-sala"href="mapa.php">corredor </a></td>
                <td colspan="2"><a class="link-sala"href="eletrica.php">laboratorio de eletrica</a></td>
            </tr>
            
        </table>
        <br><br>
        
        <table border="1">
            <tr height="100px">
                
                <td  width="250px" class="blue">
                    <a class="link-sala" href="biblioteca.php">  biblioteca</a>
                    </td>
                    <td width="150px"colspan="3,5"  >
                     <a class="link-sala"href="sala102a.php">   Sala 102A</a>
                    </td>
                    <td width="1px" class="blue" >
                    <a class="link-sala" href="mapa.php">    corredor</a>
                    </td>   
                    <td width="200px" colspan="4">
                    <a  class="link-sala" href="sala101a.php">    Sala 101 A</a>
                    </td>
                    <td width="125px"  >
                    <a  class="link-sala" href="financeiro.php">  Financeiro  </a>
                    </td>
                    <td width="5px"  class="blue">
                    <a class="link-sala" href="mapa.php"> corredor</a>
                    </td>

                    <td width="5px" >
                    <a class="link-sala"  href="supervisao.php"> Supervisão</a>
                    </td> 
                
            </tr>
            <tr height="40px">
                
                <td width="120px" border= "1" rowspan="2"><a  class="link-sala" href="sala103a.php"> sala 103A </a></td>
                <td   colspan="11" border="1" class="blue"><a class="link-sala" href="mapa.php">corredor</a></td>
                 
                
                
            </tr>
            <tr height="120px">
                <td colspan="3"><a class="link-sala" href="sala104a.php">sala 104A</a></td>  
                <td colspan="5"><a class="link-sala" href="sala105a.php">sala 105A</a></td>
                <td colspan="1"><a class="link-sala" href="sala106-2.php">sala 106/2</a></td>
                <td rowspan="2" width="12px" class="blue"><a class="link-sala" href="mapa.php">corredor</a></td>
                <td colspan="3" width="12px"><a class="link-sala" href="secretaria.php">secretaria</a></td>

            </tr>
            
            
        </table>
        <br><br>

    <section class="limpa"> 

    </section>

</main>
</body>
<?php
    include "rodape.inc";
?>
</html>