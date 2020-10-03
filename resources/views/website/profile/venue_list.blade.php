<div class="row p-4">
    @foreach($user->venues as $venue)
        <?php
        /** @var \App\Venue $venue */
        $facilities = (json_decode($venue->facilities, true));
        $facilities = $facilities ? $facilities : [];
        ?>
        <div class="col-md-6 mb-4">
            <div class="listing-item-container list-layout">
                <span  class="listing-item">
                    <!-- Image -->
                    <div class="listing-item-image">
                        <a href="{{ route('venue.show', $venue->id) }}"> <img src="{{ asset($venue->venue_image) }}" alt="image"> </a>
                    </div>
                    <!-- Content -->
                    <div class="listing-item-content">
                        <span class="badge badge-pill list-banner @if(isNowOpen($venue)) badge-success @else badge-warning @endif text-uppercase">@if(isNowOpen($venue)) Now Open @else Closed @endif</span>
                        <div class="listing-item-inner">
                            <a href="{{ route('venue.show', $venue->id) }}"> <h3>{{ $venue->name }}</h3> </a>
                            <span> <small>{{ $venue->venue_category }}</small> </span>
                            @for ($i=0; $i<2; $i++)
                                @if(isset($facilities[$i]))
                                    <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase">{{ str_replace("_", " ", $facilities[$i]) }}</span></div>
                                @endif
                            @endfor
                        </div>
                        <a href="{{ route('venue.edit', $venue->id) }}" title="Edit Details" class="round-pill like-banner d-block bg-primary"><i class="fa fa-edit"></i></a>
                    </div>
                </span>
            </div>
        </div>
    @endforeach
</div>
