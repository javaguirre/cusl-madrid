<?php

class Concurso
{
  static public function slugify($text)
    {

      // replace non letter or digits by -
      $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

      // trim
      $text = trim($text, '-');

      // transliterate
      $vowels =   array("a", "e", "i", "o", "u", "n", "" , "a", "e", "i", "o", "u", "c", "a", "e", "i", "o", "u");
      $vowelsacute   =  array("á", "é", "í", "ó", "ú", "ñ", " ", "à", "è", "ì", "ò", "ù", "ç", "Á", "É", "Í", "Ó", "Ú");

      $text = str_replace($vowelsacute, $vowels, $text);


      // lowercase
      $text = strtolower($text);

      // remove unwanted characters
      $text = preg_replace('#[^-\w]+#', '', $text);

      if (empty($text))
      {
        return 'n-a';
      }

      return $text;

    }
}