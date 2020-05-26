ajout de doc


<!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
<form enctype="multipart/form-data" action="téléchargement.php" method="post">
  <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  <input type= "radio" name="statut" value="doc\\"> Public
  <input type= "radio" name="statut" value="perso\\"> Perso
  <input type="submit" value="Envoyer le fichier" />
</form>



<?php
function lister($chemin)
{
   echo '<u>Contenu du dossier '.$chemin.'</u><br><blockquote>';

   //nom du r?pertoire ? lister
   $nom_repertoire = $chemin;

   //on ouvre un pointeur sur le repertoire
   $pointeur = opendir($nom_repertoire);

   //pour chaque fichier et dossier
   while ($fichier = readdir($pointeur))
   {
      //on ne traite pas les . et ..
      if(($fichier != '.') && ($fichier != '..'))
      {
         //si c'est un dossier, on le lit
         if (is_dir($nom_repertoire.'/'.$fichier))
         {
            echo '<blockquote>';
            lister($nom_repertoire.'/'.$fichier);
            echo '</blockquote>';
         }
         else
         {
            //c'est un fichier, on l'affiche
            //$im = new Imagick();
            //$im->setResolution(200, 200);     //Taille de l'apercu
            //$im->readImage($fichier);    // première page du pdf
            //$im->setImageFormat('jpg');
            //header('Content-Type: image/jpeg');
            //echo $im;

            echo '<a href="/doc/' . $fichier . '"download="'.$fichier.'" role="button">'.$fichier.'</a>';
            echo '<br>';
         }
      }
   }
   //fermeture du pointeur
   closedir($pointeur);
}


lister("perso");// remplace ../ par le chemin de ton rep à lister



?>
