<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
if (empty($this->session->userdata('login'))) {
redirect('ca/login');

}
?>

<body class="hm-gradient">
    
    <main>
        
        <!--MDB Tables-->
        <div class="container mt-4" style="width:150rem;border: 1px solid black">

            <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Your Data</h2>
                            
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped" style="width:100%; ">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <!--<th>S.No.</th>-->
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>City</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody><!--where('Username',$_SESSION['username])->-->
                            <?php //$i=1;
                             foreach($this->db->where('Id',$_SESSION['user_id'])->get('register')->result_array() as $value) { ?>
                            <tr>
                                <!--<td><?= $i ?></td>-->
                                <td><?= $value['Name']?></td>
                                <td><?= $value['Email']?></td>
                                <td><?= $value['Mobile_Number']?></td>
                                <td><?= $value['City']?></td>
                                <td><?= $value['Password']?></td>
                                
                            </tr>
                            <?php //$i++;
                             }  ?>
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
           
    </main>
  
</body>



<style>
</style>