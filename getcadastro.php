<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gerenciamento de BSC">
    <meta name="author" content="Rodolfo Saldanha">

    <title>Gerenciamento de empresas</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <link href="css/bsc.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body class="pageCad">
    <header>
        <div class="container">
            <h1 class="section-heading">Empresas Cadastradas</h1>
        </div>
    </header>

<section id="lista" class="bg-light-gray">
	<div class="container">
		<?php

		require_once('/Library/WebServer/Documents/mysqli_connect.php');

		$query = "SELECT nome, empresa_id FROM empresa";

		$response = @mysqli_query($db_connection, $query);

		if($response){
			echo '<table class="tLista" align="left">

			<tr class="alternate"><td align="left"><h3><b>EMPRESA</b></h3></td>
			<td colspan="3" align="left"><h3><b>OBJETIVOS ESTRATÉGICOS</b></h3></td>
			<td align="left"><h3><b>INICIATIVAS<b></h3></td>
            <td align="left"><h3></td>
            <td align="left"><h3></td></tr>

			<tr class="alternate"><td align="left"></td>
			<td align="left"><h5><b>Descrição</b></h5></td>
			<td align="left"><h5><b>Meta</b></h5></td>
			<td align="left"><h5><b>Indicador</b></h5></td>
			<td align="left"></td></tr>';
			while($row = mysqli_fetch_array($response)){
				$fk_empresa = $row['empresa_id'];

				$query2 = "SELECT descricao FROM objetivo_estrategico WHERE fk_empresa = ".$fk_empresa;

                $query3 = "SELECT meta FROM objetivo_estrategico WHERE fk_empresa = ".$fk_empresa;

                $query4 = "SELECT indicador FROM objetivo_estrategico WHERE fk_empresa = ".$fk_empresa;

				$query5 = "SELECT * FROM iniciativa WHERE fk_empresa = ".$fk_empresa;

                $query6 = "DELETE FROM empresa WHERE empresa_id = ".$fk_empresa;

				$response2 = @mysqli_query($db_connection, $query2);

                $response3 = @mysqli_query($db_connection, $query3);

                $response4 = @mysqli_query($db_connection, $query4);

				$response5 = @mysqli_query($db_connection, $query5);

				echo '<tr class="alternate"><td align="left"><a href="chart.php?id='.$row['empresa_id'].'">' .$row['nome'].'</a></td>';
				
                echo '<td align="left">';
                while($linha = mysqli_fetch_array($response2)){
                    echo '- '.$linha['descricao']. '<br>';
                }
                echo '</td>';

                echo '<td align="left">';
                while($linha = mysqli_fetch_array($response3)){
                    echo '- '.$linha['meta']. '<br>';
                }
                echo '</td>';

                echo '<td align="left">';
                while($linha = mysqli_fetch_array($response4)){
                    echo '- '.$linha['indicador']. '<br>';
                }
                echo '</td>';

                echo '<td align="left">';
				while($linha = mysqli_fetch_array($response5)){
					echo '- '.$linha['descricao']. '<br>';
				}
                echo '</td>';

				echo '<td align="left"><button class="page-scroll btn btn-p" onclick="myFunction('.$fk_empresa.')">Iniciativa/Objetivo</button></td>';
               
                echo '<td align="left"><button class="page-scroll btn btn-p" onclick="myFunction2('.$fk_empresa.')">Excluir</button></td></tr>';
                
			}

		}
		else{
			echo "Couldn't issue database query";
			echo mysqli_error($db_connection);
		}
		mysqli_close($db_connection);

	   ?>
       <script>
        function myFunction(id) {
            var x = screen.width/2 - 700/2;
            var y = screen.height/2 - 450/2;
            var myWindow = window.open("addinfo.php?id="+id, "_blank", "height=485,width=700,left="+x+",top="+y);
            myWindow.focus();
        }
        </script>
        <script>
        function myFunction2(id) {
            window.location.href = "delete.php?id="+id;
        }
        </script>
	</div>
<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
</section>



</body>

</html>