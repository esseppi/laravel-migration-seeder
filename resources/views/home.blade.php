@extends('template.base')
@section('css', './css/app.css')
@section('main')
<main>
    <form action="{{ url('/search')}}" type="get">
        <input type="text" name="query" placeholder="Search Destination">
        <button type="submit">go</button>
    </form>
    <div class="container">
        @foreach ($trips as $trip)
        <div class="card">
            <header>
                <div>{{$trip['id']}}</div> 

                <form action="{{route('delete', ['id' => $trip['id']])}}" method="post">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button type="submit" class="dlt">dlt</button>
                </form>
            </header>
            <div>
                <span>Partenza: {{$trip['DepartureTime']}}</span>
                <p>{{$trip['DepartureStation']}}</p>
            </div>   
            <div>
                <span>Arrivo: {{$trip['ArrivalTime']}}</span>
                <p>{{$trip['ArrivalStation']}}</p>
            </div> 
            <footer>
                <button type="submit"><a href="{{ route('traintrip', ['id' => $trip['id']]) }}">More Info</a></button>
            </footer>
        </div>
        @endforeach
    </div>  
    {{-- {{ $trips->links() }} --}}
</main>
@endsection