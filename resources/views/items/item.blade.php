
<div class="item mx-3 {{ $class }}">
    <div class="name mb-2">
        <b>{{ donationItem()->getName($item) }} (#{{$item->nameid}})</b>
    </div>
    <div class="d-flex">
        <div class="image flex-fill">
            <img class="" src="{{ $item->image() }}" alt="{{ $item->nameid }}">
        </div>
        <div class="d-flex flex-fill">
            <div class="stat text-justify align-self-center">
                ID: <b>{{ $item->id }}</b> <br>
                Amount: {{ $item->amount }} <br>
                Value: ${{ donationItem()->getCalculatedPrice($item) }} <br>
                Refine: +{{ $item->refine }} <br>
                Ubers: {{ donationItem()->getCalculatedValue($item) }}
            </div>
        </div>
    </div>
    <div class="cards mt-2">

        @foreach (donationItem()->getCardCollection($item) as $card)
            <img class="item-card" src="{{ url('/images/card.png') }}"
                alt="{{ $card }}"
                data-toggle="tooltip"
                data-placement="bottom"
                title="'{{ donationItem()->getName($card) }}' has added ${{ donationItem()->getPrice($card) }} to this equipment value">
        @endforeach

    </div>
</div>