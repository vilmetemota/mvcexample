<? php

require_once ( "../model/livro.php" );

classe  ControllerCadastrar {
    private  $ livro ;

     função  pública __construct () {
        $ this -> livro = new  Livro ();
        $ this -> cadastrar ();
    }

     função  privada cadastrar () {
        $ this -> livro -> setNome ( $ _POST [ 'nome' ]);
        $ this -> livro -> setAutor ( $ _POST [ 'autor' ]);
        $ this -> livro -> setPreco ( $ _POST [ 'preco' ]);

        $ resultado = $ this -> livro -> incluir ();
        if ( $ resultado > = 1 ) {
            echo ( "<script> alert ('Livro cadastrado com sucesso!'); document.location = '.. / view / cadastro.php' </script>" );
        } mais {
            echo ( "<script> alert ('Infelizmente seu livro não foi cadastrado!'); history.back () </script>" );
        }
    }
}
novo  ControllerCadastrar ();
?>