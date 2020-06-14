>

< html >
    <? php  include ( "head.php" ); ?>
    < corpo >
        <? php  include ( "menu.php" ); ?>

        < div  class = " row " >
            < form  method = " post " action = " ../controller/controllerCadastrar.php " id = " form " name = " form " class = " col-10 " >
                < div  class = " form-group " >
                    < input  class = " control-form " type = " text " id = " nome " name = " nome " espaço reservado = " Nome do livro " obrigatório  foco automático >
                    <input class="form-control" type="text" id="autor" name="autor" placeholder="Autor do livro" required>
                    <input class="form-control" type="text" id="preco" name="preco" placeholder="R$" required>                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sucess" id="cadastrar">Cadastrar</button> 
                </div>            
            </form>   
        </div>


    </body>

</html>
