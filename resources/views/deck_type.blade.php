@extends('layouts.default')

@section('title', 'YU-GI-OH')

@section('content')

    <div class="card-group">
    @foreach ($cards as $card)
        <div class="card">
            <div id="{{ $card->id }}"></div>
            <div class="card-body">
            <h5 class="card-title"> <b>Card name:</b> {{ $card->name }}</h5>
            </div>
            <div class="card-footer">
            @if ($card->card_type == 'Monster')
                <small class="text-muted"><b>ATK:</b> {{ $card->atk }} <b>DEF:</b> {{ $card->def }} </small>
            @else
                <small class="text-muted"><b>Type:</b> {{ $card->card_type }} </small>
            @endif
            </div>
        </div>
        <script>cardDescription( '{{ $card->name }}', {{ $card->id }} )</script>
    @endforeach
    </div>

    <div class="mt-4">
        {{ $cards->links() }}
    </div>

@endsection