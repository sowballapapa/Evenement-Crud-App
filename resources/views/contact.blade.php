@extends('app')

@section('title', 'Nos Contacts')

@section('content')
    <div class="container align-content-center ">
        <h1>Contact</h1><hr>
        <div class="row col text-center bd-example fs-3">
            <address>
              <strong>Event Corporation</strong><br>
              1123 Fictional St,<br>
              San Francisco, CA 94103<br>

            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:first.last@example.com">contact.event@event.com</a>
              </address>
              <address>
                <strong>Téléphone</strong><br>
                <span>+221 00 000 00 00</span><br>
                <span>+221 00 000 00 00</span>
              </address>
          </div>
          <div class="row col">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3229.778890772487!2d-17.430154158249135!3d14.66957278570632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173b352825e23%3A0xd5d983cd7fb15d34!2sMH99%2BR5M%20Jet%20d&#39;eau%20de%20la%20place%20de%20l&#39;ind%C3%A9pendance%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1736382165283!5m2!1sfr!2ssn" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </div>
@endsection
