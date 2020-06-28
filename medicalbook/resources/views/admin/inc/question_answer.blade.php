<div class="row">
    <div class="col-md-9 permission-left">
        <h3>Travel Question</h3>
        {{ Form::open(array('url' => 'admin/flight-answer-update/', 'files' => true, 'class'=>'form-horizontal question gqa')) }}
        <input type="hidden" name="category" value="1">
        <input type="hidden" name="user_id" value="{{ Request::segment(3) }}">
        @foreach($travel_question as $row)
            @if($row->category==1)
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

        <button type="submit"  class="btn btn-xs general-answer btn-info">Update</button>

        {!! Form::close() !!}
    </div>
</div>


<div class="row">
    <div class="col-md-9 permission-left">
        <h3>Flight Question</h3>
        {{ Form::open(array('url' => 'admin/flight-answer-update/', 'files' => true, 'class'=>'form-horizontal question fqa')) }}
        <input type="hidden" name="category" value="2">
        <input type="hidden" name="user_id" value="{{ Request::segment(3) }}">
        <div class="questionTitle fa-pull-left">  My Preferred Airlines</div>
        <div class="clearfix"></div>
        <div class="airlineRatingbox">
            <!-- Order and rank box start -->

            <div class="airtravelServices">
                <!-- Order and rank box start2 -->
                @php $i=0; @endphp
                @foreach($airLprglist as $key => $service)
                    @if(!in_array($key,$userailneprogram))
                        @continue
                    @endif
                    <div id="airlineprogram{{$key}}" class="questionBox questionBoxWrapper scoreWrapper">

                        <div class="fa-pull-left">
                            <img src="{{$service['imageurl']}}"   alt="" width="32px" /> {{$service['name']}}
                        </div>
                        <div class="fa-pull-right">
                            <p class="score fa-pull-left">  <img src="{{ asset('skin/images/travel_preference/starFilledIcon.svg')}}"   alt="" width="19px" /> <a class="open-fadtripModale" href="" data-image="{{$service['imageurl']}}" data-name="{{$service['name']}}"  data-key="{{$key}}" data-toggle="modal" data-target="#tripModal">Score {{ $userailneprogramrating[$i] }} </a> </p>
                            <p class="fa-pull-right"> <img src="{{ asset('skin/images/travel_preference/gripper.svg')}}"   alt="" width="22px" /> </p>
                            <input type="hidden" name="rattinginput[{{$key}}]" value="{{ $userailneprogramrating[$i] }}" id="rattinginput{{$key}}" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @php $i++; @endphp
            @endforeach
            <!-- order and rank box end -->
            </div>




            <!-- Order and rank box start4 -->
            <div class="questionBox questionBoxWrapper scoreWrapper travelProfile ">
                <a href="#"  data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons anotherAirline">control_point</i> <span class="anotherAirline"> Add Another Airline </span></a>
            </div>
            <!-- order and rank box end -->

        </div>
        @foreach($travel_question as $row)
            @if($row->category==2)
                @if(!($row->hasquestion->count()))
                    @php continue; @endphp
                @endif
                <div class="question-list">
                    <div>
                        <label>{{ $row->title }}</label>
                    </div>
                    <div style="padding-left: 35px" class="row">
                        @if($row->type==1)
                            <div class="">
                                @foreach($row->hasquestion as $key=>$answer)
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input class="child-permission question-{{ $row->id }} {{ (in_array($answer->id,$exist_user_travel_answer))?'question-answer':'' }}" data-question_id="{{ $row->id }}" data-answer_id="{{ $answer->id }}" name="answer_id[]" {{ (in_array($answer->id,$exist_user_travel_answer))?'checked':'' }} value="{{ $answer->id }}" type="checkbox">
                                                {{ $answer->q_title }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @elseif($row->type==2)
                            @foreach($row->hasquestion as $key=>$answer)
                            <div class="questionBox questionBoxWrapper">
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
                <div class="dependency-{{$row->id}}">

                </div>
            @endif
        @endforeach

        <button type="submit"  class="btn btn-xs flight-answer btn-info">Update</button>
        {!! Form::close() !!}

    </div>
</div>