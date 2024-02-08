@extends('layouts.master')

@section('content')
<main role="main" class="container">
  <h1 class="mt-5 text-danger">Home</h1>
  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.

  {{-- This is how to use foreach loop --}}
  <div class="row mt-3">
    @foreach ($blogs as $blog)
      @if ($blog['status'] == 1)
      <div class="col-md-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h2>{{$blog['title']}}</h2>
            <p>{{$blog['content']}}</p>
            <div class="btn-sm btn-success">Process</div>
          </div>
        </div>
      </div>       
      @else
      <div class="col-md-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h2>{{$blog['title']}}</h2>
            <p>{{$blog['content']}}</p>
            <div class="btn-sm btn-warning">Pending</div>
          </div>
        </div>
      </div>
      @endif
    @endforeach
  </div>

  {{-- This is how to use for loop --}}
  <div class="row">
    @for($i = 0; $i < count($blogs); $i++)
      <div class="col-md-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h2>{{$blogs[$i]['title']}}</h2>
            <p>{{$blogs[$i]['content']}}</p>
          </div>
        </div>
      </div>
    @endfor
  </div>

  {{-- Usefull Blade Directives --}}

  @php
      $data = true;
      $i = 3;
      $x = '';
  @endphp

  @isset($data)
    <div class="alert alert-success mt-3">{{$data}}</div>
  @endisset

  @switch($i)
      @case(1)
          <div class="alert alert-danger">Danger</div>
          @break
      @case(2)
          <div class="alert alert-success">Success</div>
          @break
      @case(3)
          <div class="alert alert-warning">Warning</div>
          @break
      @default
          
  @endswitch

  @empty($x)
      <div class="alert alert-danger">This is empty</div>
  @endempty
</main>
@endsection


