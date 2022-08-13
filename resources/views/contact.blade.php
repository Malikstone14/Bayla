@extends('layout')


@section('content')
<script src="contact.js"></script>
    <link rel="stylesheet" href="/css/contact.css">
        <body>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="contact-container">
                <div class="left-col">
                </div>
                <div class="right-col">
                    <h1>Formulaire de contact</h1>

                    <form id="contact-form" action="email.test" method="post">
                        @csrf
                        <label for="name">Nom & Prénom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
                        <label for="email">Adresse Email</label>
                        <input type="email" id="email" name="email" placeholder="Votre adresse Mail" required>
                        <label for="message">Message</label>
                        <textarea rows="6" placeholder="Votre Message" id="message" name="message" required></textarea>
                        <button type="submit" id="submit" name="submit">Envoyer</button>

                    </form>
                    <div id="error"></div>
                    <div id="success-msg"></div>
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
