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

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="covidAddModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Data record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="insert.php" method="POST">
          <div class="modal-body">

            <div class="form-group">
              <label>College ID</label>
              <input type="number" name="collegeid" class="form-control" placeholder="Enter College ID">
            </div>
            <div class="form-group">
              <label>College Name</label>
              <input type="text" name="collegename" class="form-control" placeholder="Enter College Name">
            </div>
            <div class="form-group">
              <label>Type of Vaccine</label>
              <input type="text" name="vaccinetype" class="form-control" placeholder="Covidsheild/Covaxin">
            </div>
            <div class="form-group">
              <label>No of students</label>
              <input type="text" name="totalstudents" class="form-control" placeholder="Number of students vacinated">
            </div>
            <div class="form-group">
              <label>City</label>
              <input type="text" name="city" class="form-control" placeholder="City">
            </div>
            <div class="form-group">
              <label>Date</label>
              <input type="date" name="date" class="form-control" placeholder="DATE">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="insertdata" class="btn btn-primary">Save changes</button>
          </div>
        </form>

      </div>
    </div>
  </div>
<!--  -->

<div class="modal fade" id="covidDeleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE Data record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="delete.php" method="POST">
          <div class="modal-body">

            <input type="hidden" name="delete_id" id="delete_id">
            <h4>Do you want to Delete this Data?</h4>
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
            <button type="submit" name="deletedata" class="btn btn-primary">YES! Delete It.</button>
          </div>
        </form>

      </div>
    </div>
  </div>











  <div class="container">
    <div class="jumbotron">
      <div class="card">
        <h3>Covid vaccine College Drive</h3>

      </div>
      <div class="card">
        <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#covidAddModel">
            ADD DATA
          </button>
          <br>
          <a class="btn btn-warning" href="citypartition.php" role="button">Horizontal  Partitioning (City) </a>
          <a class="btn btn-info" href="vaccinetypepartition.php" role="button"> Horizontal  Partitioning (Vaccine) </a>
          <a class="btn btn-secondary" href="datepartition.php" role="button"> Horizontal  Partitioning (date) </a>
          <a class="btn btn-danger" href="colpartition.php" role="button"> Vertical  Partitioning</a>
        </div>
        
        
      </div>
     <div class="card">
       <div class="card-body">
           
                  
            <?php

            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'myadbms');



                $query3="SELECT * FROM vaccine";
                $queryrun3=mysqli_query($connection,$query3);
                    

            ?>


       <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">CollegeID</th>
                      <th scope="col">CollegeName</th>
                      <th scope="col">Vaccine Type</th>
                      <th scope="col">Vaccinated Students</th>
                      <th scope="col">City</th>
                      <th scope="col">Date of Vaccination drive</th>
                      <th scope="col">DELETE</th>
                    </tr>
                  </thead>

                  <?php 

              if($queryrun3){
                foreach($queryrun3 as $row){
                  ?>
                  <tbody>
                    <tr>
                       <td><?php echo $row['collegeid'] ?></td>
                       <td><?php echo $row['collegename'] ?></td>
                       <td><?php echo $row['vaccinetype'] ?></td>
                       <td><?php echo $row['totalstudents'] ?></td>
                       <td><?php echo $row['city'] ?></td>
                       <td><?php echo $row['date'] ?></td>
                       <td>
                         <button type="button" class="btn btn-danger deletebtn">DELETE</button>
                       </td>
                    </tr>
                    
                  </tbody>
                  <?php
                }
              }else{
                echo'No record Found';
              }
            


            ?>
                </table>
       </div>
     </div>
    </div>

  </div>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
          $('.deletebtn').on('click',function(){
            $('#covidDeleteModel').modal('show');
            $tr=$(this).closest('tr');
            var data=$tr.children("td").map(function(){
              return $(this).text();
            }).get();
            console.log(data);
            $('#delete_id').val(data[0]);
          });


      });
    </script>
</body>

</html>