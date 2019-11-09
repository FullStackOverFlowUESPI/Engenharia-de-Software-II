<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ConvênioOnline - UESPI</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/login.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/inicio.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/solicitacao.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/visualizar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/detalhe_solicitacao.css'>
</head>
<body>
   <div class="container">
       <header class="h-eader">
           <div class="logo">
               <a href="https://www.uespi.br/site/"> <img src="image/logo-uespi.png" width="208" height="80"></a>
               </div>
            <a href="inicio">
           <div class="title">
               ConvênioOnline
           </div>
            </a>
       </header>
           <!-- Faça aqui seu codigo -->
           
       <div class="all-white">
           
           <div class="all-white-menu">
               @yield('content')
           </div>
           
           
        <!-- </div> -->

           <footer>
		    <div class="footer" >
		      <!-- <div class="borda"></div> -->
                <h6 align="center">NPD - Núcleo de Processamento de dados. <br/> 
                Em caso de problemas entre em contato pelo E-mail fullstackof@gmail.com<br/> 
                lembrando sempre de informar seu usuário.<br />
                © 2019 Universidade Estadual do Piauí - UESPI. Todos os direitos reservados.
                </h6>		  
                <p></p>  
            </div>
		</footer>

       </div>

        

   </div>
</body>
</html>

