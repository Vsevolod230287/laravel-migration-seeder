@extends ('layouts.app')


@section('main')
@foreach ($trips as $trip)
<ul>
  <li>{{$trip}}</li>
</ul>
@endforeach
@endsection
