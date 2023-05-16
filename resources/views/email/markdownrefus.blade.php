@component('mail::message')
<h1 style="text-align:center">Votre demande de réservation </h1>
<br>


<p style="text-align: center">Bonjour, {{$_POST['name']}}</p>

<p style="text-align: center"> Nous sommes aux regret de vous informez que votre demande de réservation pour le {{$_POST['date']}} à {{$_POST['heure']}} pour {{$_POST["nbpersonne"]}} personnes, ne peut être honorée.</p>

<br>
A très vite !
<br>
Caro et Mathias du Bayla
@endcomponent
