<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>

<div class='fluid-container'>
<div class='h2 text-center mt-5 mb-4'>Database of User</div>

<select name ='role' id='roleSelect' class="form-select form-select-lg text-md-center" onchange="showCustomer(this.value)">
  <option selected>Choose the role</option>
  <option value="JOBSEEKERS">JOBSEEKERS</option>
  <option value="EMPLOYERS">EMPLOYERS</option>
</select>
</br>
<input type='text' class='form-control form-control-md text-md-center' id = 'live-search' autocomplete='false' placeholder='Search'>
<div class='fluid-container' id = 'searchresult'></div>
<div class='fluid-container' id = 'liveSearch'></div>


<script type="text/javascript">

  function showCustomer(str) {
    if (str == "") {
      document.getElementById("searchresult").innerHTML = "";
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("searchresult").innerHTML = this.responseText;
    }
    xhttp.open("GET", "DisplayRole.php?role="+str);
    xhttp.send();
  }


  $(document).ready(function(){
      $('#live-search').keyup(function(){
          var input= $(this).val();
          if (input !=""){
              $.ajax({
                  url: 'livesearch.php',
                  method:"POST",
                  data:{input:input, select:$('#roleSelect').val()},
                  success: function(data){
                      $("#liveSearch").html(data);
                      $("#searchresult").css("display","none");
                      $("#liveSearch").css("display"," block");
                  }
              });
          }else{
              $("#searchresult").css('display',' block');
              $("#liveSearch").css("display","none");
              

          }
      });
  });
</script>