<? php  require_once ( "../controller/controllerListar.php" ); ?>
<! DOCTYPE html >
< html  lang = " pt-br " >
    <? php  include ( "head.php" ); ?>    
    < corpo >
        <? php  include ( "menu.php" ); ?>

        < table  class = " table " >
            < thead >
                < tr >
                    < th > Id </ th >
                    < th > Nome </ th >
                    < th > Autor </ th >
                    < th > Preço </ th >
                </ tr >
            </ thead >
            < tbody >
                <? php  new  ControllerListar (); ?>
            </ tbody >
        </ tabela >

    < script  src = " https://code.jquery.com/jquery-3.5.1.min.js " integridade = " sha256-9 / aliU8dGd2tb6OSsuzixeV4y / faTqgFtohetphbbj0 = " crossorigin = " anônimo " > </ script >
    < Roteiro  src = " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integridade =" SHA384-ZMP7rVo3mIykV + 2 + 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK / l8WvCWPIPm49 " crossorigin = " anônimo " > </ script >
    < Roteiro  src = " https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js " integridade =" SHA384-smHYKdLADwkXOn1EmN1qk / HfnUcbVRZyYmZ4qpPea6sjB / pTJ0euyQp0Mk8ck + T5 " crossorigin =" anonymous " > </ script >

    </ corpo >
</ html >