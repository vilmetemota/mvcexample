<! DOCTYPE html >

< html >
    <? php  include ( "head.php" ); ?>
    < corpo >
        <? php  include ( "menu.php" ); ?>
        <? php  require_once ( "../controller/controllerEditar.php" ); ?>

        < div  class = " row " >
            < form  method = " POST " action = " ../controller/controllerEditar.php " id = " form " name = " form " onsubmit = " validar (document.form); retorne false; " class = " col-10 " >
                < div  class = " form-group " >
                    < input  class = " control-form " type = " text " id = " nome " name = " nome " value = " <? php  echo  $ editar -> getNome (); ?> " espaço reservado = " Nome do livro " obrigatório  foco automático >
                    < input  class = " control-form " type = " text " id = " autor " name = " autor " value = " <? php  echo  $ editar -> getAutor (); ?> " espaço reservado = " Autor do livro " obrigatório >
                    < input  class = " control-form " type = " text " id = " preco " name = " preco " value = " <? php  echo  $ editar -> getPreco (); ?> " espaço reservado = " R $ " onkeypress = " formatarMoeda (); " obrigatório >                    
                </ div >
                < div  class = " form-group " >
                    < input  type = " hidden " nome = " id " value = " <? php  echo  $ editar -> getId (); ?> " >
                    < tipo de botão  = " enviar " class = " btn btn-sucesso " id = " editar " > Editar </ button > 
                </ div >            
            </ form >   
        </ div >

    </ corpo >
</ html >
