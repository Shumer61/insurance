@extends('frontend.main_master')
@section('content')


 <!-- middle end -->
<!-- insurance -->
        <section class="card " id="insurance">
            <div class="card_container_details">
                <div class="card_glass">
                    <img src="{{ asset($package->image)}}" alt="" class="card_img">

                    <div class="card_data">
                        <h3 class="card_title">{{$package->insurance_company}}: {{$package->package_name}} Package</h3>
                        <p class="card_details">
                            {{$package->coverage_type}}
                        </p><br>

                        <h2 class="card_title"  style="text-decoration: underline;">1. What Is Covered?</h2>

                        <table class="coverage-table">
                    <thead>
                        <tr>
                            <th>Benefits</th>
                            <th>Limit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add your table data dynamically -->
                        <tr>@if ($benefits)
                            <td>{{$benefits->benefit1}}</td>
                            <td>{{$benefits->limit1}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <tr>
                            @if ($benefits)
                            <td>{{$benefits->benefit2}}</td>
                            <td>{{$benefits->limit2}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <tr>@if ($benefits)
                            <td>{{$benefits->benefit3}}</td>
                            <td>{{$benefits->limit3}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <tr>
                            @if ($benefits)
                            <td>{{$benefits->benefit4}}</td>
                            <td>{{$benefits->limit4}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <tr>
                            @if ($benefits)
                            <td>{{$benefits->benefit5}}</td>
                            <td>{{$benefits->limit5}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <tr>
                            @if ($benefits)
                            <td>{{$benefits->benefit6}}</td>
                            <td>{{$benefits->limit6}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <tr>
                            @if ($benefits)
                            <td>{{$benefits->benefit7}}</td>
                            <td>{{$benefits->limit7}}</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                <br><br>
                <h2 class="card_title"  style="text-decoration: underline;">2. What Is Not Covered?</h2>

                        <table class="coverage-table">
                    <thead>
                        <tr>
                            <th>Exclusions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add your table data dynamically -->
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion1}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion2}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion3}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion4}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion5}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion6}}</td>
                            @else
                            
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion7}}</td>
                            @else
                            
                            @endif
                            
                        </tr>
                        <tr>@if ($exclusions)
                            <td>{{$exclusions->exclusion8}}</td>
                            @else
                            
                            @endif
                            
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table><br><br>

                <h2 class="card_title"  style="text-decoration: underline;">3. Waiting Period</h2>

                        <table class="coverage-table">
                    <thead>
                        <tr>
                            <th>Condition</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add your table data dynamically -->
                        <tr>@if ($periods)
                            <td>{{$periods->condition1}}</td>
                            <td>{{$periods->period1}}</td>
                            @else
                            
                            @endif
                        </tr>
                        <tr>
                            @if ($periods)
                            <td>{{$periods->condition2}}</td>
                            <td>{{$periods->period2}}</td>
                            @else
                            
                            @endif
                        </tr>
                        <tr>@if ($periods)
                            <td>{{$periods->condition3}}</td>
                            <td>{{$periods->period3}}</td>
                            @else
                            
                            @endif
                        </tr>
                        <tr>
                            @if ($periods)
                            <td>{{$periods->condition4}}</td>
                            <td>{{$periods->period4}}</td>
                            @else
                            
                            @endif
                        </tr>
                        <tr>
                            @if ($periods)
                            <td>{{$periods->condition5}}</td>
                            <td>{{$periods->period5}}</td>
                            @else
                            
                            @endif
                        </tr>
                        
                        <!-- Add more rows as needed -->
                    </tbody>
                </table><br>
                <h2 class="card_title"  style="text-decoration: underline;">4. List of Hospitals</h2>

                        <table class="coverage-table">
                    <thead>
                        <tr>
                            <th>Hospitals</th>
                            
                        </tr>
                    </thead>
                    <table>
                    <tbody>
                        <!-- Add your table data dynamically -->
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital1}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital2}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital3}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital4}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital5}}</td>
                            @else
                            <td></td>
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital6}}</td>
                            @else
                            
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital7}}</td>
                            @else
                            
                            @endif
                            
                        </tr>
                        <tr>@if ($hospitals)
                            <td>{{$hospitals->hospital8}}</td>
                            @else
                            
                            @endif
                            
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table><br><br>

                    </div>
                    
                </div>



                
            </div>


        </section>

<!-- insurance end -->

<!-- submit container -->


<!-- submit container end -->











@endsection