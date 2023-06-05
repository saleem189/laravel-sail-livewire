<div>
    @foreach ($quotes as $quote)
        <p>{{ $quote['quote'] }}</p>
    @endforeach

    <div class="mt-6">
        <button wire:click="refreshQuotes">Refresh</button>
    </div>

    <div class="mt-6" wire:poll.60000="refreshQuotes">
     Current time: {{ now() }}
    </div>
</div>

