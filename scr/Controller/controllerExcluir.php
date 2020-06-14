<? php

require_once ( "../model/livroDb.php" );

classe  ControllerExluir {
    private  $ livroDb ;

     função  pública __construct ( $ id ) {
        $ this -> livroDb = novo  LivroDB ();
        if ( $ this -> livroDb -> deleteLivro ( $ id ) == TRUE ) {
            echo ( "<script> alert ('Livro exlcuido com sucesso!'); document.location = '.. / view / index.php' </script>" );
        } mais {
            echo ( "<script> alert ('Infelizmente seu livro não foi excluído!'); history.back () </script>" );
        }
        
    }
}

novo  ControllerExluir ( $ _GET [ 'id' ]);

?>