<html>
<head>
    <style>
       h2 {
       font-size:42px;
       }

    </style>
</head>
    <body>
        <div>
            <h2 style="color:#6d6f72;">Party Crooks</h2> <h2 style="color:#e42352;"> Order Form</h2>
        </div>
     <table>   
        <tr>
            <td>Client Name</td>
            <td>{{$clientname}}</td>
        </tr>
            
        <tr>
            <td>Contact number</td>
            <td>{{$contactnumber}}</td>
        </tr>
        
        <tr>
            <td>Address</td>
            <td>{{$address}}</td>
        </tr>

        <tr>
           <td> Email</td>
           <td>{{$email}}</td>
        </tr>

        <tr>
            <td>Date</td>
            <td>{{$date}}</td>
        </tr>

        <tr>
            <td>Event Date</td>
            <td>{{$eventdate}}</td>
        </tr>

        <tr>
            <td>Event Venue</td>
            <td>{{$eventvenue}}</td>
        </tr>

        <tr>
            <td>Event Type</td>
            <td>{{$eventtype}}</td>
        </tr>

        <tr>
            <td>Package Selected</td>
            <td>{{$package}}</td>
        </tr>

        <tr>
            <td>Number of Guests</td>
            <td>{{$guests}}</td>
        </tr>

        <tr>
            <td>Suggestions</td>
            <td>{{$suggestions}}</td>
        </tr>

        <tr>
            <td>Mode of Payment</td>
            <td>{{$modepayment}}</td>
        </tr>

        <tr>
            <td>Advance Amount</td>
            <td>{{$advance}}</td>
        </tr>

        <tr>
            <td>Balance Amount</td>
            <td>{{$balance}}</td>
        </tr>
     </table>
    </body>
</html>
