
<? php
require_once ( "../config/db.php" );
classe  LivroDB {
    protegido  $ mysqli ;

     função  pública __construct () {
        $ this -> conexao ();
    }

     função  privada conexao () {
        $ this -> mysqli = novo mysqli ( DB_SERVIDOR , DB_USUARIO , DB_SENHA , DB_BANCO );
    }
     função  pública setLivro ( $ nome , $ autor , $ preco ) {                
        $ sql = $ this -> mysqli -> prepare ( "INSERIR EM livros (` nome`, `autor`,` preco`) VALORES (?,?,?) " );
        $ sql -> bind_param ( "sss" , $ nome , $ autor , $ preco );
        if ( $ sql -> execute ()) {
            return  true ;
        } mais {
            retornar  falso ;
        }
    }  

     função  pública getLivro () {
        $ sql = $ this -> mysqli -> query ( "SELECT * FROM livros" );
        while ( $ row = $ sql -> fetch_array ( MYSQLI_ASSOC )) {
            $ array [] = $ linha ;
        }
        retornar  $ array ;
    }

     função  pública deleteLivro ( $ id ) {
        $ sql = $ this -> mysqli -> prepare ( "DELETE DE` livros` WHERE `id` =?" );
        $ sql -> bind_param ( "s" , $ id );
        if ( $ sql -> execute () == TRUE ) {
            return  true ;
        } mais {
            retornar  falso ;
        }
    }

     função  pública updateLivro ( $ id , $ nome , $ autor , $ preco ) {
        $ sql = $ this -> mysqli -> prepare ( "UPDATE` livros` SET `nome` =?,` autor` =?, `preco` =? WHERE` id` =? " );
        $ sql -> bind_param ( "ssss" , $ nome , $ autor , $ preco , $ id );
        if ( $ sql -> execute () == TRUE ) {
            return  true ;
        } mais {
            retornar  falso ;
        }
    }

     função  pública getLivroById ( $ id ) {
        $ sql = $ this -> mysqli -> query ( "SELECT * FROM livros WHERE id = '$ id'" );
        retornar  $ sql -> fetch_array ( MYSQLI_ASSOC );            

    }
}