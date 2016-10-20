<html>
<head></head>
    <body>
        <div class="mail1">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 abo"><br>
                    <h2 class="mail_h">Party Crooks <span class="mail_h_col"> Order Form</span></h2>
                </div>
            </div>
        </div>
        <div class="gallery" id="gallery">
            <div class="container">
                <div class="gallery-main">
                    <div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Client Name</span>
                            {{$clientname}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Contact number</span>
                            {{$contactnumber}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Address</span>
                            {{$address}}
                        </div>

                        <div class="col-md-6 reg_form reg_form">
                            <span class="reg_form">Email</span>
                            {{$email}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Date</span>
                            {{$date}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Event Date</span>
                            {{$eventdate}}
                        </div>

                        <div class="col-md-6">
                            <span class="reg_form">Event Venue</span>
                            {{$eventvenue}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Event Type</span>
                            {{$eventtype}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Package Selected</span><br>
                            {{$package}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Number of Guests</span>
                            {{$guests}}
                        </div>

                        <div class="col-md-6">
                            <span class="reg_form">Suggestions</span>
                            {{$suggestions}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Mode of Payment</span>
                            {{$modepayment}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Advance Amount</span>
                            {{$advance}}
                        </div>

                        <div class="col-md-6 reg_form">
                            <span class="reg_form">Balance Amount</span>
                            {{$balance}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
