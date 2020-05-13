<?php

function genererTitre() {
    
    $titre = selectTemplate();

    $titre = remplirTemplate($titre);

    return $titre;
}


function selectTemplate() {
    $templates = file('./_data/template.txt');

    //print_r($templates);

    $id_template = array_rand($templates, 1);
    $titre =  $templates[$id_template];
    
    return $titre;
}

function remplirTemplate($template) {

    $explodedTemplate = explode(' ', $template);

    foreach($explodedTemplate as $key => $word) {

        if( stripos($word, '@') !== false ) {

            $explodedWord = explode('@', $word);

            foreach($explodedWord as $childKey => $childWord) {
                
                if ($childWord != '') {
                    $childWord = ucfirst(trim(selectWord($childWord)));
                }

                    $explodedWord[$childKey] = $childWord;
            }

            $explodedTemplate[$key] = implode('', $explodedWord);

        }

    }

    $template = ucfirst( implode(' ', $explodedTemplate) );

    return $template;
}

function selectWord($word) {

    if ( file_exists("./_data/$word.txt") ) {
        $generator = file("./_data/$word.txt");

        $id_word = array_rand($generator, 1);
        $word =  $generator[$id_word];

    }

    return $word;
    
}