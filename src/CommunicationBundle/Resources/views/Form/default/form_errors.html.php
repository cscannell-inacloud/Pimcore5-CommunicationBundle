<?php
/** @var \Symfony\Component\Form\FormErrorIterator $errors */
?>

<?php if (count($errors) > 0): ?>
    <ul class="error-list">
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>
