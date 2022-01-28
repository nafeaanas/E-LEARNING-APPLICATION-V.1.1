<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Student</title>
</head>
<body>
    <main class="row w-100 h-100"> 
        <?php
           include '../decoupage/sidbar.php'
        ?>   

        <div class="container-fuild  mt-2 col">
            <?php
              include '../decoupage/nav.php'
            ?>   

          <section class="d-flex flex-row justify-content-between align-items-center px-4 pt-2">
                <div>
                        <p><strong>Students List</strong></p>
                </div>
                <div class="nvr d-flex flex-row align-items-center">
                    <div class="pe-4">
                        <img class="" src="image/Vector.png" alt="liste">
                    </div>  
                    <div>  
                        <button class="btn bg-info text-white fs-6 ">ADD NEW STUDENT</button>
                    </div>  
                </div>
          </section> 
        
         <section  class="tab table-responsive mx-4  pt-2 ">
            <table class="table table-borderless">
                    <thead >
                      <tr class=" text-muted">
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Enrole number</th>
                        <th scope="col" class="text-nowrap">Date of admission</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                 <tbody>
                     <?php
                         $data = file_get_contents("Student.json");
                         $students_list = json_decode($data,true);
                         foreach ($students_list as $info) {
                             echo '<tr>';
                             echo '<tr><td></td></tr>';
                             echo '<td class="bg-white rounded-1"> <img src="image/student.png" alt=""> </td>';
                             echo '<td class="align-middle bg-white">'.$info['Name'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['Email'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['Phone'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['EnrollNumber'].'</td>';
                             echo '<td class="align-middle bg-white text-nowrap">'.$info['Dateofadmission'].'</td>';
                             echo '<td class="bg-white rounded-1 align-middle" > <a href=""><img src="image/Vector (1).png" alt=""></a></td>';
                             echo '<td class="bg-white rounded-1 align-middle" > <a href=""><img src="image/Vector (2).png" alt=""></a></td>';
                             echo ' </tr>';                             
                           };
                     ?>
 
                </tbody>
            </table>
        </section>
      </div>    
    </main>
  <script src="bootstrap.bundle.min.js"></script>  
</body>
</html>



