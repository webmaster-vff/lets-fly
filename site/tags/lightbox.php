<?php

kirbytext::$tags['lightbox'] = array(
  'attr' => array(
    'lbtitle',
	'imgtitle',
	'class',
	'width',
	'height'
  ),
  'html' => function($tag) {

    $img      = $tag->page()->image($tag->attr('lightbox'))->url();
	$lbtitle  = $tag->attr('lbtitle', 'lightbox');
	$imgtitle = $tag->attr('imgtitle', 'lightbox');
    $class    = $tag->attr('class', 'lightbox');
    $width    = $tag->attr('width', 'lightbox');
	$height   = $tag->attr('height', 'lightbox');

	$str = '<figure class="'.$class.'"><a href="'.$img.'" data-lightbox="'.$lbtitle.'" data-title="'.$imgtitle.'"><img src="'.$img.'" height="'.$height.'" width="'.$width.'"></a></figure>';		
    return $str;

  }
);
