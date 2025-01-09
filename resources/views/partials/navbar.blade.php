
@php
$routeName = request()->route()->getName();
@endphp


<nav class="navbar navbar-expand-lg bg-body-tertiary shadow mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('event.index')}}">Evenement</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a @class(['nav-link', 'navActive' => $routeName === 'event.index']) href="{{route('event.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link', 'navActive' => $routeName === 'about']) href="{{route('about')}}">A propos</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link', 'navActive' => $routeName === 'contact']) href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
