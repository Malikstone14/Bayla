@extends('layout')


@section('content')
    <link rel="stylesheet" href="/css/contact.css">

    <body>
        <h1 class="titre">Une question ? N'hesitez pas à nous contacter</h1>
        <div class='onglet row col-12'>
            <button id='contactbtn' class="btn contact-onglet col-2">Contact</button>
            <button id='reservationbtn' class='btn reservation-onglet col-2'>Reservation</button>
            <button id='recrutementbtn' class='btn recrutement-onglet col-2'>Nous Rejoindre</button>
        </div>

        <div class='container row col-12'>
            <div id='contact' class="contact col-6 shadow">
                <h2>Formulaire de contact</h2>
                <form action="/action_page.php">
                    <label for="fname">Nom & prénom</label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

                    <label for="emailAddress">Email</label>
                    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div id='reservation' class="reservation col-6 shadow">
                <h2>Réservation</h2>
                <form action="/action_page.php">
                    <label for="fname">Nom & prénom</label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

                    <label for="emailAddress">Email</label>
                    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div id='recrutement' class="recrutement col-6 shadow">
                <h2>Rejoignez-nous</h2>
                <form action="/action_page.php">
                    <label for="fname">Nom & prénom</label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

                    <label for="emailAddress">Email</label>
                    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div class='map col-5'>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.983838456714!2d-0.3723064841379382!3d49.181893285827464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a43c0d1430323%3A0x1a21f5923c312601!2sBayla%20-%20Caf%C3%A9%20-%20Cocktails%20-%20Restaurant%20%F0%9F%94%A5!5e0!3m2!1sfr!2sfr!4v1658312082321!5m2!1sfr!2sfr"
                    class="shadow" width="100%" height="50%" style="border:0; margin-bottom:5%" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class='adresse shadow'>
                    <p> Bayla Restaurant</p>
                    <p>47 Rue Écuyère, 14000 Caen </p>
                    <p> 02.31.91.20.83 </p>
                </div>
                <br>
                <br>
                <div class='horaire shadow'>
                    <p>Lundi : Fermé</p>
                    <p>Mardi : 11H45 - 01H00</p>
                    <p>Mercredi : 11H45 - 01H00</p>
                    <p>Jeudi : 11H45 - 01H00</p>
                    <p>Vendredi : 11H45 - 01H00</p>
                    <p>Samedi : 11H45 - 01H00</p>
                    <p>Dimanche : Fermé (Sauf évenement prévu)</p>
                </div>
            </div>
        </div>
        <hr>
        <div class='widget-avis'>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-c9f4621f-a47d-4f8a-a562-3d93bd1bb1ec"></div>
        </div>



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
