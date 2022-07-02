<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
  *{
    font-size:1.2rem;
  }
  .container{
    min-width:100%;
  }
  .jumbotron{
    min-width:90%
  }
</style>
<body>


  <div class="container">
    <div class="jumbotron">

       
        



        <h3>Covid vaccine Based On VaccineType</h3>
        <div class="card-body">

          <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'myadbms');
                    $query1="SELECT * FROM vaccine where vaccinetype='Covidshield'";
                    $queryrun1=mysqli_query($connection,$query1);
                    $query2="SELECT * FROM vaccine where vaccinetype='Covaxin'";
                    $queryrun2=mysqli_query($connection,$query2);
                   
              ?>

          <table class="table">
          
            <thead>
               
                <tr><h4>Covishield<h4></tr>
              
              
              <tr>
              <th scope="col">CollegeID</th>
                <th scope="col">CollegeName</th>
                <th scope="col">Vaccine Type</th>
                <th scope="col">Vaccinated Students</th>
                <th scope="col">City</th>
                <th scope="col">Date of Vaccination drive</th>
               
                
              </tr>
            </thead>
                            <?php 

                              if($queryrun1){
                                foreach($queryrun1 as $row1){
                                  ?>
                    <tbody class="bg-warning ">
                    <tr>
                        <td>
                          <?php echo $row1['collegeid'] ?>
                        </td>
                        <td>
                          <?php echo $row1['collegename'] ?>
                        </td>
                        <td>
                          <?php echo $row1['vaccinetype'] ?>
                        </td>
                        <td>
                          <?php echo $row1['totalstudents'] ?>
                        </td>
                        <td>
                          <?php echo $row1['city'] ?>
                        </td>
                        <td>
                          <?php echo $row1['date'] ?>
                        </td>
                        
                      </tr> <?php      }       }else{        echo'No record Found';       }  ?>
                    </tbody>
            
          
                  </table>
          <table class="table  " >
          
            <thead>
               
                <tr><h4>Covaxin<h4></tr>
              
              
              <tr>
              <th scope="col">CollegeID</th>
                <th scope="col">CollegeName</th>
                <th scope="col">Vaccine Type</th>
                <th scope="col">Vaccinated Students</th>
                <th scope="col">City</th>
                <th scope="col">Date of Vaccination drive</th>
               
                
              </tr>
            </thead>
                            <?php 

                              if($queryrun2){
                                foreach($queryrun2 as $row2){
                                  ?>
                    <tbody class="bg-info">
                      <<tr>
                        <td>
                          <?php echo $row2['collegeid'] ?>
                        </td>
                        <td>
                          <?php echo $row2['collegename'] ?>
                        </td>
                        <td>
                          <?php echo $row2['vaccinetype'] ?>
                        </td>
                        <td>
                          <?php echo $row2['totalstudents'] ?>
                        </td>
                        <td>
                          <?php echo $row2['city'] ?>
                        </td>
                        <td>
                          <?php echo $row2['date'] ?>
                        </td>
                        
                      </tr><?php      }       }else{        echo'No record Found';       }  ?>
                    </tbody>
            
          
                  </table>

        </div>
    </div>
  </div>

</body>

</html>
