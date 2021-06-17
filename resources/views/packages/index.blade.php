@extends('layouts.app')

@section('main_content')
    <section class="container">
        <h1>Lista pacchetti viaggio</h1>
        <div class="card-container">
            @foreach ($packages as $package)
                <div class="package">
                    <div class="ms_row">
                        <div class="key">Nome pacchetto:</div>
                        <div>{{ $package->name }}</div>
                    </div>

                    <div class="ms_row">
                        <div class="key">Descrizione:</div>
                        <div>{{ $package->description }}</div>
                    </div>

                    <div class="ms_row">
                        <div class="key">Nome Hotel:</div>
                        <div>{{ $package->hotel_name }}</div>
                    </div>

                    
                </div>
            @endforeach
        </div>
    </section>
@endsection