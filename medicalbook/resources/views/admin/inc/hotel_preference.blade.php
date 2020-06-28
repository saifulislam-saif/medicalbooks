<div class="">
    <div class="">
        <div class="">

            <div class="">

                <h2 class="">Hotel Preferences</h2>

                <div class="mtNew-60 mtNew-60x1366 titlex1024 generalRoutine animated delay-3s fadeIn getHomeWrapper sm-generalRoutine">
                    <div class="text-danger text-center mt-3">
                        <span class="warning-message">{{ session('postSignin_error_message') }}</span>
                    </div>
                    <form method="post" id="gnprofile" action="{{route('travelpref.hotel_profile_update')}}" class="hotel-question mt-5  mx-auto">
                        {{ csrf_field() }}
                        <input type="hidden" name="type" value='3'>
                        <input type="hidden" name="profileCC" value='1'>
                        <input type="hidden" name="user_id" value="{{ Request::segment(3) }}">

                        <div class="row">
                            <div class="col-md-6">

                                <ul>
                                    <li class="questionHexagon3 qu">
                                        <div>
                                            <h4>My hotel preferences are...</h4>
                                            <p class="mt-3">Frequent cities i visit...</p>
                                        </div>
                                        <div class="CityListBox">
                                            @foreach($user_cities as $city)
                                                <div class="Citylist" id="citylist{{ str_replace(' ', '_', $city->City) }}">
                                                    <div class="hotelPreAddress">
                                                        <p class="hotelPreCity">
                                                            <span class="fa-pull-left">{{ $city->City }}, {{ $city->State }}</span>
                                                            <span class="fa-pull-right"><a class="text-danger removeCity" rel="{{ str_replace(' ', '_', $city->City) }}" href="#">Remove</a></span>
                                                        </p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                    <div class="airlineRatingbox mt-2 ml-4 mb-0">
                                                        <div class="hotelServices{{ str_replace(' ', '_', $city->City) }}">
                                                            @foreach($user_hotels as $hotels)
                                                                @if($hotels->City == $city->City)
                                                                    <div id="hotelproperty{{ $hotels->HotelCode }}" class="airtravelServices ">
                                                                        <div class="fa-pull-left">
                                                                            <!-- <img src="undefined" width="32px" alt="">-->
                                                                            {{ $hotels->HotelName }}
                                                                        </div>
                                                                        <div class="fa-pull-right">
                                                                            <p class="score fa-pull-left">
                                                                                <img src="{{ asset('skin/images/travel_preference/starFilledIcon.svg')}}" alt="" width="19px">
                                                                                <a href="" class="open-fadtripModale" data-toggle="modal" data-name="{{ $hotels->HotelName }}" data-image="undefined" data-key="{{ $hotels->HotelCode }}" data-target="#tripModal">Score {{ $hotels->rating }} </a>
                                                                            </p>
                                                                            <p class="fa-pull-right">
                                                                                <img class="removeHotel" rel="{{ $hotels->HotelCode }}" src="{{ asset('skin/images/travel_preference/icons8-delete-trash-24.png')}}" alt="" width="22px">
                                                                            </p>
                                                                            <input type="hidden" class="rattinginput" name="hotelrattinginput[{{ $hotels->HotelCode }}]" value="{{ $hotels->rating }}" id="rattinginput{{ $hotels->HotelCode }}">
                                                                        </div>
                                                                        <div class="clearfix">
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>

                                                        <div style="display: none;" class="searchHotelTxtbox{{ str_replace(' ', '_', $city->City) }} form-group ui-widget">
                                                            <input type="text" class="form-control searchHotelTxtbox ui-autocomplete-input" data-city="{{  $city->City }}" rel="{{ str_replace(' ', '_', $city->City) }}" autocomplete="off" id="ggg" aria-describedby="searchText" placeholder="Search By Hotel">
                                                        </div>
                                                        <div class="questionBox questionBoxWrapper travelProfile">
                                                            <a href="#" data-toggle="modal" data-target="">
                                                                <i class="material-icons anotherAirline">control_point</i>
                                                                <span class="anotherAirline showHotelTextBox" data-id="{{ str_replace(' ', '_', $city->City) }}"> Add Preferred Property</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div>
                                            <div style="display:none;" class="searchTxtbox1 form-group ui-widget">
                                                <input type="text" class="form-control" autocomplete="off" id="exampleInputSearch1" aria-describedby="searchText" placeholder="Search By City">
                                            </div>
                                            <div  class="questionBox questionBoxWrapper scoreWrapper travelProfile ">
                                                <a href="#" data-toggle="modal" data-target="">
                                                    <i class="material-icons anotherAirline">control_point</i>
                                                    <span class="anotherAirline anotherCityBtn"> Add Another City </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <!-- order and rank box end -->
                                <ul>
                                    <li class="otherCity questionHexagon3 qu">
                                        <div class="questionTitle">
                                            <p class="mt-3">All other cities...</p>
                                        </div>
                                        <div class="airlineRatingbox ChaiCodeBox mt-2 ml-4 mb-0">

                                            @foreach($userHotelChainPreferences as $row)
                                                <div id="hotelchain{{ $row->ChainCode }}" class="airtravelServices ">
                                                    <div class="fa-pull-left">
                                                        <!--<img src="undefined" width="32px" alt="">-->
                                                        {{ $row->ChainName }}
                                                    </div>
                                                    <div class="fa-pull-right">
                                                        <p class="score fa-pull-left">
                                                            <img src="{{ asset('skin/images/travel_preference/starFilledIcon.svg')}}" alt="" width="19px">
                                                            <a href="" class="open-fadtripModale" data-toggle="modal" data-name="{{ $row->ChainName }}" data-image="undefined" data-key="{{ $row->ChainCode }}" data-target="#tripModal">Score {{ $row->rating }} </a>
                                                        </p>
                                                        <p class="fa-pull-right">
                                                            <img class="removeHotelChain" rel="{{ $row->ChainCode }}" src="{{ asset('skin/images/travel_preference/icons8-delete-trash-24.png')}}" alt="" width="22px">
                                                        </p>
                                                        <input type="hidden" class="rattinginput" name="rattinginput[{{ $row->ChainCode }}]" value="{{ $row->rating }}" id="rattinginput{{ $row->ChainCode }}">
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </li>
                                </ul>


                                <ul>
                                    <li class="otherCity questionHexagon3 qu">
                                        <div style="display:none;" class="searchTxtbox form-group ui-widget">
                                            <input type="text" class="form-control" autocomplete="off" id="exampleInputSearch" aria-describedby="searchText" placeholder="Search By Chain Code">
                                        </div>
                                        <!-- Order and rank box start4 -->
                                        <div class="questionBox questionBoxWrapper travelProfile">
                                            <a href="#" data-toggle="modal" data-target="">
                                                <i class="material-icons anotherAirline">control_point</i>
                                                <span class="addchainbtn anotherAirline"> Add Another Chain </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>



                        <!-- order and rank box end -->


                        <div class="row">
                            <div class="col-md-9 permission-left">
                                <h3>Travel Question</h3>

                                <input type="hidden" name="category" value="3">

                                @foreach($travel_question as $row)
                                    @if($row->category==3)
                                        @if(!($row->hasquestion->count()))
                                            @php continue; @endphp
                                        @endif
                                        <div class="question-list">
                                            <div>
                                                <label>{{ $row->title }}</label>
                                            </div>
                                            <div style="padding-left: 35px" class="row">

                                                <div class="">
                                                    @if($row->type==1)
                                                        @foreach($row->hasquestion as $answer)

                                                            <div class="col-md-3">
                                                                <div class="checkbox">
                                                                    <label><input class="child-permission question-{{ $row->id }} {{ (in_array($answer->id,$exist_user_travel_answer))?'question-answer':'' }}" data-question_id="{{ $row->id }}" data-answer_id="{{ $answer->id }}" name="answer_id[]" {{ (in_array($answer->id,$exist_user_travel_answer))?'checked':'' }} value="{{ $answer->id }}" type="checkbox">
                                                                        {{ $answer->q_title }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @elseif($row->type==2)
                                                        @foreach($row->hasquestion as $answer)
                                                            <div class="questionBox questionBoxWrapper ">
                                                                <div class="clearfix"></div>
                                                                <div class="questionBox">
                                                                    <div>
                                                                        <output class="mx-auto"></output>
                                                                        <input class="" type="range" name="a_value[]" value="{{ answervalue($user_travel_answer,Request::segment(3),$answer->id) }}" min="{{ $answer->q_title }}" max="{{ $answer->q_value }}" data-rangeslider="">
                                                                        <input type="hidden" name="answer_id_slider[]" value="{{ $answer->id }}">
                                                                        <p class="mt-2 daysWrapper">
                                                                            <span class="fa-pull-left">{{ $answer->q_title }} days</span> <span class="fa-pull-right">{{ $answer->q_value }} days</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="dependency-{{$row->id}}">

                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>


                        <button type="submit" class="btn btn-xs flight-answer btn-info">Update</button>



                    </form>
                </div>




            </div>


            <!-- Modal 1 -->
            <div class="modalWrapper">
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a href="#"><i class="material-icons">arrow_back_ios</i></a>
                                <h4 class="modal-title mx-auto" id="exampleModalLongTitle"><img src="{{asset('/skin/images/temporeLogoWhite.svg')}}" alt="" width="45"/></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="text-center mtNew-20"> ADD PREFERRED HOTEL CHAIN(S)</h2>
                                <!-- image checkbox -->

                                <!-- Add Loader -->
                                <div class="col-xs-12 col-sm-12 col-md-12">


                                    <div class="row">
                                        @foreach($hotelLchainCodelist as $key => $service)
                                            <div  class="col-xs-4 col-sm-3 col-md-4 nopad text-center poupMargin">
                                                <label class="image-checkbox"  key="{{$key}}" apendclass="airtravelServices" name="{{$service['name']}}" imageurl="imageurla" listid="airlineprogram">
                                                    <img id="imageurls{{$key}}" class="img-responsive imgCenter" src=""  width="100px" />
                                                    <input type="checkbox"  @if(in_array($key,$userChainCode))
                                                    checked
                                                           @endif name="image[]" value="" />

                                                    <img class="img-responsive hidden checkCircle" src="{{asset('skin/images/icons/checkCircle.svg') }}"  width="100px" />
                                                </label>
                                                <label class="textLabel" >{{$service['name']}}</label>
                                            </div>
                                        @endforeach


                                    </div>


                                </div>
                                <!-- End Add Loader-->
                                <!-- End -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

            <!-- Modal rating -->

            <div class="modal fadtripModale" id="tripModal" tabindex="-1" role="dialog" aria-labelledby="tripModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tripModalTitle"> Rank Your Sentiments </h5>
                        </div>
                        <div class="modal-body mt-2">

                            <p class="mx-auto ratingAirName">

                            <div class="ratingWrapper">
                                <div class="hateIt">Hate it</div>
                                <div class="ratingInner">

                                    <span class="my-rating-9"></span>
                                    <span class="clearfix"></span>
                                    <span class="live-rating text-center starText"></span>
                                </div>
                                <div class="loveIt">Love it</div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <a href="#" class="text-center rattingdismiss" id="" data-dismiss="modal">OK</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End rating modal -->
        </div>
    </div>

</div>