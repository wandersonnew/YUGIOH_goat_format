@extends('layouts.default')

@section('title', 'YU-GI-OH')

@section('content')

    <div class="card-group">
    @foreach ($decks as $deck)
        <div class="card" style="width: 18rem;">
            <div id="{{ $deck->id }}"></div>
            <div class="card-body">
            <h5 class="card-title"> <b>Card name:</b> {{ $deck->name }}</h5>
            <!-- <b>Description:</b> <p class="card-text"> {{ $deck->card_text }}</p> -->
            </div>
            <div class="card-footer">
            @if ($deck->card_type == 'Monster')
                <small class="text-muted"><b>ATK:</b> {{ $deck->atk }} <b>DEF:</b> {{ $deck->def }} </small>
            @else
                <small class="text-muted"><b>Type:</b> {{ $deck->card_type }} </small>
            @endif
            </div>
        </div>
        <script>cardDescription( '{{ $deck->name }}', {{ $deck->id }} )</script>
    @endforeach
    </div>

    <div class="mt-4">
        {{ $decks->links() }}
    </div>

@endsection