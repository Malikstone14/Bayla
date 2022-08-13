@extends('layout')


@section('content')

<link rel="stylesheet" href="/css/reservation.css">
       <body>
           @if ($message = Session::get('success'))
           <div class="alert alert-success">
               <p>{{ $message }}</p>
           </div>
           @endif
           <div class="contact-container">
            <div class="right-col">
                <h1>Formulaire de Réservation</h1>
     
                <form id="contact-form" action="email.markdownreservation" method="post">
                    @csrf
                    <label for="name">Nom & Prénom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre adresse Mail" required>
                    <label for="phone">Numéro de téléphone</label>
                    <input type="tel" id="phone" name="phone" pattern="^[0-9]{10}]$">
                    <label for="date">Date</label>
                    <input type="text" class="date" id="date" name="date">
                    <label for="sujet">Service</label>
                    <select name="service" id="service" onchange="Afficher(this)"> 
                        <option disabled selected value> -- Selectionnez un service -- </option>
                        <option value="Déjeuner">Déjeuner</option>
                        <option value="Diner">Diner</option>
                    </select>
                    <select name="heure" id="midi">
                        <option disabled selected value> -- Selectionnez une heure -- </option>
                        <option value="11h">11h00</option>
                        <option value="11h30">11h30</option>
                        <option value="12h">12h00</option>
                        <option value="12h30">12h30</option>
                        <option value="13h">13h00</option>
                        <option value="13h30">13h30</option>
                    </select>
                    <select name="heure" id="soir">
                        <option disabled selected value> -- Selectionnez une heure -- </option>
                        <option value="19h">19h00</option>
                        <option value="19h30">19h30</option>
                        <option value="20h">20h00</option>
                        <option value="20h30">20h30</option>
                        <option value="21h">21h00</option>
                        <option value="21h30">21h30</option>
                        <option value="22h">22h00</option>
                    </select>
<br>
                    <label for="nbpersonne">Nombre de personnes</label>
                    <input type="number" name='nbpersonne' id='nbpersonne'>
                    <label for="message">Précision (facultatif)</label>
                    <textarea rows="6" placeholder="Saisissez vos précisions" id="message" name="message" value=""></textarea>
                    <button type="submit" id="submit" name="submit">Envoyer</button>
     
                </form>
                <div id="error"></div>
                <div id="success-msg"></div>
            </div>
               <div class="left-col">
               </div>

           </div>
    </body>
    
    <script src="js/reservation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
