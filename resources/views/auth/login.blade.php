<x-guest-layout>
    <div class="login">
        <div class="actions-top">
            <x-application-logo class="logo logo-desktop" />
            <button class="btn btn-back-mobile">
                <x-icons.back-mobile />
            </button>
            <a href="{{ route('register') }}" class="btn">Criar conta</a>
        </div>

        <x-application-logo class="logo logo-mobile" />

        <div class="welcome">
            <h2>Boas-vindas!</h2>
            <p>Entre utilizando uma das opções abaixo</p>
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

        <form action="{{ route('login') }}" method="POST" >
            @csrf
            <x-input id="email" type="email" name="email" label="Usuário" :value="old('email')"
                     placeholder="Ex: test@example.com" required autocomplete="off" />

            <x-input id="password" type="password" name="password" label="Senha" :value="old('password')"
                    placeholder="Digite sua senha" required autocomplete="off" />

            <div class="reverse">
                <div class="remember">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>Manter conectado</span>
                    </label>
                </div>
                <x-captcha />
                <x-primary-button icon="submit">
                    Entrar
                </x-primary-button>
            </div>
        </form>

        <div class="forget">
            <span>Esqueceu sua senha?</span>
            <a href="#">Recuperar senha</a>
        </div>
    </div>
</x-guest-layout>
