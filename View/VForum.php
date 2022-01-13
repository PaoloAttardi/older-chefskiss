<?php

class VForum
{
    public function __construct()
    {
        $this->smarty = StartSmarty::configuration();
    }

    static function getTextComment(){
        return $_POST['text_comment'];
    }

    static function getTextSearch(){
        return $_POST['text'];
    }

    static function getPostTitle(){
        return $_POST['title'];
    }

    static function getPostContent(){
        return $_POST['content'];
    }

    static function getPostType(){
        return $_POST['post-type'];
    }

    function showForum($post, $num_pagine, $index, $num_post, $immagini, $cerca, $categorie){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');
        if ($cerca != null) $this->smarty->assign('searchMod', 'searchOn');

        $this->smarty->assign('immagini', $immagini);
        $this->smarty->assign('post', $post);
        $this->smarty->assign('num_pagine', $num_pagine);
        $this->smarty->assign('index', $index);
        $this->smarty->assign('num_post', $num_post);
        $this->smarty->assign('categorie', $categorie);

        $this->smarty->display('forum.tpl');
    }

    function showInfo(EPost $post, $user,$mod, $immagine,$array, $immagine_autore){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');

        $domanda = explode('.', $post->getDomanda());

        $this->smarty->assign('mod', $mod);
        $this->smarty->assign('utente', $user);
        $this->smarty->assign('post', $post);
        $this->smarty->assign('domanda', $domanda);
        $this->smarty->assign('immagine', $immagine);
        $this->smarty->assign('array', $array);
        $this->smarty->assign('immagine_autore', $immagine_autore);

        $this->smarty->display('forum_info.tpl');
    }

    function showSubmitPost(){
        $this->smarty->display('new-post.tpl');
    }

    public function modificaPost($post, $immagine, $categorie){
        if (CUtente::isLogged()) $this->smarty->assign('userlogged', 'logged');

        $this->smarty->assign('post', $post);
        $this->smarty->assign('immagine', $immagine);
        $this->smarty->assign('categorie', $categorie);
        $this->smarty->display('edit-post.tpl');
    }
}