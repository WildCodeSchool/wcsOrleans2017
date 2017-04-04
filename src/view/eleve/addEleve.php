<?php
$form->prepare();
var_dump($form->getMessages());
//    foreach($form->getMessages() as $name => $message) {
//            var_dump($message);
//    }
?>
<form name="formAddEleve" method="post">
    <input type="text" name="nom" value="<?php echo $form->get('nom')->getValue(); ?>" />
    <div>
    <?php
    foreach($form->getMessages() as $name => $message) {
        if ('nom' == $name) {
            var_dump($message);
        }
    }
    ?>
    </div>

    <input type="text" name="email" value="<?php echo $form->get('email')->getValue(); ?>" />
    <div>
        <?php
        foreach($form->getMessages() as $name => $message) {
            if ('email' == $name) {
                var_dump($message);
            }
        }
        ?>
    </div>

    <input type="hidden" name="csrf" value="<?php echo $form->get('csrf')->getValue(); ?>" />
    <input type="submit" name="GO" value="GO" />
</form>
