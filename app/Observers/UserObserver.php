<?php
/**
 * Created by PhpStorm.
 * User: silva
 * Date: 28/03/18
 * Time: 20:41
 */

namespace App\Observers;


class UserObserver
{
    public function creating($user)
    {
        // Envia E-mail Notificando ao Usuário
        \Log::info("User {$user->email} will be registering");
    }

    public function created($user)
    {
        // Envia E-mail Notificando ao Usuário
//        Mail::to($user)->send(new UserRegistered($user));
        \Log::notice("User {$user->email} will be registered");
    }

    public function updating($user)
    {
        // Envia E-mail Notificando ao Usuário
        \Log::info("User {$user->email} will be updating");
    }

    public function updated($user)
    {
        // Envia E-mail Notificando ao Usuário
        \Log::notice("User {$user->email} will be updated");
    }

    public function saving($user)
    {
        // Envia E-mail Notificando ao Usuário
        \Log::info("User {$user->email} will be saving");
    }

    public function saved($user)
    {
        // Envia E-mail Notificando ao Usuário
        \Log::notice("User {$user->email} will be saved");
    }

}