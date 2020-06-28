@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>User Account Details {{ session('test_session') }}</li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabbable tabbable-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_0" data-toggle="tab">Basic Info</a>
                    </li>
                    <li>
                        <a href="#tab_1" data-toggle="tab">Loyalty Program</a>
                    </li>
                    <li>
                        <a href="#tab_2" data-toggle="tab">Use Calendar</a>
                    </li>
                    <li>
                        <a href="#tab_3" data-toggle="tab">Driving License</a>
                    </li>
                    <li>
                        <a href="#tab_4" data-toggle="tab">Payment Details</a>
                    </li>
                    <li>
                        <a href="#tab_5" data-toggle="tab">Travel Question</a>
                    </li>
                    <li>
                        <a href="#tab_6" data-toggle="tab">Home Location</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        <div class="form-group">
                            <label for="email">Email: {{ $user->email }}</label>
                        </div>

                        <div class="form-group">
                            <label for="name">Phone: {{ $user->phone_number }}</label>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_1">
                        <div class="airline-wrapper">
                            <h3>Airline Loyalty Program</h3>
                            @if($user->userairlineloyaltyprograms->count())
                                <table class="table table-striped table-bordered table-hover airline-loyalty-program">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Value</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach($user->userairlineloyaltyprograms as $ualp)
                                        <tr>
                                            <td>{{ $ualp->airlineloyaltyprogram->alp_name }}</td>
                                            <td><img height="40" src="{{ Storage::disk('s3')->temporaryUrl($ualp->airlineloyaltyprogram->alp_photo, \Carbon\Carbon::now()->addMinutes(10)) }}"></td>
                                            <td class="available-{{ $ualp->id }}">{{ Crypt::decryptString($ualp->pvalue) }}</td>
                                            <td>
                                                <a href="#" class="airline-loyalty-program-edit" data-id="{{ $ualp->id }}" data-image="{{ Storage::disk('s3')->temporaryUrl($ualp->airlineloyaltyprogram->alp_photo, \Carbon\Carbon::now()->addMinutes(10)) }}" data-pvalue="{{ Crypt::decryptString($ualp->pvalue) }}" data-toggle="modal" data-target="#airline-loyalty-program-edit"><i class="fa fa-edit"></i></a>&nbsp &nbsp&nbsp
                                                <a class="airline-loyalty-program-delete airline-loyalty-program-delete-{{ $ualp->id }}" data-id="{{ $ualp->id }}" href="{{ url('admin/user-airline-program-delete/'.$ualp->id) }}"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <p>Airline Loyalty Program was not found</p>
                            @endif
                        </div>

                        <div class="hotel-wrapper">
                            <h3>Hotel Loyalty Program</h3>
                            @if($user->userhotelloyaltyprograms->count())
                            <table class="table table-striped table-bordered table-hover hotel-loyalty-program">
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Value</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($user->userhotelloyaltyprograms as $uhlp)
                                    <tr>
                                        <td>{{ $uhlp->hotelloyaltyprogram->hlp_name }}</td>
                                        <td><img height="40" src="{{ Storage::disk('s3')->temporaryUrl($uhlp->hotelloyaltyprogram->hlp_photo, \Carbon\Carbon::now()->addMinutes(10)) }}"></td>
                                        <td class="hotel-{{ $uhlp->id }}">{{ Crypt::decryptString($uhlp->pvalue) }}</td>
                                        <td>
                                            <a href="#" class="hotel-loyalty-program-edit" data-id="{{ $uhlp->id }}" data-image="{{ Storage::disk('s3')->temporaryUrl($uhlp->hotelloyaltyprogram->hlp_photo, \Carbon\Carbon::now()->addMinutes(10)) }}" data-pvalue="{{ Crypt::decryptString($uhlp->pvalue) }}" data-toggle="modal" data-target="#hotel-loyalty-program-edit"><i class="fa fa-edit"></i></a>&nbsp &nbsp&nbsp
                                            <a class="hotel-loyalty-program-delete hotel-loyalty-program-delete-{{ $uhlp->id }}" data-id="{{ $uhlp->id }}" href="{{ url('admin/user-hotel-program-delete/'.$uhlp->id) }}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            @else
                                <p>Hotel Loyalty Program was not found</p>
                            @endif
                        </div>

                        <div class="security-services-wrapper">
                            <h3>Security Service</h3>
                            @if($user->usersecurityservices->count())
                            <table class="table table-striped table-bordered table-hover security-services">
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Last4</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($user->usersecurityservices as $uss)
                                    <tr>
                                        <td>{{ $uss->securityservices->ss_name }}</td>
                                        <td><img height="40" src="{{ Storage::disk('s3')->temporaryUrl($uss->securityservices->ss_photo, \Carbon\Carbon::now()->addMinutes(10)) }}"></td>
                                        <td>{{ $uss->last4 }}</td>
                                        <td>
                                            <a class="security-services-delete security-services-delete-{{ $uss->id }}" data-id="{{ $uss->id }}" href="{{ url('admin/user-security-services-delete/'.$uss->id) }}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            @else
                                <p>Security Service was not found</p>
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane " id="tab_2">
                        @if($user->calenderapi->count())
                            <table class="table table-striped table-bordered table-hover security-services">
                                <tr>
                                    <th>Type</th>
                                    <th>Preferred Name</th>
                                </tr>
                                @foreach($user->calenderapi as $uc)
                                    <tr>
                                        <td>{{ ($uc->type==1)?'Google':'Microsoft' }}</td>
                                        <td>{{ $uc->pefered_name }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <div class="form-group">
                                <p>Calendar was not found</p>
                            </div>
                        @endif
                    </div>

                    <div class="tab-pane " id="tab_3">
                        @if($user->drivinglicense)
                            <div class="form-group">
                                @if(isset($user->drivinglicense->name) &&  $user->drivinglicense->name)
                                    <label><b>Name:</b>{{ $user->drivinglicense->name }}</label>
                                @elseif(isset($user->drivinglicense->f_name) && $user->drivinglicense->f_name)
                                    <label><b>Name:</b> {{ $user->drivinglicense->f_name }}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                @if(isset($user->drivinglicense->license_id) &&  $user->drivinglicense->license_id)
                                    <label><b>ID:</b> {{ $user->drivinglicense->license_id }}</label>
                                @elseif(isset($user->drivinglicense->f_license_id) && $user->drivinglicense->f_license_id)
                                    <label><b>ID:</b> {{ $user->drivinglicense->f_license_id }}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                @if(isset($user->drivinglicense->date_of_expiry) &&  $user->drivinglicense->date_of_expiry)
                                    <label><b>ID Expiration:</b> {{ date('m-d-Y',strtotime($user->drivinglicense->date_of_expiry)) }}</label>
                                @elseif(isset($user->drivinglicense->f_date_of_expiry) && $user->drivinglicense->f_date_of_expiry)
                                    <label><b>ID Expiration:</b> {{ date('m-d-Y',strtotime($user->drivinglicense->f_date_of_expiry))  }}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                @if(isset($user->drivinglicense->tsa_name) &&  $user->drivinglicense->tsa_name)
                                    <label><b>Travier (TSA Name):</b> {{ $user->drivinglicense->tsa_name }}</label>
                                @elseif(isset($user->drivinglicense->f_tsa_name) && $user->drivinglicense->f_tsa_name)
                                    <label><b>Travier (TSA Name):</b> {{ $user->drivinglicense->f_tsa_name }}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                @if(isset($user->drivinglicense->date_of_birth) &&  $user->drivinglicense->date_of_birth)
                                    <label><b>Birthdate:</b> {{ date('m-d-Y',strtotime($user->drivinglicense->date_of_birth)) }}</label>
                                @elseif(isset($user->drivinglicense->f_date_of_birth) && $user->drivinglicense->f_date_of_birth)
                                    <label><b>Birthdate:</b> {{ date('m-d-Y',strtotime($user->drivinglicense->f_date_of_birth)) }}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                @if(isset($user->drivinglicense->addressline1) &&  $user->drivinglicense->addressline1)
                                    <label><b>Address:</b> {{ $user->drivinglicense->addressline1.', '.$user->drivinglicense->city.', '.$user->drivinglicense->state.' '.$user->drivinglicense->postcode }}</label>
                                @elseif(isset($user->drivinglicense->f_addressline1) && $user->drivinglicense->f_addressline1)
                                    <label><b>Address:</b> {{ $user->drivinglicense->f_addressline1.', '.$user->drivinglicense->f_city.', '.$user->drivinglicense->f_state.' '.$user->drivinglicense->f_postcode }}</label>
                                @endif
                            </div>
                            <a href="#" class="driving-license-edit btn btn-xs btn-primary" data-id="{{ $user->drivinglicense->id }}"  data-name="{{ $user->drivinglicense->name }}" data-f_name="{{ $user->drivinglicense->f_name }}" data-license_id="{{ $user->drivinglicense->license_id }}" data-f_license_id="{{ $user->drivinglicense->f_license_id }}" data-date_of_expiry="{{ $user->drivinglicense->date_of_expiry }}" data-f_date_of_expiry="{{ $user->drivinglicense->f_date_of_expiry }}" data-date_of_birth="{{ $user->drivinglicense->date_of_birth }}" data-f_date_of_birth="{{ $user->drivinglicense->f_date_of_birth }}" data-tsa_name="{{ $user->drivinglicense->tsa_name }}" data-f_tsa_name="{{ $user->drivinglicense->f_tsa_name }}" data-toggle="modal" data-target="#driving-license-edit">Edit</a>
                        @else
                            <div class="form-group">
                                <p>Driving License was not found</p>
                            </div>
                        @endif
                    </div>


                    <div class="tab-pane " id="tab_4">
                        <div class="form-group">
                            @if($user->usercreditcard->count())
                                <div class="payment-wrapper">
                                    <table class="table table-striped table-bordered table-hover payment">
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Is Default</th>
                                            <th>Last4</th>
                                            <th>Expiration Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach($user->usercreditcard as $ucc)
                                            <tr>
                                                <td>{{ $ucc->card_type_name }}</td>
                                                <td class="payment-{{ $ucc->id }}-type">{{ $ucc->type }}</td>
                                                <td class="payment-{{ $ucc->id }}-isdefault">{{ ($ucc->isdefault==1)?'Yes':'No' }}</td>
                                                <td>{{ $ucc->last4 }}</td>
                                                <td>{{ $ucc->expdate }}</td>
                                                <td class="payment-{{ $ucc->id }}-action">
                                                    <a href="#" class="payment-edit" data-id="{{ $ucc->id }}"  data-type="{{ $ucc->type }}" data-isdefault="{{ $ucc->isdefault }}" data-toggle="modal" data-target="#payment-edit"><i class="fa fa-edit"></i></a>&nbsp &nbsp&nbsp
                                                    <a class="payment-delete payment-delete-{{ $ucc->id }}" data-id="{{ $ucc->id }}" href="{{ url('admin/user-payment-delete/'.$ucc->id) }}"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            @else
                                <p>Payment detail was not found</p>
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane " id="tab_5">
                        @include('admin.inc.question_answer')
                    </div>

                    <div class="tab-pane " id="tab_6">
                        @if($user->homelocation)
                            <div class="form-group">
                                <label><b>Airport Code:</b> <span class="airport-code">{{ $user->homelocation->airport_code }}</span></label>
                            </div>
                            <div class="form-group">
                                <label><b>Name:</b> <span class="airport-name">{{ $user->homelocation->airport_name }}</span> </label>
                            </div>
                            <a href="#" class="home-location-edit btn btn-xs btn-primary" data-id="{{ $user->homelocation->id }}"  data-airport_name="{{ $user->homelocation->airport_name }}" data-airport_code="{{ $user->homelocation->airport_code }}" data-toggle="modal" data-target="#home-location-edit">Edit</a>
                        @else
                            <div class="form-group">
                                <p>Home Location was not found</p>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!--Travel Answer update successfull modal -->
    <div class="modal fade" id="travel-question-update" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading travel-question-title"></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="airline-loyalty-program-success">
                                                Answers has been updated successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!--Airline Modal -->
    <div class="modal fade" id="airline-loyalty-program-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Airline Loyalty Program Update</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 airline-loyalty-program-update">

                                            <div class="airline-loyalty-program-form">
                                                <div class="form-group">
                                                    <label>Value</label>
                                                    <input class="form-control" name="pvalue" required="">
                                                    <input type="hidden" name="user_loyalty_program_id">
                                                </div>
                                                <p class="btn btn-primary airline-loyalty-program-submit" id="submit">Update</p>
                                            </div>
                                            <div class="airline-loyalty-program-success">
                                                Record has been updated successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Hotel Modal -->
    <div class="modal fade" id="hotel-loyalty-program-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Hotel Loyalty Program Update</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 hotel-loyalty-program-update">

                                            <div class="hotel-loyalty-program-form">
                                                <div class="form-group">
                                                    <label>Value</label>
                                                    <input class="form-control" name="pvalue" required="">
                                                    <input type="hidden" name="user_loyalty_program_id">
                                                </div>
                                                <p class="btn btn-primary hotel-loyalty-program-submit" id="submit">Update</p>
                                            </div>
                                            <div class="hotel-loyalty-program-success">
                                                Record has been updated successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Driving License Modal -->
    <div class="modal fade" id="driving-license-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Driving License Update</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 driving-license-update">

                                            <div class="driving-license-form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Back Name</label>
                                                            <input class="form-control" type="text" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Front Name</label>
                                                            <input class="form-control" type="text" name="f_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Back ID</label>
                                                            <input class="form-control" readonly type="text" name="license_id">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Front ID</label>
                                                            <input class="form-control" readonly type="text" name="f_license_id">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Back ID Expiration</label>
                                                        <div class="input-group form-group input-medium date date-picker"  data-date="{{ $user->drivinglicense->date_of_expiry or '' }}" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                                            <input type="text" name="date_of_expiry" class="form-control" readonly>
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-info" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Front ID Expiration</label>
                                                        <div class="input-group form-group input-medium date date-picker"  data-date="{{ $user->drivinglicense->f_date_of_expiry or '' }}" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                                            <input type="text" name="f_date_of_expiry" class="form-control" readonly>
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-info" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Back Travier (TSA Name)</label>
                                                            <input class="form-control" type="text" name="tsa_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Front Travier (TSA Name)</label>
                                                            <input class="form-control" type="text" name="f_tsa_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 date_of_birth">
                                                        <label>Back Birthdate</label>
                                                        <div class="input-group form-group input-medium date date-picker"  data-date="{{ $user->drivinglicense->date_of_birth or '' }}" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                                            <input type="text" name="date_of_birth" class="form-control" readonly>
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-info" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Front Birthdate</label>
                                                        <div class="input-group form-group input-medium date date-picker"  data-date="{{ $user->drivinglicense->f_date_of_birth or '' }}" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                                            <input type="text" name="f_date_of_birth" class="form-control" readonly>
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-info" type="button"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="user_driving_license_id">
                                                <p class="btn btn-primary driving-license-submit" id="submit">Update</p>
                                            </div>
                                            <div class="driving-license-success">
                                                Record has been updated successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--Payment Modal -->
    <div class="modal fade" id="payment-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Payment Update</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 payment-update">

                                            <div class="payment-form">
                                                <div class="form-group">
                                                    <label>Payment Type</label>
                                                    {!! Form::select('type', ['Personal' => 'Personal','Business' => 'Business','Meeting' => 'Meeting','Other' => 'Other'], '' ,['class'=>'form-control']) !!}
                                                </div>
                                                <div class="form-group">
                                                    <label>Is Default</label>
                                                    {!! Form::select('isdefault', ['1' => 'Yes','0' => 'No'], '' ,['class'=>'form-control']) !!}
                                                </div>
                                                <input type="hidden" name="user_payment_id">
                                                <p class="btn btn-primary payment-submit" id="submit">Update</p>
                                            </div>
                                            <div class="payment-success">
                                                Record has been updated successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Airline Modal -->
    <div class="modalWrapper">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#"><i class="material-icons">arrow_back_ios</i></a>
                        <h4 class="modal-title mx-auto" id="exampleModalLongTitle"><img src="images/temporeLogoWhite.svg" alt="" width="45"/></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-center mtNew-20"> ADD PREFERED AIRLINE(S)</h2>
                        <!-- image checkbox -->

                        <!-- Add Loader -->
                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="row">
                                @foreach($airLprglist as $key => $service)
                                    <div  class="col-xs-4 col-sm-3 col-md-4 nopad text-center poupMargin">
                                        <label class="image-checkbox"  key="{{$key}}" apendclass="airtravelServices" name="{{$service['name']}}" imageurl="imageurla" listid="airlineprogram">
                                            <img id="imageurla{{$key}}" class="img-responsive imgCenter" src="{{$service['imageurl']}}"  width="100px" />
                                            <input type="checkbox"  @if(in_array($key,$userailneprogram))
                                            checked
                                                   @endif name="image[]" value="" />

                                            <img class="img-responsive hidden checkCircle" src=""  width="100px" />
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
    <!-- End Airline Modal -->

    <!-- Modal rating -->

    <div class="modal fadtripModale" id="tripModal" tabindex="-1" role="dialog" aria-labelledby="tripModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tripModalTitle"> Rank Your Sentiments </h5>
                </div>
                <div class="modal-body mt-2">

                    <p class="mx-auto ratingAirName">
                        <img src="images/travel_preference/americanAirlinesLogo.png"   alt="" width="32px" /> American</p>
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


    <!--Home Location Modal -->
    <div class="modal fade" id="home-location-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Home Location Update</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 home-location-update">

                                            <div class="home-location-form">

                                                        <div class="form-group">
                                                            <label>Airport Code</label>
                                                            <input class="form-control" type="text" name="airport_code">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Airport Name</label>
                                                            <input class="form-control" type="text" name="airport_name">
                                                        </div>


                                                <input type="hidden" name="user_home_location_id">
                                                <p class="btn btn-primary home-location-submit" id="submit">Update</p>
                                            </div>
                                            <div class="home-location-success" style="display: none">
                                                Record has been updated successfully.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>







@endsection

@section('js')
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/typeahead/handlebars.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/typeahead/typeahead.bundle.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/scripts/form-components.js') }}"></script>
    <script src="{{ asset('skin/vendor/ratings/jquery.star-rating-svg.js') }}"></script>
    <!-- slider range -->
    <script src="http://localhost:8000/skin/js/input-slider.js"></script>

    <script>
        (function () {

            var selector = '[data-rangeSlider]',
                elements = document.querySelectorAll(selector);

            // Example functionality to demonstrate a value feedback
            function valueOutput(element) {
                var value = element.value,
                    output = element.parentNode.getElementsByTagName('output')[0];
                output.innerHTML = value;
            }

            for (var i = elements.length - 1; i >= 0; i--) {
                valueOutput(elements[i]);
            }

            Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
                el.addEventListener('input', function (e) {
                    valueOutput(e.target);
                }, false);
            });


            // Basic rangeSlider initialization
            rangeSlider.create(elements, {

                // Callback function
                onInit: function () {
                },

                // Callback function
                onSlideStart: function (value, percent, position) {
                    console.info('onSlideStart', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
                },

                // Callback function
                onSlide: function (value, percent, position) {
                    console.log('onSlide', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
                },

                // Callback function
                onSlideEnd: function (value, percent, position) {
                    console.warn('onSlideEnd', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
                }
            });


        })();
    </script>
<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        FormComponents.init();

          /*airline loyalty program section*/

        $("body").on( "click", ".airline-loyalty-program-edit", function() {
            $('.airline-loyalty-program-success').hide();
            $('.airline-loyalty-program-form').show();
            var user_loyalty_program_id = $(this).data('id');
            var pvalue = $(this).data('pvalue');
            $('.airline-loyalty-program-update [name="user_loyalty_program_id"]').val(user_loyalty_program_id);
            $('.airline-loyalty-program-update [name="pvalue"]').val(pvalue);

        })

        $("body").on( "click", ".airline-loyalty-program-submit", function() {

            var user_loyalty_program_id = $('.airline-loyalty-program-update [name="user_loyalty_program_id"]').val();
            var pvalue = $('.airline-loyalty-program-update [name="pvalue"]').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/admin/airline-loyalty-program-update',
                data: {user_loyalty_program_id: user_loyalty_program_id,pvalue:pvalue},
                success: function( msg ) {
                    $('.airline-loyalty-program-form').hide();
                    $('.airline-loyalty-program-success').show();
                    var timesRun = 0;
                    var interval = setInterval(function(){
                        timesRun += 1;
                        if(timesRun === 1){
                            clearInterval(interval);
                        }
                        $('.modal').modal('hide');
                        $('.airline-loyalty-program-form').show();
                        $('.airline-loyalty-program-success').hide();

                    }, 1000);

                    $('.available-'+user_loyalty_program_id).text(msg);
                    $('.airline-loyalty-program-edit').data('pvalue',msg);

                }
            });
        })

        $("body").on("click",".airline-loyalty-program-delete", function (e) {

            e.preventDefault();

            if (confirm('Are You Sure ?')) {
                var user_loyalty_program_id = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/user-airline-program-delete',
                    data: {user_loyalty_program_id: user_loyalty_program_id},
                    success: function( msg ) {
                        $('.airline-loyalty-program-delete-'+msg).parent().parent().remove();

                        var n = $( ".airline-loyalty-program tr" ).length;

                        if(n==1){
                            $('.airline-wrapper').html('<h3>Airline Loyalty Program</h3><p>Airline Loyalty Program was not found</p>');
                        }
                    }
                });
            }
        })



        /*hotel loyalty program section*/

        $("body").on( "click", ".hotel-loyalty-program-edit", function() {
            $('.hotel-loyalty-program-success').hide();
            $('.hotel-loyalty-program-form').show();
            var user_loyalty_program_id = $(this).data('id');
            var pvalue = $(this).data('pvalue');
            $('.hotel-loyalty-program-update [name="user_loyalty_program_id"]').val(user_loyalty_program_id);
            $('.hotel-loyalty-program-update [name="pvalue"]').val(pvalue);

        })

        $("body").on( "click", ".hotel-loyalty-program-submit", function() {

            var user_loyalty_program_id = $('.hotel-loyalty-program-update [name="user_loyalty_program_id"]').val();
            var pvalue = $('.hotel-loyalty-program-update [name="pvalue"]').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/admin/hotel-loyalty-program-update',
                data: {user_loyalty_program_id: user_loyalty_program_id,pvalue:pvalue},
                success: function( msg ) {
                    $('.hotel-loyalty-program-form').hide();
                    $('.hotel-loyalty-program-success').show();
                    var timesRun = 0;
                    var interval = setInterval(function(){
                        timesRun += 1;
                        if(timesRun === 1){
                            clearInterval(interval);
                        }
                        $('.modal').modal('hide');
                        $('.hotel-loyalty-program-form').show();
                        $('.hotel-loyalty-program-success').hide();

                    }, 1000);

                    $('.hotel-'+user_loyalty_program_id).text(msg);
                    $('.hotel-loyalty-program-edit').data('pvalue',msg);

                }
            });
        })

        $("body").on("click",".hotel-loyalty-program-delete", function (e) {

            e.preventDefault();

            if (confirm('Are You Sure ?')) {
                var user_loyalty_program_id = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/user-hotel-program-delete',
                    data: {user_loyalty_program_id: user_loyalty_program_id},
                    success: function( msg ) {
                        $('.hotel-loyalty-program-delete-'+msg).parent().parent().remove();

                        var n = $( ".hotel-loyalty-program tr" ).length;

                        if(n==1){
                            $('.hotel-wrapper').html('<h3>Hotel Loyalty Program</h3><p>Hotel Loyalty Program was not found</p>');
                        }
                    }
                });
            }
        })


        /*Security Services section*/

        $("body").on("click",".security-services-delete", function (e) {

            e.preventDefault();

            if (confirm('Are You Sure ?')) {
                var user_security_services_id = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/user-security-services-delete',
                    data: {user_security_services_id: user_security_services_id},
                    success: function( msg ) {
                        $('.security-services-delete-'+msg).parent().parent().remove();

                        var n = $( ".security-services tr" ).length;

                        if(n==1){
                            $('.security-services-wrapper').html('<h3>Security Services</h3><p>Security Services was not found</p>');
                        }
                    }
                });
            }
        })


        /*driving license section*/

        $("body").on( "click", ".driving-license-edit", function() {
            $('.driving-license-success').hide();
            $('.driving-license-form').show();
            var user_driving_license_id = $(this).data('id');
            var name = $(this).data('name');
            var f_name = $(this).data('f_name');
            var license_id = $(this).data('license_id');
            var f_license_id = $(this).data('f_license_id');
            var date_of_expiry = $(this).data('date_of_expiry');
            var f_date_of_expiry = $(this).data('f_date_of_expiry');
            var tsa_name = $(this).data('tsa_name');
            var f_tsa_name = $(this).data('f_tsa_name');
            var date_of_birth = $(this).data('date_of_birth');
            var f_date_of_birth = $(this).data('f_date_of_birth');
            $('.driving-license-update [name="user_driving_license_id"]').val(user_driving_license_id);
            $('.driving-license-update [name="name"]').val(name);
            $('.driving-license-update [name="f_name"]').val(f_name);
            $('.driving-license-update [name="license_id"]').val(license_id);
            $('.driving-license-update [name="f_license_id"]').val(f_license_id);
            $('.driving-license-update [name="date_of_expiry"]').val(date_of_expiry);
            $('.driving-license-update [name="f_date_of_expiry"]').val(f_date_of_expiry);
            $('.driving-license-update [name="tsa_name"]').val(tsa_name);
            $('.driving-license-update [name="f_tsa_name"]').val(f_tsa_name);
            $('.driving-license-update [name="date_of_birth"]').val(date_of_birth);
            $('.driving-license-update [name="f_date_of_birth"]').val(f_date_of_birth);


        })

        $("body").on( "click", ".driving-license-submit", function() {

            var user_driving_license_id = $('.driving-license-update [name="user_driving_license_id"]').val();
            var name = $('.driving-license-update [name="name"]').val();
            var f_name = $('.driving-license-update [name="f_name"]').val();
            var license_id = $('.driving-license-update [name="license_id"]').val();
            var f_license_id = $('.driving-license-update [name="f_license_id"]').val();
            var date_of_expiry = $('.driving-license-update [name="date_of_expiry"]').val();
            var f_date_of_expiry = $('.driving-license-update [name="f_date_of_expiry"]').val();
            var tsa_name = $('.driving-license-update [name="tsa_name"]').val();
            var f_tsa_name = $('.driving-license-update [name="f_tsa_name"]').val();
            var date_of_birth = $('.driving-license-update [name="date_of_birth"]').val();
            var f_date_of_birth = $('.driving-license-update [name="f_date_of_birth"]').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/admin/driving-license-update',
                data: {user_driving_license_id: user_driving_license_id,name:name,f_name:f_name,license_id:license_id,f_license_id:f_license_id,date_of_expiry:date_of_expiry,f_date_of_expiry:f_date_of_expiry,tsa_name:tsa_name,f_tsa_name:f_tsa_name,date_of_birth:date_of_birth,f_date_of_birth:f_date_of_birth},
                success: function( msg ) {
                    $('.driving-license-form').hide();
                    $('.driving-license-success').show();
                    var timesRun = 0;
                    var interval = setInterval(function(){
                        timesRun += 1;
                        if(timesRun === 1){
                            clearInterval(interval);
                        }
                        $('.modal').modal('hide');
                        $('.driving-license-form').show();
                        $('.driving-license-success').hide();
                        window.location = "/admin/users/"+msg+"#tab_3";
                        location.reload();

                    }, 1000);



                }
            });
        })


        /*Payment section*/

        $("body").on( "click", ".payment-edit", function() {
            $('.payment-success').hide();
            $('.payment-form').show();
            var user_payment_id = $(this).data('id');
            var type = $(this).data('type');
            var isdefault = $(this).data('isdefault');


            $('.payment-update [name="user_payment_id"]').val(user_payment_id);
            $('.payment-update [name="type"]').val(type);
            $('.payment-update [name="isdefault"]').val(isdefault);

        })

        $("body").on( "click", ".payment-submit", function() {

            var user_payment_id_get = $('.payment-update [name="user_payment_id"]').val();
            var type_get = $('.payment-update [name="type"]').val();
            var isdefault_get = $('.payment-update [name="isdefault"]').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/admin/payment-update',

                data: {user_payment_id: user_payment_id_get,type:type_get,isdefault:isdefault_get},
                success: function( infos ) {
                    $('.payment-form').hide();
                    $('.payment-success').show();
                    var timesRun = 0;
                    var interval = setInterval(function(){
                        timesRun += 1;
                        if(timesRun === 1){
                            clearInterval(interval);
                        }
                        $('.modal').modal('hide');
                        $('.payment-form').show();
                        $('.payment-success').hide();

                       /* window.location = "/admin/users/"+msg+"#tab_4";
                        location.reload();*/

                    }, 1000);

                    $("#tab_4").html(infos);

                }
            });
        })

        $("body").on("click",".payment-delete", function (e) {

            e.preventDefault();

            if (confirm('Are You Sure ?')) {
                var user_payment_id = $(this).data('id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/user-payment-delete',
                    data: {user_payment_id: user_payment_id},
                    success: function( msg ) {
                        $('.payment-delete-'+msg).parent().parent().remove();

                        var n = $( ".payment tr" ).length;

                        if(n==1){
                            $('.payment-wrapper').html('<p>Payment detail was not found</p>');
                        }
                    }
                });
            }
        })

        $('.question-answer').each(function () {
            var question_id = $(this).data('question_id');
            var answer_id = $(this).data('answer_id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/admin/dependency-question',
                data: {answer_id: answer_id,user_id: '{{ Request::segment(3) }}' },
                success: function( msg ) {
                    $('.dependency-'+question_id).html(msg);
                }
            });
        });

        $("body").on("click",".child-permission", function (e) {
            var question_id = $(this).data('question_id');
            var answer_id = $(this).data('answer_id');
            $('.question-'+question_id).attr('checked', false);
            $(this).attr('checked', true);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/admin/dependency-question',
                data: {answer_id: answer_id},
                success: function( msg ) {
                     $('.dependency-'+question_id).html(msg);
                }
            });
        });






        $('form').on('submit', function(e) {
            e.preventDefault(); // prevent native submit

            var form = $(this);
            var formdata = false;
            if (window.FormData){
                formdata = new FormData(form[0]);
            }

            var formAction = form.attr('action');

            var category = $(this).find('input[name="category"]').val();


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: formAction,
                type: 'POST',
                data        : formdata,
                cache       : false,
                contentType : false,
                processData : false,
                success     : function(data){

                    $('.travel-question-title').text((category==1)?'General Question Answer':'Flight Question Answer')

                    var timesRun = 0;
                    var interval = setInterval(function(){
                        timesRun += 1;
                        if(timesRun === 1){
                            clearInterval(interval);
                        }
                        $('.modal').modal('hide');

                    }, 1000);
                   if(category==2){
                       $('.airtravelServices').html(data);
                   }


                    //$('form').hide('show');
                    $('#travel-question-update').modal('show');
                }
            });

        });

    });


    // image gallery
    // init the state from the input
    jQuery( document ).ready(function() {
        jQuery(".image-checkbox").each(function () {
            if (jQuery(this).find('input[type="checkbox"]').first().attr("checked")) {
                jQuery(this).addClass('image-checkbox-checked');

            }
            else {
                jQuery(this).removeClass('image-checkbox-checked');
            }
        });

        // sync the state to the input
        jQuery(".image-checkbox").click(function (e) {
            //alert('hi');

            var attrid = jQuery(this).attr('key');
            var imageurl = jQuery(this).attr('imageurl');
            var listid = jQuery(this).attr('listid');
            var name = jQuery(this).attr('name');
            var apendclass = jQuery(this).attr('apendclass');


            jQuery(this).toggleClass('image-checkbox-checked');
            var checkbox = jQuery(this).find('input[type="checkbox"]');
            checkbox.prop("checked",!checkbox.prop("checked"))
            if(jQuery(this).hasClass('image-checkbox-checked')){
                appendTravelOptiontolist(attrid,imageurl,listid,name,apendclass);

            }else{

                removeTravelOptiontolist(attrid,listid);
            }

            e.preventDefault();

        });
    });

    function appendTravelOptiontolist(attrid,imageurl,listid,name,apendclass){


        var imageurl = jQuery('#'+imageurl+attrid).attr('src');
        var str = '<div id="'+listid+attrid+'" class="questionBox questionBoxWrapper scoreWrapper ">';
        str +='<div class="fa-pull-left">';
        str +='<img src="'+imageurl+'" width="32px" alt="">'+name+'</div>';
        str +='<div class="fa-pull-right">';

        str +='<p class="score fa-pull-left">';
        str +='<img src="{{ asset('skin/images/travel_preference/starFilledIcon.svg')}}"   alt="" width="19px" /> <a href="" class="open-fadtripModale" data-toggle="modal" data-name="'+name+'" data-image="'+imageurl+'"  data-key="'+attrid+'" data-target="#tripModal">Score 1 </a> </p><p class="fa-pull-right"> <img src="{{ asset('skin/images/travel_preference/gripper.svg')}}"   alt="" width="22px" /> </p>';
        str +='<input type="hidden" name="rattinginput['+attrid+']" value="1" id="rattinginput'+attrid+'" />';
        str +='</div><div class="clearfix"></div>';
        str +='</div>';
        jQuery('.'+apendclass).append(str);


    }

    function removeTravelOptiontolist(attrid,listid){
        jQuery('#'+listid+attrid).remove();
    }
