ajout de doc


<!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
<form enctype="multipart/form-data" action="téléchargement.php" method="post">
  <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="9999999" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  <input type= "radio" name="statut" value="doc\\"> Public
  <input type= "radio" name="statut" value="perso\\"> Perso
  <input type="submit" value="Envoyer le fichier" />
</form>
