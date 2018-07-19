
<div class="item tw-shadow overflow-hidden mb-4">
    <div class="name bg-light py-2 tw-shadow">
        <b>{{ donationItem()->getName($item) }} x{{ $item->amount }}</b>
    </div>
    <div class="image d-flex p-3 lh-2">
        <div class="image flex-fill">
            <img class="" src="{{ $item->image() }}" alt="{{ $item->nameid }}">
        </div>
        <div class="d-flex flex-fill">
            <div class="stat text-justify align-self-center tracking-wide">
                {{--ID: <b>{{ $item->id }}</b> <br>--}}
                <span class="font-weight-normal">Value</span>: ${{ donationItem()->getCalculatedPrice($item) }} <br>
                <span class="font-weight-normal">Refine</span>: +{{ $item->refine }} <br>
                <span class="font-weight-normal">Ubers</span>: {{ donationItem()->getCalculatedValue($item) }}
            </div>
        </div>
    </div>
    <div class="footer d-flex flex-row justify-content-between bg-light tw-shadow-inner">
        <div class="cards flex-fill text-left py-2 px-3">

            @foreach (donationItem()->getCardCollection($item) as $card)
                <img class="item-card" src="{{ url('/images/card.png') }}"
                     alt="{{ $card }}"
                     data-toggle="tooltip"
                     data-placement="bottom"
                     title="'{{ donationItem()->getName($card) }}' has added ${{ donationItem()->getPrice($card) }} to this equipment value">
            @endforeach

        </div>
        <div class="location flex-fill text-right py-2 px-3">
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