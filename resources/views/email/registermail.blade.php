<html>
<head>
    <style>
       h2 {
        font-size:42px;
        text-align:center;
       }
       table{
        text-align: justify;
        border-collapse: collapse;
        border-spacing: 10px;
        border-collapse: separate;
        width: 40%;
        border: 1px solid #000000;
        padding: 20px 10px 20px 25px;
       }
       td, th {              
        text-align: left;
        padding: 2px;
        text-align: justify;
        }

    </style>
</head>
    <body>
        <div>
            <h2 style="color:#6d6f72;">Party Crooks <span style="color:#e42352;"> Order Form</span></h2>
        </div>
     <table align="center">
        <tr>
            <td>Client Name</td><td>:</td>
            <td>{{$clientname}}</td>
        </tr>
            
        <tr>
            <td>Contact number</td><td>:</td>
            <td>{{$contactnumber}}</td>
        </tr>
        
        <tr>
            <td>Address</td><td>:</td>
            <td>{{$address}}</td>
        </tr>

        <tr>
           <td> Email</td><td>:</td>
           <td>{{$email}}</td>
        </tr>

        <tr>
            <td>Date</td><td>:</td>
            <td>{{$date}}</td>
        </tr>

        <tr>
            <td>Event Date</td><td>:</td>
            <td>{{$eventdate}}</td>
        </tr>

        <tr>
            <td>Event Venue</td><td>:</td>
            <td>{{$eventvenue}}</td>
        </tr>

        <tr>
            <td>Event Type</td><td>:</td>
            <td>{{$eventtype}}</td>
        </tr>

        <tr>
            <td>Package Selected</td><td>:</td>
            <td>{{$package}}</td>
        </tr>

        <tr>
            <td>Number of Guests</td><td>:</td>
            <td>{{$guests}}</td>
        </tr>

        <tr>
            <td>Suggestions</td><td>:</td>
            <td>{{$suggestions}}</td>
        </tr>

        <tr>
            <td>Mode of Payment</td><td>:</td>
            <td>{{$modepayment}}</td>
        </tr>

        <tr>
            <td>Advance Amount</td><td>:</td>
            <td>{{$advance}}</td>
        </tr>

        <tr>
            <td>Balance Amount</td><td>:</td>
            <td>{{$balance}}</td>
        </tr>
     </table>
    </body>
</html>
