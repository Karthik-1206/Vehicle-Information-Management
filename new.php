<?php 
                                    $con = mysqli_connect("localhost","root","","vehicle");

                                    if(isset($_GET['VehicleNo']))
                                    {
                                        $VehicleNo = $_GET['VehicleNo'];

                                        $query = "SELECT * FROM nu WHERE id='$VehicleNo' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form">
                                                    <label for="">VehicleNo</label>
                                                    <input type="text" value="<?= $row['VehicleNo']; ?>" class="form">
                                                </div>
                                                <div class="form">
                                                    <label for="">VehicleName</label>
                                                    <input type="text" value="<?= $row['VehicleName']; ?>" class="form">
                                                </div>
                                                <div class="form">
                                                    <label for="">Address</label>
                                                    <input type="text" value="<?= $row['Address']; ?>" class="form">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>