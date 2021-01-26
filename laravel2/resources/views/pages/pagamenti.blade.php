@extends('layouts.main-layout')

@section('content')
  <h3>PAGAMENTI</h3>
  <ul>
    @foreach ($pagamenti as $pagamento)
    @if ($loop -> even)
      <li class="red">
    @else
      <li class="green">
    @endif
      {{ $pagamento['status'] }}
      {{ $pagamento['price'] }}
      {{ $pagamento['created_at'] }}
     </li>
    @endforeach
  </ul>
@endsection
