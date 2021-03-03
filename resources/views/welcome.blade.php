@extends('template.main')


@section('content')


  @include('sections.hero')

  <main id="main">

    @include('sections.about')
    @include('sections.services')
    @include('sections.portfolio')
    @include('sections.contact')

  </main>




    
@endsection