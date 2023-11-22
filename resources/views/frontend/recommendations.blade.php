@extends('frontend.main_master')
@section('content')
<!-- insurance -->
<section>
<div class="container-fluid">
    @forelse($recommendations as $r)
        <div class="row">
            <div class="col-12">
                <div class="card_glass">
                        <img src="{{ asset($r->image) }}" alt="" class="card_img">

                        <div class="card_data">
                            <h3 class="card_title">{{$r->insurance_company}}</h3>
                            <h4> Package Name: {{$r->package_name}}</h4>
                            <p>Age: {{$r->age}}</p>
                            <p>Price: {{$r->exact_price}}</p>
                            @if($r->pre_exists == "No")
                            <p>Pre Condition: Best for People Without Pre Existing Conditions</p>
                            @else
                            <p>Pre Condition: Best for People With Pre Existing Conditions</p>
                            @endif
                            <p class="card_details">
                                {{$r->package_desc}}
                            </p>
                        </div>
                        <a href="{{ route('more.details',$r->id) }}" class="card_button">More Details</a>
                    </div>
            </div>
        </div><br><br>

    @empty
        <div class="row">
            <div class="col-12">
                <div class="card_glass">
                        

                        <div class="card_data">
                            <h3 class="card_title">No Package found unfortunately</h3>
                            
                        </div>
                        
                    </div>
            </div>
        </div>
    @endforelse
</div><br><br>
<section>

@endsection