</script>
    <script type="text/javascript">
        function submitgrofile(){
            var NotInValid = returnQuestionValidation();
            //alert(NotInValid);
            if(!NotInValid){
                jQuery('#gnprofile').submit();
            }
        }


    </script>
    <!-- Rating Script Code -->
    <script>

        jQuery(document).on("click", ".open-fadtripModale", function () {
            var name = jQuery(this).data('name');
            var image = jQuery(this).data('image');
            var key = jQuery(this).data('key');
            var str = '<img src="'+image+'"   alt="" width="32px" />'+name+'</p>';
            jQuery('.modal-body .ratingAirName').html(str);
            jQuery('.modal-footer .rattingdismiss').attr('id',key);


        });

        jQuery(document).on("click", ".open-fadtripModale", function () {
            var name = jQuery(this).data('name');
            var image = jQuery(this).data('image');
            var key = jQuery(this).data('key');
            var str = '<img src="'+image+'"   alt="" width="32px" />'+name+'</p>';
            jQuery('.modal-body .ratingAirName').html(str);
            jQuery('.modal-footer .rattingdismiss').attr('id',key);
            var ratval = jQuery('#rattinginput'+key).val();
            jQuery('.my-rating-9').starRating('setRating',ratval)
            jQuery('.live-rating').text(ratval);

        });

        jQuery(document).on("click", ".rattingdismiss", function () {
            var id = jQuery(this).attr('id');
            var ratval = jQuery('.live-rating').html();
            //alert(id+'--'+ratval);
            jQuery('#rattinginput'+id).val(ratval);
            jQuery('#airlineprogram'+id+' .open-fadtripModale').html('Score '+ratval);


        });


        function loadrattingbox(){

            jQuery(".my-rating-9").starRating({
                initialRating: 1,
                disableAfterRate: false,
                onHover: function(currentIndex, currentRating, $el){
                    console.log('index: ', currentIndex, 'currentRating: ', currentRating, ' DOM element ', $el);
                    jQuery('.live-rating').text(currentIndex);
                },
                onLeave: function(currentIndex, currentRating, $el){
                    console.log('index: ', currentIndex, 'currentRating: ', currentRating, ' DOM element ', $el);
                    jQuery('.live-rating').text(currentRating);
                }
            });
        }

        jQuery(function() {
            loadrattingbox();
        });



        /*driving license section*/

        $("body").on( "click", ".home-location-edit", function() {
            $('.home-location-success').hide();
            $('.home-location-form').show();
            var user_home_location_id = $(this).data('id');
            var airport_code = $(this).data('airport_code');
            var airport_name = $(this).data('airport_name');

            $('.home-location-update [name="user_home_location_id"]').val(user_home_location_id);
            $('.home-location-update [name="airport_code"]').val(airport_code);
            $('.home-location-update [name="airport_name"]').val(airport_name);


        })

        $("body").on( "click", ".home-location-submit", function() {

            var user_home_location_id = $('.home-location-update [name="user_home_location_id"]').val();
            var airport_name = $('.home-location-update [name="airport_name"]').val();
            var airport_code = $('.home-location-update [name="airport_code"]').val();


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                dataType: 'json',
                url: '/admin/home-location-update',
                data: {user_home_location_id: user_home_location_id,airport_name:airport_name,airport_code:airport_code},
                success: function( infos ) {
                    $('.airport-code').text(infos.airport_code);
                    $('.airport-name').text(infos.airport_name);
                    $('.home-location-edit').data('airport_code',infos.airport_code);
                    $('.home-location-edit').data('airport_name',infos.airport_name);
                    $('.home-location-form').hide();
                    $('.home-location-success').show();

                    var timesRun = 0;
                    var interval = setInterval(function(){
                        timesRun += 1;
                        if(timesRun === 1){
                            clearInterval(interval);
                        }
                        $('.modal').modal('hide');
                        $('.home-location-form').show();
                        $('.home-location-success').hide();
                      /*  window.location = "/admin/users/"+msg+"#tab_6";
                        location.reload();*/

                    }, 1000);



                }
            });
        })

</script>


@endsection










