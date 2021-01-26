@extends('layouts.main-layout')
@section('content')
  <h1>Pagamenti</h1>
  <ul>
    {{-- VERS 1 --}}
    @foreach ($pagamenti as $pagamento)
      @if ($loop -> even)
        <li class="red">
      @else
        <li class="green">
      @endif
        <h3>
          ID:{{ $pagamento['id'] }}
          STATUS:{{ $pagamento['status'] }}
          PRICE:{{ $pagamento['price'] }}
          prenotazione_id:{{ $pagamento['prenotazione_id'] }}
          pagante_id:{{ $pagamento['pagante_id'] }}
          created_at:{{ $pagamento['created_at'] }}
          updated_at:{{ $pagamento['updated_at'] }}
        </h3>
      </li>
    @endforeach
  </ul>
  <br>
@endsection
