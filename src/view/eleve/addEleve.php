<?php
$form->prepare();
?>
<form name="formAddEleve" method="post">
    <input type="text" name="nom" value="<?php echo $form->get('nom')->getValue(); ?>" />
    <input type="submit" name="GO" value="GO" />
</form>
