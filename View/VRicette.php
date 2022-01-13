<?php

class VRicette
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = StartSmarty::configuration();
    }

    static function getTestoCommento(){
        return $_POST['text_comment'];
    }

    static function getValutazione(){
        return intval($_POST['star']);
    }

    static function getTestoRicerca(){
        return $_POST['text'];
    }

    static function getTitoloRicetta(){
        return strtoupper($_POST['title']);
    }

    static function getProcedimentoRicetta(){
        return $_POST['content'];
    }

    static function getIngredientiRicetta(){
        return $_POST['ingredients'];
    }

    static function getCategoriaRicetta(){
        return $_POST['recipe-type'];
    }

    static function getDosiRicetta(){
        return $_POST['servings'];
    }

    function showRecepies($ricette, $array=null){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');

        if (is_array($ricette)) {
            $numero = rand(0, count($ricette) - 1);
            $this->smarty->assign('ran_num', $numero);
        }
        $this->smarty->assign('ricette', $ricette);
        $this->smarty->assign('array', $array);

        $this->smarty->display('ricette.tpl');
    }

    function showInfo(ERicetta $ricetta, $user,$mod, $immagine, $array, $immagine_autore, $valutato){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');

        $procedimento = explode('.', $ricetta->getProcedimento());

        $this->smarty->assign('mod', $mod);
        $this->smarty->assign('utente', $user);
        $this->smarty->assign('ricetta', $ricetta);
        $this->smarty->assign('procedimento', $procedimento);
        $this->smarty->assign('immagine', $immagine);
        $this->smarty->assign('array', $array);
        $this->smarty->assign('immagine_autore', $immagine_autore);
        $this->smarty->assign('valutato', $valutato);

        $this->smarty->display('ricetta_info.tpl');
    }

    function showAll($ricette, $num_pagine, $index, $num_ricette, $immagini, $cerca, $categorie){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');
        if ($cerca != null) $this->smarty->assign('searchMod', 'searchOn');

        $this->smarty->assign('immagini', $immagini);
        $this->smarty->assign('ricette', $ricette);
        $this->smarty->assign('num_pagine', $num_pagine);
        $this->smarty->assign('index', $index);
        $this->smarty->assign('num_ricette', $num_ricette);
        $this->smarty->assign('categorie', $categorie);

        $this->smarty->display('tutte_ricette.tpl');
    }

    function showSubmitRecipe(){
        $this->smarty->display('new-recipe.tpl');
    }

    public function modificaRicette($ricetta, $immagine, $ingredienti, $categorie){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');

        $this->smarty->assign('ricetta', $ricetta);
        $this->smarty->assign('immagine', $immagine);
        $this->smarty->assign('ingredienti', $ingredienti);
        $this->smarty->assign('categorie', $categorie);
        $this->smarty->display('edit-ricetta.tpl');
    }

    function showAllErr($ricette, $num_pagine, $index, $num_ricette, $immagini, $cerca, $tipoerr, $input, $categorie){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');
        if ($cerca != null) $this->smarty->assign('searchMod', 'searchOn');

        $this->smarty->assign('immagini', $immagini);
        $this->smarty->assign('ricette', $ricette);
        $this->smarty->assign('num_pagine', $num_pagine);
        $this->smarty->assign('index', $index);
        $this->smarty->assign('num_ricette', $num_ricette);
        $this->smarty->assign('tipoerr', $tipoerr);
        $this->smarty->assign('input', $input);
        $this->smarty->assign('categorie', $categorie);

        $this->smarty->display('tutte_ricette_err.tpl');
    }

}