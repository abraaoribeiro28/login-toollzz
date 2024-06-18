<x-guest-layout>
    <div class="login register">
        <div class="actions-top">
            <x-application-logo class="logo logo-desktop" />
            <button class="btn btn-back-mobile">
                <x-icons.back-mobile />
            </button>
            <a href="{{ route('login') }}" class="btn">Entrar</a>
        </div>

        <x-application-logo class="logo logo-mobile" />

        <div class="welcome">
            <h2>Boas-vindas!</h2>
            <p>Cadastre-se utilizando uma das opções abaixo</p>
        </div>

        <div class="socials">
            <button class="btn btn-social">
                <x-icons.google />
            </button>
            <button class="btn btn-social">
                <x-icons.facebook />
            </button>
            <button class="btn btn-social">
                <x-icons.apple />
            </button>
            <button class="btn btn-social">
                <x-icons.twitter />
            </button>
        </div>

        <div class="or">
            <div class="divider"></div>
            <span>OU</span>
            <div class="divider"></div>
        </div>

        <form action="{{ route('register') }}" method="POST" >
            @csrf
            <x-input id="name" type="text" name="name" label="Nome de usuário" :value="old('name')"
                     placeholder="Digite seu nome" required autocomplete="off" />

            <x-input id="email" type="email" name="email" label="E-mail" :value="old('email')"
                     placeholder="Digite seu e-mail" required autocomplete="off" />

            <x-input id="password" type="password" name="password" label="Senha" :value="old('password')"
                     placeholder="Digite sua senha" required autocomplete="off" />

            <x-input id="password_confirmation" type="password" name="password_confirmation" label="Confirme sua senha"
                     :value="old('password_confirmation')" placeholder="Confirme sua senha" required autocomplete="off" />

            <div class="reverse">
                <x-captcha class="mt-24px"/>
                <x-primary-button icon="submit">
                    Registrar-se
                </x-primary-button>
            </div>
        </form>
    </div>

    @section('style')
        @vite(['resources/css/register.css'])
    @endsection
</x-guest-layout>
