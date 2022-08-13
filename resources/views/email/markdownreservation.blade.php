@component('mail::message')
<h1 style="text-align:center">Demande de réservation </h1>
<br>
<h2> Mail : {{$_POST['email']}}</h2>
<h2> Numéro : {{$_POST['phone']}}</h2>
<br>


<p>Date et heure : {{$_POST['date']}} pour le service du {{$_POST['service']}} à {{$_POST['heure']}}. Pour {{$_POST['nbpersonne']}} Personne(s)</p>
<p style="text-align: center">Détails: {{$_POST['message']}}</p>

{{-- @component('mail::button', ['url' => asset('email.getconfirmation/'{{$_POST["name"]}}'/'{{$_POST["date"]}}'/'{{$_POST["heure"]}}'/'{{$_POST["nbpersonne"]}}'/'{{$_POST["email"]}})])
Accepter
@endcomponent --}}

<br>

<a href='http://127.0.0.1:8000/getconfirmation?name={{$_POST['name']}}&phone={{$_POST['phone']}}&date={{$_POST['date']}}&message={{$_POST['message']}}&service={{$_POST['service']}}&heure={{$_POST['heure']}}&nbpersonne={{$_POST['nbpersonne']}}&email={{$_POST['email']}}'>Valider</a>

<br>
{{$_POST['name']}}
@endcomponent

<script src="../../public/js/mailconfirm.js"></script>
