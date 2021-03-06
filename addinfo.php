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

<body class="normal">
    <header>
        <div class="container">
            <h1>Informação adicional</h1>
        </div>
        <?php
            $empresa_id = $_GET["id"];
        ?>
    </header>

    <!-- Edit empresa -->
    <section id="cadastro" class="bg-light-gray">
        <div class="container">
            <form name="obj" action="../objadded.php" method="post" id="left">
                <table> 
                    <tr>
                        <td><h3>Objetivo Estratégico</h3></td>
                    </tr>
                    <tr> 
                        <td>Descrição</td>
                        <td align=center><input type="text" required name="description"/></td>
                    </tr> 
                    <tr> 
                        <td>Meta</td>
                        <td align=center><input type="text" required name="meta"/></td>
                    </tr> 
                    <tr> 
                        <td>Indicador</td>
                        <td align=center><input type="text" required name="indicator"/></td>
                    </tr> 
                    <tr> 
                        <input type="hidden" name="emp_id" value="<?php echo $empresa_id ?>">
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" name="submit" class="page-scroll btn btn-xl" value="Adicionar"></td>
                    </tr>
            </form>
            <form name="iniciativa" action="../iniciativaadded.php" method="post" id="left">
                <table> 
                    <tr> 
                        <td><h3>Iniciativa</h3></td>
                    </tr>
                    <tr> 
                        <td>
                            <input type="text" required name="iniciative"/>
                        </td>
                    </tr> 
                    <tr> 
                        <input type="hidden" name="emp_id" value="<?php echo $empresa_id ?>">
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" name="submit" class="page-scroll btn btn-xl" value="Adicionar"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Rodolfo Saldanha 2017</span>
                </div>
            </div>
        </div>
    </footer>

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

</body>

</html>
