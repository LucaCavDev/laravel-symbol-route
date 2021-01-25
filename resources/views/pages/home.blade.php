@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>HOME</h1>

    <p>
      REPO: laravel-symbol-route<br>
      GOAL: sulla falsa riga della struttura vista a lezione (components, layouts, pages) generare 3 rotte separate:<br>
      - home<br>
      - blog<br>
      - about<br>
      La struttura generale (header, footer, ecc) resta invariata per ogni pagina, cambia solo il contenuto che riportera' il solo titolo della pagina.<br>
      Es:<br>
      Home:<br>
      header-comune<br>
      h1HOME/h1<br>
      footer-comune<br>
    </p>

    <h2>
      <a href="{{ route('about') }}">
        ABOUT
      </a>
    </h2>
    <h2>
      <a href="{{ route('blog') }}">
        BLOG
      </a>
    </h2>

    <p class="img">
      <img src="img/hacker.jpg" alt="hack" style="height: 250px; width: auto;">
    </p>
    <p class="img">
      <img src="{{ asset('img/cavolfiore.jpg') }}" style="height: 250px; width: auto;">
    </p>



  </div>

@endsection
