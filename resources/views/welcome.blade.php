@extends('layouts.default')

@section('content')
    <h1>Laravel Québec!</h1>

    <div class="signin">
        <h2>Connexion</h2>
        <form action="">
            <label for="email">Courriel:</label>
            <input type="email" name="email" id="email" />

            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" />

            <input type="submit" value="Connexion"/>
        </form>
    </div>

    <div class="signup">
        <h2>Inscription</h2>

        <label for="email">Courriel:</label>
        <input type="email" name="email" id="email" />

        <input type="submit" value="Inscription"/>
    </div>
@endsection