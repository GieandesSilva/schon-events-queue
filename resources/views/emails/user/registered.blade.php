@component('mail::message')
    # Olá {{$user->name}}

    Sua Conta Foi Criada.

    @component('mail::button', ['url' => ''])
        Clique aqui para ativar sua conta
    @endcomponent

    Obrigado,<br>
    {{ config('app.name') }}
@endcomponent
