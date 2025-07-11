<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  @livewireStyles
</head>

<body class="flex flex-col h-dvh">
  @include('navigation/header')
  <section class="grow flex">
    <ul class="menu bg-base-200 rounded-box justify-end">
      <li>
        <a class="tooltip tooltip-right" data-tip="Pedidos" href="{{ route('sales.index') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7 8q-.825 0-1.412-.587T5 6V4q0-.825.588-1.412T7 2h10q.825 0 1.413.588T19 4v2q0 .825-.587 1.413T17 8zm0-2h10V4H7zM4 22q-.825 0-1.412-.587T2 20v-1h20v1q0 .825-.587 1.413T20 22zm-2-4l3.475-7.825q.25-.55.75-.862T7.3 9h9.4q.575 0 1.075.313t.75.862L22 18zm6.5-2h1q.2 0 .35-.15t.15-.35t-.15-.35T9.5 15h-1q-.2 0-.35.15T8 15.5t.15.35t.35.15m0-2h1q.2 0 .35-.15t.15-.35t-.15-.35T9.5 13h-1q-.2 0-.35.15T8 13.5t.15.35t.35.15m0-2h1q.2 0 .35-.15t.15-.35t-.15-.35T9.5 11h-1q-.2 0-.35.15T8 11.5t.15.35t.35.15m3 4h1q.2 0 .35-.15t.15-.35t-.15-.35t-.35-.15h-1q-.2 0-.35.15t-.15.35t.15.35t.35.15m0-2h1q.2 0 .35-.15t.15-.35t-.15-.35t-.35-.15h-1q-.2 0-.35.15t-.15.35t.15.35t.35.15m0-2h1q.2 0 .35-.15t.15-.35t-.15-.35t-.35-.15h-1q-.2 0-.35.15t-.15.35t.15.35t.35.15m3 4h1q.2 0 .35-.15t.15-.35t-.15-.35t-.35-.15h-1q-.2 0-.35.15t-.15.35t.15.35t.35.15m0-2h1q.2 0 .35-.15t.15-.35t-.15-.35t-.35-.15h-1q-.2 0-.35.15t-.15.35t.15.35t.35.15m0-2h1q.2 0 .35-.15t.15-.35t-.15-.35t-.35-.15h-1q-.2 0-.35.15t-.15.35t.15.35t.35.15"/></svg>
        </a>
      </li>
      <li>
        <a class="tooltip tooltip-right" data-tip="Archivos" href="{{ route('files.index') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20q-.825 0-1.412-.587T2 18v-3h9q.825 0 1.413-.587T13 13V4h7q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm-2-6V8q0-.825.588-1.412T4 6h6zm3.825-1L11 7.825V13z"/></svg>
        </a>
      </li>
      <li>
        <a class="tooltip tooltip-right" data-tip="Productos" href="{{ route('products.index') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 22q-.825 0-1.412-.587T3 20V8.725q-.45-.275-.725-.712T2 7V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4v3q0 .575-.275 1.013T21 8.724V20q0 .825-.587 1.413T19 22zM5 9v11h14V9zM4 7h16V4H4zm5 7h6v-2H9zm3 .5"/></svg>
        </a>
      </li>
      <li>
        <a class="tooltip tooltip-right" data-tip="Usuarios" href="{{ route('user.index') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M10.3 19.8q1.125-2.275 3-3.037T16.5 16q.575 0 1.125.1t1.075.25q.6-.95.95-2.05T20 12q0-3.35-2.325-5.675T12 4T6.325 6.325T4 12q0 1.125.287 2.15t.863 1.9q1.025-.5 2.125-.775T9.5 15q.8 0 1.537.138t1.463.362q-.575.3-1.088.7t-.962.85q-.3-.05-.512-.05H9.5q-.8 0-1.588.175T6.4 17.7q.8.8 1.788 1.338t2.112.762M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m-2.5-8.5q-1.45 0-2.475-1.025T6 10t1.025-2.475T9.5 6.5t2.475 1.025T13 10t-1.025 2.475T9.5 13.5m0-2q.625 0 1.063-.437T11 10t-.437-1.062T9.5 8.5t-1.062.438T8 10t.438 1.063T9.5 11.5m7 3q-1.05 0-1.775-.725T14 12t.725-1.775T16.5 9.5t1.775.725T19 12t-.725 1.775t-1.775.725M12 12" />
          </svg>
        </a>
      </li>
      <li>
        <a class="tooltip tooltip-right" data-tip="Home" href="{{ route('index') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </a>
      </li>
      <li>
        <a class="tooltip tooltip-right" data-tip="Details">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
      </li>
    </ul>
    <div class="grow max-h-[calc(100dvh-64px)] overflow-y-auto p-3">
      @yield('content')
    </div>
  </section>
  @include('navigation/footer')
  @livewireStyles
  @vite('resources/js/app.js')
</body>
</html>
