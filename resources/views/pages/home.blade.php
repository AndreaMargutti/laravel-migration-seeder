@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
    {{-- @dd($trains) --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Treni disponibili il {{$day}}</h2>
                @forelse ( $trains as $trains )
                    @once($trains->departure_day)
                    @endonce
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{$trains->brand}}</strong></h5>
                        <p class="card-text">{{$trains->departure_day}}</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$trains->departure_station}} ---> {{$trains->arrival_station}}</li>
                        <li class="list-group-item">{{$trains->departure_hour}} ---> {{$trains->arrival_hour}}</li>
                        <li class="list-group-item">{{$trains->train_code}}</li>
                        <li class="list-group-item">{{$trains->wagon_number}}</li>
                        <li class="list-group-item">{{$trains->is_punctual}}</li>
                        <li class="list-group-item">{{$trains->is_canceled}}</li>
                      </ul>
                </div>
                @empty
                    <div class="col-12">
                        <h1>No trains available on this date...</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
