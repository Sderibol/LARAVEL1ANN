<x-layout titlePage="Home">
    <x-header title="Benvenuto"/>
    @if(isset($product) && $product && $product->user)
        <a href="{{route('products.user', $product->user)}}">
            {{$product->user->name}}
        </a>
    @elseif(isset($product) && $product)
        <p>Utente eliminato</p>
    @else
        <p>Non sei registrato. <a href="{{route('register')}}">Registrati</a> o <a href="{{route('login')}}">Accedi</a>.</p>
    @endif
</x-layout>