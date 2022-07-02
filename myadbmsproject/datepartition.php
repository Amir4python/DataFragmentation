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

     
        <div class="card-body">

          <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'myadbms');
                    $query1="SELECT * FROM vaccine where date>='2021-06-01' and date<='2021-06-30'";
                    $queryrun1=mysqli_query($connection,$query1);
                    $query2="SELECT * FROM vaccine where date>='2021-07-01' and date<='2021-07-30'";
                    $queryrun2=mysqli_query($connection,$query2);
                    $query3="SELECT * FROM vaccine where date>='2021-08-01' and date<='2021-08-30'";
                    $queryrun3=mysqli_query($connection,$query3);
                     
                     
              ?>
          <h3>Vaccine drive taken on  June 2021</h3>
          <table class="table table-warning">
            <thead>
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
                    <tbody>
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
                        
                      </tr>
                      <?php
                        }
                      }else{
                        echo'No record Found';
                      }
                    


                    ?>
                    </tbody>


                    
          </table>
          <h3>Vaccine drive taken on  July 2021</h3>
          <table class="table table-primary">
            <thead>
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
                    <tbody>
                      <tr>
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
                        
                      </tr>
                      <?php
                        }
                      }else{
                        echo'No record Found';
                      }
                    


                    ?>
                    </tbody>


                    
          </table>
          <h3>Vaccine drive taken on  August 2021</h3>
          <table class="table table-info">
            <thead>
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

                              if($queryrun3){
                                foreach($queryrun3 as $row3){
                                  ?>
                    <tbody>
                      <tr>
                        <td>
                          <?php echo $row3['collegeid'] ?>
                        </td>
                        <td>
                          <?php echo $row3['collegename'] ?>
                        </td>
                        <td>
                          <?php echo $row3['vaccinetype'] ?>
                        </td>
                        <td>
                          <?php echo $row3['totalstudents'] ?>
                        </td>
                        <td>
                          <?php echo $row3['city'] ?>
                        </td>
                        <td>
                          <?php echo $row3['date'] ?>
                        </td>
                        
                      </tr>
                      <?php
                        }
                      }else{
                        echo'No record Found';
                      }
                    


                    ?>
                    </tbody>


                    
          </table>


        </div>



       
    </div>
  </div>

</body>

</html>
