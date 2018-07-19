
<div class="item mx-3 {{ $class }}">
    <div class="name bg-light py-2 tw-shadow">
        <b>{{ donationItem()->getName($item) }} x{{ $item->amount }}</b>
    </div>
    <div class="image d-flex p-3 lh-2">
        <div class="image flex-fill">
            <img class="" src="{{ $item->image() }}" alt="{{ $item->nameid }}">
        </div>
        <div class="d-flex flex-fill">
            <div class="stat text-justify align-self-center">
                {{--ID: <b>{{ $item->id }}</b> <br>--}}
                Value: ${{ donationItem()->getCalculatedPrice($item) }} <br>
                Refine: +{{ $item->refine }} <br>
                Ubers: {{ donationItem()->getCalculatedValue($item) }}
            </div>
        </div>
    </div>
    <div class="footer d-flex flex-row justify-content-between bg-light tw-shadow-inner">
        <div class="cards flex-fill text-left p-2">

            @foreach (donationItem()->getCardCollection($item) as $card)
                <img class="item-card" src="{{ url('/images/card.png') }}"
                     alt="{{ $card }}"
                     data-toggle="tooltip"
                     data-placement="bottom"
                     title="'{{ donationItem()->getName($card) }}' has added ${{ donationItem()->getPrice($card) }} to this equipment value">
            @endforeach

        </div>
        <div class="location flex-fill text-right p-2">
            @if ($item instanceof \App\Storage)
                <span class="font-weight-bold">Storage</span>
            @elseif ($item instanceof \App\Inventory)
                <span class="font-weight-bold">Inventory</span>
            @elseif ($item instanceof \App\Cart)
                <span class="font-weight-bold">Cart</span>
            @else
                <span class="font-weight-bold">Unknown</span>
            @endif
        </div>
    </div>
</div>