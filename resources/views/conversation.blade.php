<!DOCTYPE html>
@extends('welcome')

<title>conversation editor</title>
<head>
<link rel="stylesheet" href="./js/conversation.css"></head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<body>
  <div class="w3-sidebar w3-light-grey w3-bar-block" id="mySidebar" style="width:15%">

</div>

  <script type="text/javascript">
  var dataFromCall;
  $.ajax({
    method:'GET',
    url:'http://localhost:3000',
    async:false,
    success:function(data){
      dataFromCall=data;
    }

  });

  $(document).ready(function(){
    console.log(dataFromCall);
    for(var i in dataFromCall){
      $("#mySidebar").append("<br> <button style=\"margin-left:20px;\" id=\""+dataFromCall[i].name+"\">"+dataFromCall[i].name+"</button></br>");
      for(var j in dataFromCall[i].columns){
          $("mySidebar").append("<br>"+dataFromCall[i].columns[j].name+"</br>")

      }
    }
      var extractData;
      $("#mySidebar").on("click",function(event){
        var id=event.target.id;

        for( var i in dataFromCall){
          if(dataFromCall[i].name===id){
            extractData=dataFromCall[i];
          }
        }

      });

      console.log(extractData);
  });



  </script>

</body>
