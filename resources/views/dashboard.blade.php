<x-app-layout>
    <div class="dashboard-container">
        <h1>Você está logado!</h1>
        <p>Bem-vindo ao sistema.</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>
</x-app-layout>
