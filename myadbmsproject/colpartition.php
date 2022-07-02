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
  .flex-container{
    display: flex;
    flex-wrap: wrap;
    font-size:1.2rem;
    font-weight:bolder;
  }
  .section1{
    background:LightSkyBlue;
    margin:20px 20px;
    padding:10px;
  }
  .section2{
    background:LightGreen;
    margin:20px 20px;  padding:10p
  }
</style>
<body>


  <div class="flex-container">
  <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'myadbms');
                    $query1="SELECT * FROM vaccine";
                    $queryrun1=mysqli_query($connection,$query1);
                   
                   
              ?>

          
    
  <div class="card-body section1">
    <h3>Partition p0</h3>
  <table class="table">
          
          <thead>
            <tr>
            <th scope="col">CollegeID</th>
              <th scope="col">CollegeName</th>
              <th scope="col">Vaccine Type</th>
              <!-- <th scope="col">Vaccinated Students</th>
              <th scope="col">City</th>
              <th scope="col">Date of Vaccination drive</th> -->
             
            </tr>
          </thead>
                          <?php 

                            if($queryrun1){
                              foreach($queryrun1 as $row1){
                                ?>
                  <tbody  >
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
                     
                      
                    </tr> <?php      }       }else{        echo'No record Found';       }  ?>
                  </tbody>
          
        
                </table>
  </div>
  <div class="card-body section2">
  <h3>Partition p1</h3>
  <table class="table">
          
          <thead>
             
              
            
            
            <tr>
            <th scope="col">CollegeID</th>
              <!-- <th scope="col">CollegeName</th>
              <th scope="col">Vaccine Type</th> -->
              <th scope="col">Vaccinated Students</th>
              <th scope="col">City</th>
              <th scope="col">Date of Vaccination drive</th>
             
              
            </tr>
          </thead>
                          <?php 

                            if($queryrun1){
                              foreach($queryrun1 as $row1){
                                ?>
                  <tbody  >
                  <tr>
                      <td>
                        <?php echo $row1['collegeid'] ?>
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

  </div>
             


 

</body>

</html>
