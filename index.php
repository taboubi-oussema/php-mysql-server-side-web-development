<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php
  $nomPrenom = '';
  $niveau = '';
  $Payement = '';
  require_once 'connexion.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $connexion->prepare("SELECT * FROM etudiant WHERE id = ?");
    $stmt->execute([$id]);

    $etudiant = $stmt->fetch();
    if ($etudiant) {
      $nomPrenom = $etudiant['Nom_et_prenom'];
      $niveau = $etudiant['niveau'];
      $Payement = $etudiant['Payement'];
    }
  }
  ?>
  <fieldset>
    <legend>Remplir le formulaire d'inscription suivant:</legend>
    <form action="./valide.php" method="post">
      <label for="">Nom et prenom</label>
      <input type="text" name="npr" id="" value="<?php echo $nomPrenom ?>" /><br /><br />
      <label for="">niveau:</label><input type="radio" name="radio" id="" value="1ere" <?php echo ($niveau == "1ere" ? 'checked' : '') ?> />
      <label for="">1ere</label><input type="radio" name="radio" id="" value="2eme" <?php echo ($niveau == "2eme" ? 'checked' : '') ?> />
      <label for="">2eme</label><input type="radio" name="radio" id="" value="3eme" <?php echo ($niveau == "3eme" ? 'checked' : '') ?> /><label for="">3eme</label><br /><br />

      <label for="">inscription</label><input type="checkbox" checked name="semestre[]" value="semestre1" id="" /><label
        for="">semestre 1</label>
      <input type="checkbox" name="semestre[]" value="semestre2" id="" /><label
        for="">semestre 2</label><br /><br />

      <label>Payement</label>
      <select name="payement" id="">
        <option value="en ligne" <?php echo ($Payement == "en ligne" ? 'selected' : '') ?>>en ligne</option>
        <option value="cheque" <?php echo ($Payement == "cheque" ? 'selected' : '') ?>>cheque</option>
      </select><br /><br />
      <input onclick="" type="submit" value="inscription" />
      <input type="hidden" name="id" value="<?php echo $id ?? 0; ?>" />
      <input type="reset" value="reinitialiser" />
    </form>
  </fieldset>
</body>

</html>