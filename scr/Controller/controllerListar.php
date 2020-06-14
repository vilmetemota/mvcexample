<? php
require_once ( "../model/livroDb.php" );
classe  ControllerListar {
    private  $ livroDb ;

     função  pública __construct () {
        $ this -> livroDb = novo  LivroDB ();
        $ this -> CriarTabela ();
    }

     função  pública CriarTabela () {
        $ result = $ this -> livroDb -> getLivro ();

        foreach ( $ result  as  $ livro ) {
            eco ( "<tr>" );
            echo ( "<th>" . $ livro [ 'id' ]. "</th>" );
            echo ( "<td>" . $ livro [ 'nome' ]. "</td>" );
            echo ( "<td>" . $ livro [ 'autor' ]. "</td>" );
            echo ( "<td>" . $ livro [ 'preco' ]. "</td>" );
            echo ( "<td> <a class='btn btn-warning' href='editar.php?id=". $ Livro ['id' ]. "'> Editar </a> <a class = 'btn btn -danger 'href =' .. / controller / controllerExcluir.php? id = " . $ livro [ 'id' ]. " '> Excluir </a> </td> " );        
            echo ( '</tr>' );
        }
    }
}

?>
© 2020 GitHub, Inc.