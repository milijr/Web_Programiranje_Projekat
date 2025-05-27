<?php

function validateUsername($usernm) {
    // Username mora biti između 4 i 20 karaktera
    if (strlen($usernm) < 4 || strlen($usernm) > 20) {
        return "Korisničko ime mora imati između 4 i 20 karaktera";
    }

    if (empty($username)) {
        return "Korisničko ime je obavezno.";
    }

    // Dozvoljava samo slova, brojeve i underscore
    if (!pregmatch('/^[a-zA-Z0-9]+$/', $usernm)) {
        return "Korisničko ime može sadržati samo slova, brojeve i donju crtu (_)";
    }

    return true;
}
