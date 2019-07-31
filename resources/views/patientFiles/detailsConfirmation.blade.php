@extends('superTemplates\basicTemplate')

@section('body')

<div style="background-color:#d3e4f8;">
    <div class="container" style="background-color:#d3e4f8; font-family:&quot;Times New Roman&quot;">
        <h1 style="font-family:times new roman;text-align:center;">Please Confirm Your Details .</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Names: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!!$firstName. ' '.$lastName. ' '. $surName !!}</span></h2>
                <h3>Birth Certificate Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $Birth_Certificate_Number!!}</span></h3>
                <h2>NHIF Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $NHIF_Number!!}</span></h2>
                <h2>Residence: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $residence!!}</span></h2>
                <h2>Phone Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $phoneNumber!!}</span></h2>
                <h2>Date Of Birth: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $Date_Of_Birth!!}</span></h2>
                <h2>KRA Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $KRA_Number!!}</span></h2>
                <h2>Email Address: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;">{!! $email!!}</span></h2>
                <form method="post" action = "{{action('patients\Main_Controller_For_Patients@store')}}">
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Check To Confirm That The Data Above are Your Personal Details To Continue .</label></div>
                    </div>
                    {{-- The hidden Inputs That have the values that should be inserted.  --}}
                    <input type="hidden" name="firstName" value="{!!$firstName!!}">
                    <input type="hidden" name="lastName" value="{!!$lastName!!}">
                    <input type="hidden" name="surName" value="{!!$surName!!}">
                    <input type="hidden" name="Birth_Certificate_Number" value="{!!$Birth_Certificate_Number!!}">
                    <input type="hidden" name="NHIF_Number" value="{!!$NHIF_Number!!}">
                    <input type="hidden" name="residence" value="{!!$residence!!}">
                    <input type="hidden" name="phoneNumber" value="{!!$phoneNumber!!}">
                    <input type="hidden" name="Date_Of_Birth" value="{!!$Date_Of_Birth!!}">
                    <input type="hidden" name="KRA_Number" value="{!!$KRA_Number!!}">
                    <input type="hidden" name="email" value="{!!$email!!}">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="form-row" style="margin-top: 20px; margin-bottom: 20px;">
                            <div class="col"><a class="btn btn-danger btn-block" role="button" href="sighnup.html"><i class="fa fa-backward"></i><strong>&nbsp; EDIT DETAILS</strong></a></div>
                            <div class="col"><button class="btn btn-success btn-block" type="submit" id="verify"><strong>NEXT&nbsp;</strong><i class="fa fa-forward" style="background-color:rgba(0,0,0,0);color:rgb(255,255,255);"></i></button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection