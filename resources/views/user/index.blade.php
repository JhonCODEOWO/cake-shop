@extends('navigation/templates/template')
@section('title', 'Usuarios')
@section('content')
    <div class="flex justify-between mb-4">
        <livewire:ui.title title="Usuarios">
        <a class="btn btn-success" href="{{route('user.create')}}">Crear nuevo usuario...</a>
    </div>

  <section class="px-5 mt-5">
    <livewire:user.userstable />
  </section>
@endsection
