<?php

function genererTitre() {
    
    $titre = selectLine('template');

    $titre = remplirTemplate($titre);

    return $titre;
}

function selectLine($word) {

    if ( file_exists("./_data/$word.txt") ) {
        $generator = file("./_data/$word.txt");

        $id_word = array_rand($generator, 1);
        $word =  $generator[$id_word];

        return $word;
    }
    
    return '';
    
}

function remplirTemplate($template) {

    $explodedTemplate = explode(' ', $template);

    foreach($explodedTemplate as $key => $word) {

        if( stripos($word, '@') !== false ) {

            $explodedWord = explode('@', $word);

            foreach($explodedWord as $childKey => $childWord) {
                
                if ($childWord != '') {
                    $childWord = ucfirst(trim(selectLine($childWord)));
                }

                    $explodedWord[$childKey] = $childWord;
            }

            $explodedTemplate[$key] = implode('', $explodedWord);

        }

    }

    $template = ucfirst( implode(' ', $explodedTemplate) );

    return $template;
}
