<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UsersChecker implements UserCheckerInterface
{
    // Effectue un check au login et vérifie si le compte utilisateur est activé ou non
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return;
        }

        if (!$user->isIsActive()) {
            throw new CustomUserMessageAccountStatusException('Votre compte a été désactiver par un administrateur');
        }
    }

// Effectue un check lors d'un changement de page et vérifie si le compte utilisateur est activé ou non
    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return;
        }

        if (!$user->isIsActive()) {
            throw new CustomUserMessageAccountStatusException('Votre compte a été désactiver par un administrateur');
        }
    }
}
