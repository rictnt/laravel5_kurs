<!-- resources/views/emails/password.blade.php -->

Link do aktywacji formularza odzyskiwania hasła: {{ url('profil/password/reset/'.$token) }}