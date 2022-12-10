<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Teacher</title>
      <link rel="stylesheet" href="teacher.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php include("includes/sidebar.php"); ?>
   </head>
   <body>
   <input type="checkbox" id="nav-toggle">    
    <div class ="sidebar">
        <div class = "sidebar-teacher">

        <div class = "user-image">
            <img src="images/logo.png" width= "40px" height="40px" alt="">
        </div>
         <div class="user-wrapper">
            <div>
                <h4>Bravo CisSam</h4>
                <small>Teacher</small>
            </div>
        </div>

        </div>
        
        <!-- <div class="sidebar-menu">
            <ul class="nav">
                <li>
                    <a href="teacher.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span>Home</span></a>
                </li>

                <li>
                    <a href="studentlist.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span>Student List</span></a>
                </li>

                <li>
                    <a href="createquiz.php"><span><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                        <span>Create Quiz</span></a>
                </li>

                <li>
                    <a href="statistics.html"><span><i class="fa fa-bar-chart" aria-hidden="true"></i>
                    </span>
                        <span>Statistics</span></a>
                </li>

                <li>
                    <a href=""><span><i class="fa fa-sliders" aria-hidden="true"></i></span>
                        <span>Settings</span></a>
                </li>
                <li>
                    <a href=""><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span>Logout</span></a>
                </li>
     
                <div class="active"></div>

            </ul>
        </div>
    </div> -->
<div class="main-content">
    <header>
            <h2>
                <label for="nav-toggle">
                    <span ><i class="fa fa-bars" aria-hidden="true"></i></span>
                </label>
            </h2>
        </header>

        
        <main>

        <?php
         include 'connectdb.php';?>

          <div class="cards">
        
        <div class="card-single">
           <div>
           <span>Total number of Students</span>
          
          <?php
          $sql="Select count(*) from `student`";
          $result=mysqli_query($conn,$sql);
         while($row = mysqli_fetch_array($result)){
          echo "<h1>". $row['count(*)']."</h1>";
         }
               
               ?>
         
        </div>
        <div>
            <span> <i class="fa fa-users" aria-hidden="true"></i></span>
        </div>
        </div>

        <div class="card-single">
            <div>
            <span>Students completed Quiz</span>
            <?php
          $sql="SELECT COUNT(student_score) FROM student_answer WHERE student_answer.student_score IS NOT NULL GROUP BY student_id;";
          $result=mysqli_query($conn,$sql);

          if($result){
            $row = mysqli_num_rows($result);
            echo "<h1>". $row ."</h1>";
         }
        ?>
          
         
             
         </div>
         <div>
             <span>  <i class="fa fa-user" aria-hidden="true"></i></span>
         </div>
         </div>

         <div class="card-single">
            <div>
            <span>Number of students Online</span>
            <?php
          $sql="SELECT COUNT(status) FROM student WHERE status = 'online';";
          $result=mysqli_query($conn,$sql);
         while($row = mysqli_fetch_array($result)){
            echo "<h1>". $row['COUNT(status)']."</h1>";
         }
               
               ?>        
             
         </div>
         <div>
             <span> <i class="fa fa-star" aria-hidden="true"></i></span>
         </div>
         </div>

    </div>

    <div class="recent-grid">
                <div class="projects">
                    <div class="card">

                        <div class="card-header">    
                         <h2>Student</h2>
                        </div>

                        <div class="card-body">
                            <table  width="100%">
                                <thead>
                                    <tr>
                                        <td>Student ID</td>
                                        <td>Student Name</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>

                                <tbody>
                               

                                    
                              <?php

                           $sql=" SELECT student.student_id, student.username, student.status
                           FROM student";
                           $result=mysqli_query($conn,$sql);
                           while ($row = $result->fetch_assoc()): ?>
                            <tr>
                            <?php 
                              $status = $row['status'];
                                if ($status != 'disabled'): ?>  
                                <td><?php echo $row['student_id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo  $row['status'];?></td>
                                <?php endif; ?>

                           </tr>
                          <?php endwhile; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    
                </div>

                
            </div>
           </main>

       
    
</div>

   </body>
</html>
