<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $posts = [
            ['titulo' => 'Titulo do test 1','corpo'=>'Corpo de teste 1'],
            ['titulo' => 'Titulo do test 2','corpo'=>'Corpo de teste 2'],
            ['titulo' => 'Titulo do test 4','corpo'=>'Corpo de teste 4'],
            ['titulo' => 'Titulo do test 4','corpo'=>'Corpo de teste 4'],
        ];
        $nome = 'João Luiz';

        $this->render('home',[
            'nome' => $nome,
            'idade' => 35,
            'posts' => $posts,
        ]);
    }

    public function fotos(){
        $this->render('fotos');
    }

    public function foto($parametro){
        echo "Acessando a foto: ".$parametro['id'];
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        echo "Opa, ".$args['nome'];
    }

}