@extends('layouts.master')
@section('content')

<head>
    <title> Calendário DPL </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='{{asset('assets/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
    <link href='{{asset('assets/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('assets/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('assets/fullcalendar/packages/list/main.css')}}' rel='stylesheet' />
    <link href='{{asset('assets/clockpicker/src/clockpicker.css')}}' rel='stylesheet' />
    <link href='{{asset('assets/fullcalendar/packages/bootstrap/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('assets/fullcalendar/css/style.css')}}' rel='stylesheet' />
</head>

<body>

@include('fullcalendar.modal-calendar')
@include('fullcalendar.modal-fastEvents')

    <div class="row">
        <div class="col-md-2">
            <section class="wrapper">
            </section>
        </div>

        <div class="col-md-2">
            <section class="wrapper">
            </section>
        </div>        
    </div>

  <div id='wrap'>

    <div id='external-events'>
      <h4>Eventos Rápidos</h4>

      <div id='external-events-list'> 
            @if($fastEvents)
                @foreach($fastEvents as $fastEvent)
                    <div 
                        style="padding: 4px; border: 1px solid {{ $fastEvent->color }}; background-color: {{ $fastEvent->color}};" 
                        class='fc-event' 
                        data-event='{"id":"{{ $fastEvent->id }}", "title":"{{ $fastEvent->title }}", "type":"{{ $fastEvent->type }}", "color":"{{ $fastEvent->color }}", "start":"{{ $fastEvent->start }}", "end":"{{ $fastEvent->end }}"}'>{{$fastEvent->title}}
                    </div>
                @endforeach
            @endif
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
        <button class="btn btn-sm btn-success" id="newFastEvent">Criar Novo Evento</button>
      </p>
    </div>

    <div 
        id='calendar'
        data-route-load-events="{{route('routeLoadEvents')}}"
        data-route-event-update="{{route('routeEventUpdate')}}"
        data-route-event-store="{{route('routeEventStore')}}"
        data-route-event-delete="{{route('routeEventDelete')}}"
        data-route-fast-event-update="{{route('routeFastEventUpdate')}}"
        data-route-fast-event-store="{{route('routeFastEventStore')}}"
        data-route-fast-event-delete="{{route('routeFastEventDelete')}}"
    ></div>

    <div style='clear:both'></div>

  </div>

    <script src='{{asset('assets/fullcalendar/packages/core/main.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/packages/interaction/main.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/packages/daygrid/main.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/packages/timegrid/main.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/packages/list/main.js')}}'></script>
    <script src="{{asset('js/bootstrap-clockpicker.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script></script>
    <script src="{{asset('js/moment.min.js')}}"></script></script>
    <script src='{{asset('assets/fullcalendar/js/script.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/js/calendar.js')}}'></script>
    <script src='{{asset('assets/clockpicker/src/clockpicker.js')}}'></script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker();
    </script>

</body>



@endsection

    