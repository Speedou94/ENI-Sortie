<?php

namespace App\EntityListener;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserListener
{
    private UserPasswordHasherInterface $hasher;

    /**
     * Constructeur.
     */
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    /**
     * Hash le password de l'user au persit.
     */
    public function prePersist(User $user): void
    {
        $this->encodePassword($user);
    }

    /**
     * Hash le password au update de l'user.
     */
    public function preUpdate(User $user): void
    {
        $this->encodePassword($user);
    }

    /**
     * Encode le password avec le hasher interface.
     */
    public function encodePassword(User $user): void
    {
        if (null === $user->getPlainPassword()) {
            return;
        }
        $user->setPassword(
            $this->hasher->hashPassword($user,
                $user->getPlainPassword())
        );
    }
}
