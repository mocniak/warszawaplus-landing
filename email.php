<?php

$email = $_REQUEST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mail("karol@mocniak.pl", "Nowy wolontariusz W+", $email);
    echo '<script>
            alert("Dziękujemy! Skontaktujemy się z Tobą!");
            window.location.replace("http://warszawaplus.org");
          </script>';

} else {
    echo 'Nieprawidlowy adres email!';
}
