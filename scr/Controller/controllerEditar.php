require_once ("../ model / livroDb.php");

classe ControllerEditar {
    private $ nome;
    private $ autor;
    private preco $;
    private $ livroDb;
    private $ id;

    função pública __construct ($ id) {
        $ this- > livroDb = new LivroDB ();
        $ this- > id = $ id;
        $ this- > criarFormulario ($ id);
    }

    public function criarFormulario ($ id) {        
        $ row = $ this- > livroDb- > getLivroById ($ id);
        $ this- > nome = $ row ['nome'];
        $ this- > autor = $ row ['autor'];
        $ this- > preco = $ row ['preco'];
    }

    função pública getNome () {
        return $ this- > nome;
    }
    função pública getId () {
        return $ this- > id;
    }
    função pública getAutor () {
        return $ this- > autor;
    }
    função pública getPreco () {
        return $ this- > preco;
    }

    função pública setNome ($ nome) {
        $ this- > nome = $ nome;
    }
    função pública setAutor ($ autor) {
        $ this- > autor = $ autor;
    }
    função pública setPreco ($ preco) {
        $ this- > preco = $ preco;
    }

    função pública editarFormulario ($ nome, $ autor, $ preco, $ id) {

        if ($ this- > livroDb- > updateLivro ($ id, $ nome, $ autor, $ preco) == VERDADEIRO) {
            echo (" < script > alert ( 'Livro editado com sucesso!' ) ; document . location = '../view/index.php' </ script > ");
        }outro{
            echo (" < script > alert ( 'Infelizmente seu livro não foi editado!' ) ; history . back ( ) </ script > ");
        }
    }
}

$ id = filter_input (INPUT_GET, 'id');
$ editar = novo ControllerEditar ($ id);
if (isset ($ _ POST ['submit'])) { 
    $ editar- > editarFormulario ($ _ POST ['nome'], $ _POST ['autor'], $ _POST ['preco'], $ _POST ['id']);
}
? >