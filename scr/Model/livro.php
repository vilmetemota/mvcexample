
<? php
require_once  'livroDb.php' ; // inclusão de arquivo

classe  Livro  estende  LivroDB { // relação de herança
    // atributos
    private  $ nome ;
    private  $ autor ;
    private  preco $ ;

    // métodos
     função  pública getNome () {
        retornar  $ this -> nome ;
    }
     função  pública getAutor () {
        retornar  $ this -> autor ;
    }
     função  pública getPreco () {
        retornar  $ this -> preco ;
    }

     função  pública setNome ( $ nome ) {
        $ this -> nome = $ nome ;
    }
     função  pública setAutor ( $ autor ) {
        $ this -> autor = $ autor ;
    }
     função  pública setPreco ( $ preco ) {
        $ this -> preco = $ preco ;
    }
    public  function  incluir () { // método para incluir o livro
        retorna  $ this -> setLivro ( $ this -> getNome (), $ this -> getAutor (), $ this -> getPreco ());
        // o método setLivro pertence ao pai do livro (veja a herança)
    }

}