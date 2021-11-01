<!doctype html>
   
    <head>
      <title>Add Event | Event Store</title>
      
      <style>
    html, body{
        background-color:#fcf6cf;
        margin: 0;
        padding: 0;
    }

    .eventForm{
    display: flex;
    align-items: center;
    justify-content: center; 
    margin-top:60px;
   
    }
  button{
    font-family:Gabriola;
    font-size:30px;
  }  
 form button{
    background-color: white;
    width: 100px;
    height: 35px;
    font-size: 15px;
    text-align: center;
    color: #59666b;
}

form button:hover{
    cursor: pointer;
    border-color:transparent;
    color: white;
    background-color: rgb(255, 146, 72);
    transition-duration: 0.2s;
   
}

.btn{
    margin-top:20px;
    display: flex;
    align-items: center;
    justify-content: center; 
}

input[type="text"] {
    width: 340px;
}

input[type="number"]{
    width: 134px;
    margin-left:12px;
}

input[type="time"]{
    width: 138px;
    margin-left:8px;
}

input[type="date"]{
    width: 137px;
    margin-left:10px;
}


h1{
    text-align:center;
    font-family:Chalkduster, fantasy;
    color:rgb(247,119,26);
}



    form{
    margin-top:30px;
    border: 2px solid black;
    border-style: inset;
    border-radius: 12px 12px 12px 12px;
    padding: 20px;
    width: 350px;
    background-color: rgb(255, 215, 181);
    }

    label{
    font-size: 18px;
    color:rgb(176,79,6);
    font-weight: bold;
    font-family:Gabriola;
}
          </style>
    </head>
    <body>
     
            <div class="eventForm">
            <form method="POST" action="/create">

            @csrf

                    <h1> Add Event</h1>

                    <label for="eventName">Event Name: </label><br>
                    <input type="text" id="eventName" name="name"><br><br>

                    <label for="eventDesc">Event Description: </label><br>
                    <input type="text" id="eventDesc" name="description"><br><br>

                    <label for="price">Event Fees:</label>
                    <input type="number" id="price" name="price" min="20" max="250"><br><br>

                    <label for="eventDate">Event Date: </label>
                    <input type="date" id="eventDate" name="date"><br><br>

                    <label for="eventTime">Event Time: </label>
                    <input type="time" id="eventTime" name="time"><br><br>

                   <div class=btn>
                    <button type="submit" id="submit">Submit</button>
</div>
                </form>
            </div>
        </div>

    </body>
    </html>
