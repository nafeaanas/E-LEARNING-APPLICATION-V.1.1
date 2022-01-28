<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Payment</title>
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
                  <p><strong>Payment Details</strong></p>
              </div>
                <div class="pe-4">
                  <img class="" src="image/Vector.png" alt=""> 
                </div>
          </section> 
        
          <section  class="tab table-responsive mx-4  pt-2 ">
                <table class="table table-borderless table-striped ">
                    <thead >
                      <tr class=" bg-light text-muted">
                        <th scope="col">Name</th>
                        <th scope="col" class="text-nowrap">Payment Schedule</th>
                        <th scope="col" class="text-nowrap">Bill Number</th>
                        <th scope="col" class="text-nowrap">Amount Paid</th>
                        <th scope="col" class="text-nowrap">Balance amount</th>
                        <th scope="col">Date </th>
                        <th scope="col"></th>
                      </tr>
                     </thead>
                   <tbody> 
                        <?php 
                            
                            $data = file_get_contents("Payment.json");
                            $payment_list = json_decode($data,true);
                             foreach ($payment_list as $info) {
                                 echo '<tr>';
                                 echo '<td class="bg-white">'.$info['Name'].'</td>';
                                 echo '<td class="bg-white">'.$info['PaymentSchedule'].'</td>';
                                 echo '<td class="bg-white">'.$info['BillNumber'].'</td>';
                                 echo '<td class="bg-white">'.$info['AmountPaid'].'</td>';
                                 echo '<td class="bg-white">'.$info['BalanceAmount'].'</td>';
                                 echo '<td class="bg-white text-nowrap">'.$info['Date'].'</td>';
                                 echo '<td scope="row" class="align-middle bg-white"><img src="image/vector (3).png" alt=""></td>';
                                 echo '</tr>';
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