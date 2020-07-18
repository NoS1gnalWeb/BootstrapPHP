<?php
        require 'vendor/autoload.php';

        use Bootstrap\Form;
        use Bootstrap\Bootstrap;

        $boostrap = new Bootstrap();
        $form = new Form('#', 'POST');

        // set CSS
        $boostrap->setCss();

        // Form
        $form->FormContain('start');
                $form->inputDefault('text', 'myUsername', 'username', 'Username', true, 'Your Username', 'off');
                $form->inputDefault('email', 'myEmail', 'email', 'Email', true, 'Your Email', 'off');
                $form->inputDefault('password', 'myPassword', 'password', 'Password', true, 'Yout Password', 'off');
                $form->inputDefault('password', 'myPasswordRetype', 'password_retype', 'Retype your password', false, null, 'off');
                $form->setSpace();
                $form->setBtnSubmit('myBtn', 'primary', 'Sign-up');
        $form->FormContain('end');

?>

