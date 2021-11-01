<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>

a{
    cursor: pointer;
}





.del{
  width:80px;
}
body{
  background-color:rgb(255,255,223);
}
table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
  width:1000px;
}

.eventList th{
    background-color: rgb(255, 146, 72);
}

.eventList tr:nth-child(even){
    background-color: rgba(255, 146, 72, 0.3);
}
 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

th{
  color: white;
  font-size: 15px;
}
td{
  font-size:13px;
}

h2{
  text-align:center;
  color:rgb(176,79,6);
}

.editBtn{
   margin-right:20px;
}

    </style>
</head>
<body>
<div class="container">
<h2><font style="Font-Family:Stencil">Event Records</font></h2>
           
  <table class="eventList">
      <tr>
        <th >Event ID</th>
        <th>Event Name</th>
        <th>Description</th>
        <th>Event Price (RM)</th>
        <th>Event Date </th>
        <th>Event Time </th>
        <th class="del">&nbsp</th>
      </tr>
      @foreach($viewdata as $key => $data)
    <tr>    
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->price}}</td>
      <td></i>{{$data->date}}</td>
      <td>{{$data->time}}</td>
      <td><a href='delete/{{ $data->id }}'><i class="fa fa-trash" style="font-size:20px;color:red;"></i></a></td>      
    </tr>
@endforeach
    
  </table>
</div>
</body>
</html>
