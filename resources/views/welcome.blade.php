@extends('superTemplates.basicTemplate')
@section('body')
<div data-bs-hover-animate="bounce" class="majorDiv" style="background-color:#fcc028;background-image:url(&quot;{{asset('design/assets/img/pexels-photo-433267.jpeg')}}&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
    <div class="jumbotron jumbo" style="background-color:rgba(233,236,239,0.73);">
        <h1 id="inSmallSize" class="jumbotron-heading">Efficient Doctor-Patient Portal .</h1>
        <p id="JumbotronText" style="color:rgb(0,0,0);">Managing all The facets of the health sector and improcing lives in ways we know best.</p>
        <p><a class="btn btn-danger" role="button" href="/home" data-bs-hover-animate="rubberBand" id="jumbotron-Button" style="background-color:#ff0000;color:rgb(255,255,255);"><strong>Patient Log In.</strong></a></p>
    </div>
</div>
<div style="background-color:#d3e4f8;padding-top:20px;">
    <div class="container" style="background-color:#d3e4f8;">
        <div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8">
                    <h1 class="HeadingThreeColumns" style="color:rgb(255,1,16);">Reponsibilities.</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4" style="text-align:center;"><i class="fa fa-stethoscope" style="font-size:42px;color:blue;text-align : center;"></i>
                            <h4 class="threeColumns">Basic Service</h4>
                            <p style="color:rgb(0,0,0);">in 1997 &nbsp;so as to bring the Paris experience to the door steps of&nbsp;<br>kenyans . It is suituated along the busy Ngong Road&nbsp;<br></p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4" style="text-align:center;"><i class="fa fa-book" style="color:blue;font-size:42px;"></i>
                            <h4 class="threeColumns">Bookings.</h4>
                            <p style="color:rgb(0,0,0);">in 1997 &nbsp;so as to bring the Paris experience to the door steps of&nbsp;<br>kenyans . It is suituated along the busy Ngong Road&nbsp;<br></p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4" style="text-align:center;"><i class="fa fa-medkit" style="font-size:42px;color:blue;"></i>
                            <h4 class="threeColumns">Emmergency.</h4>
                            <p style="color:rgb(0,0,0);">in 1997 &nbsp;so as to bring the Paris experience to the door steps of&nbsp;<br>kenyans . It is suituated along the busy Ngong Road&nbsp;<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 newColumn">
                    <h3 id="newsHeading">News :&nbsp;</h3>
                    <ul>
                        <li><strong>next&nbsp;</strong><br>in 1997 &nbsp;so as to bring the Paris experience to the door steps of&nbsp;<br>kenyans . It is suituated along the busy Ngong Road&nbsp;<br></li>
                        <li><strong>next&nbsp;</strong><br>in 1997 &nbsp;so as to bring the Paris experience to the door steps of&nbsp;<br>kenyans . It is suituated along the busy Ngong Road&nbsp;<br></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-color:#d3e4f8;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h1 class="HeadingThreeColumns" style="color:rgb(20,63,219);">Services Offered.</h1>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h4 class="threeColumns">In Patient :&nbsp;</h4>
                        <h5 class="text">Heading</h5>
                        <h5 class="text">Heading</h5>
                        <h5 class="text">Heading</h5>
                        <h5 class="text">Heading</h5>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h4 class="threeColumns">Out Patient :</h4>
                        <h5 class="text">Heading</h5>
                        <h5 class="text">Heading</h5>
                        <h5 class="text">Heading</h5>
                        <h5 class="text">Heading</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 newColumn" style="text-align:center">
                <h3 id="newsHeading">Common Links:&nbsp;</h3><a href="#"><strong>Patient Log In .</strong></a><br/><a href="#"><strong>Patient Registration .</strong></a><br/><a href="#"><strong>Our Contacts.</strong></a><br/>
                <a
                    href="#"><strong>FAQs.</strong></a>
            </div>
        </div>
    </div>
</div>
 <div style="background-color:#f1655c;margin-top:-10px;">
        <div class="container">
            <h1 class="patnersHeaders" style="text-align : center;">In Association With :</h1>
            <div class="row flex-box flex-wrap-wrap">
                <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a href="{{asset('design/assets/img/i.png')}}" class="fancybox" rel="gallery1" title="Kenyan Gouvernment."><img class="img-fluid" src="assets/img/i.png" alt="Kenyan Gouvernment." data-bs-hover-animate="flash" title="Kenyan Gouvernment."></a></div>
                <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a href="{{asset('design/assets/img/ix.png')}}" class="fancybox" rel="gallery1" title="UNCEF"><img class="img-fluid" src="assets/img/ix.png" data-bs-hover-animate="flash" title="UNICEF"></a></div>
                <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a href="{{asset('design/assets/img/inax.png')}}" class="fancybox" rel="gallery1" title="Aghakhan University Hospital."><img class="img-fluid" src="assets/img/inax.png" data-bs-hover-animate="flash" title="Aghakhan University Hospital."></a></div>
                <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a href="{{asset('design/assets/img/knx.jpg')}}" class="fancybox" rel="gallery1" title="Kenyatta National Hospital ."><img class="img-fluid" src="assets/img/knx.jpg" data-bs-hover-animate="flash" title="Kenyatta National Hospital ."></a></div>
                <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a href="{{asset('design/assets/img/index.png')}}" class="fancybox" rel="gallery1" title="USAID"><img class="img-fluid" src="assets/img/index.png" data-bs-hover-animate="flash" title="USAID"></a></div>
                <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a href="{{asset('design/assets/img/uk.png')}}" class="fancybox" rel="gallery1" title="UKAID"><img class="img-fluid" src="assets/img/uk.png" data-bs-hover-animate="flash" title="UKAID"></a></div>
            </div>
        </div>
    </div>
@endsection
