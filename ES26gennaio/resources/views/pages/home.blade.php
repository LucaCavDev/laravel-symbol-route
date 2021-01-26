@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>HOME</h1>

    <p>
      REPO: laravel-symbol-route (aggiungere progetto alla repo di ieri) <br>
      GOAL: basandosi sull'array pagamenti in allegato, creare 2 rotte:<br>
      - pagamenti: in cui verranno listati tutti i pagamenti stampati <br>
      con due colori diversi un colore per riga (come visto a lezione verde/rosso)<br>
      - pagamentipending: in cui verranno listati con <br>
      la stessa grafica precedente i soli pagamenti pending<br>
      NOTE: come sempre generare progetto nuovo con scafolding base (include/yield/extends + css + js); <br>
    </p>

    <h2>
      <a href="{{ route('pagamenti') }}">
        PAGAMENTI
      </a>
    </h2>



  </div>

@endsection
