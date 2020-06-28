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
                <th>Last3</th>
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