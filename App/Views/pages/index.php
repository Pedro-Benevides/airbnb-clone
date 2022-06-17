<?php
if (!empty($user)) {
    echo 'Bem vindo ao site do Airbnb ' . $user->getNome();
} else {
    echo "Não encontrado";
}
