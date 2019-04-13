<?php 

    function nav_item( string $lien , string $title ) : string
    {
      $classe = 'nav-item' ;
      if ($_SERVER['SCRIPT_NAME'] === $lien ) {
        $classe .= ' active';
      }
      return <<<HTML
  <li class="$classe">
     <a class="$classLink" href="$lien">$title</a>
  </li>
HTML
;}

function nav_menu( string $classLink): string 
{
  return
        nav_item( '/index.php' , 'Accueil', $classLink ) .
        nav_item( '/contact.php' , 'contact' , $classLink ) ;
}

?>
