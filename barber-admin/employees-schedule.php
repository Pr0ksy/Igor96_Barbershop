<?php
    session_start();

    //Page Title
    $pageTitle = 'Radno vreme | Igor 96';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    //Check If user is already logged in
    if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
    {
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Radno vreme</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>

            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Radno vreme</h6>
                </div>
                <div class="card-body">
                    <div class="sb-entity-selector" style="max-width:300px;">
                        <form action="employees-schedule.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="emloyee_schedule_select">
                                    Izaberi frizera da namestiš radno vreme:
                                </label>
                                <div style="display:inline-block;margin-bottom: 10px;">
                                    <?php 
                                        $stmt = $con->prepare('select * from employees');
                                        $stmt->execute();
                                        $employees = $stmt->fetchAll();
                                    
                                        echo "<select class='form-control' name='employee_selected'>";
                                            foreach ($employees as $employee) 
                                            {
                                                echo "<option value=".$employee['employee_id']." ".((isset($_POST['employee_selected']) && $_POST['employee_selected'] == $employee['employee_id'])?'selected':'').">".$employee['first_name']." ".$employee['last_name']."</option>";
                                            }
                                        echo "</select>";                                    
                                    ?>
                                </div>
                                <button type="submit" name="show_schedule_sbmt" class="btn btn-primary">Prikaži</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="alert alert-info">
                    Podesite postavke vaše radne nedelje ovde. Samo izaberite vreme početka i vreme završetka da biste podesili radno vreme zaposlenih.
                    </div>
                    
                    
                    <!-- SECHEDULE PART -->
                    
                    <div class="sb-content" style="min-height: 500px;">
                        <?php

                            /** WHEN SHOW SCHEDULE BUTTON CLICKED **/

                            if(isset($_POST['show_schedule_sbmt']))
                            {
                        ?>
                                <form method="POST" action="employees-schedule.php">
                                    <input type="hidden" name="employee_id" value="<?php echo $_POST['employee_selected'];?>" hidden>     
                                    <div class="worktime-days">
                                        <?php
                                            $employee_id = $_POST['employee_selected'];
                                            $stmt = $con->prepare('select * from employees e, employees_schedule es where es.employee_id = e.employee_id and e.employee_id = ?');
                                            $stmt->execute(array($employee_id));
                                            $employees = $stmt->fetchAll();
            
                                            $days = array("1"=>"Monday",
                                                "2"=>"Tuesday",
                                                "3"=>"Wednsday",
                                                "4"=>"Thursday",
                                                "5"=>"Friday",
                                                "6"=>"Saturday",
                                                "7"=>"Sunday") ;
                                        
                                            //Available days
                                            $av_days = array();
                                            foreach($employees as $employee)
                                            {
                                                $av_days[] = $employee['day_id'];
                                            }
                                        
                                            foreach($days as $key => $value)
                                            {
                                                echo "<div class='worktime-day row'>";
                                                
                                                if(in_array($key,$av_days))
                                                {
                                                    echo "<div class='form-group  col-md-4'>";
                                                        echo "<input name='".$value."' id='".$key."' class='sb-worktime-day-switch' type='checkbox' checked>";
                                                        echo "<span class='day-name'>";                
                                                            echo $value;
                                                        echo "</span>";
                                                    echo "</div>";
                                                    
                                                    foreach($employees as $employee)
                                                    {
                                                        if(in_array($key,$av_days) && $employee['day_id'] == $key)
                                                        {
                                                            echo "<div class='time_ col-md-8 row'>";
                                                            echo "<div class='form-group col-md-6'>";
                                                            echo "<input type='time' name='".$value."-from' value='".$employee['from_hour']."' class='form-control'>";
                                                            echo "</div>";
                                                            echo "<div class='form-group col-md-6'>";
                                                            echo "<input type='time' name='".$value."-to' value='".$employee['to_hour']."'  class='form-control'>";
                                                            echo "</div>";
                                                            echo "</div>";
                                                        
                                                        }
                                                    
                                                    }
                                                }
                                                else
                                                {
                                                    echo "<div class='form-group  col-md-4'>";
                                                    echo "<input name='".$value."' id='".$key."' class='sb-worktime-day-switch' type='checkbox'>";
                                                    echo "<span class='day-name'>";                
                                                    echo $value;
                                                    echo "</span>";
                                                    echo "</div>";
                                                    
                                                    echo "<div class='time_ col-md-8 row' style='display:none;'>";
                                                    echo "<div class='form-group col-md-6'>";
                                                    echo "<input type='time' name='".$value."-from' value = '09:00' class='form-control'>";
                                                    echo "</div>";
                                                    echo "<div class='form-group col-md-6'>";
                                                    echo "<input type='time' name='".$value."-to' value = '18:00' class='form-control'>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                    
                                                }
                                                
                                                echo "</div>";
                                            }
                                        ?>
                                    </div>

                                    <!-- SAVE SCHEDULE BUTTON -->

                                    <div class="form-group">
                                        <button type="submit" name="save_schedule_sbmt" class="btn btn-info">Sačuvaj radno vreme</button>
                                    </div>
                                </form>
                        <?php
                            }
                        ?>
                    </div>

                    <?php

                        /** WHEN SAVE SCHEDULE BUTTON CLICKED **/

                        if(isset($_POST['save_schedule_sbmt']))
                        {
                            $days = array("1"=>"Monday",
                               "2"=>"Tuesday",
                               "3"=>"Wednsday",
                               "4"=>"Thursday",
                               "5"=>"Friday",
                               "6"=>"Saturday",
                               "7"=>"Sunday") ;
                            $stmt = $con->prepare("delete from employees_schedule where employee_id = ?");
                            $stmt->execute(array($_POST['employee_id']));
                            
                            foreach($days as $key=>$value)
                            {
                                if(isset($_POST[$value]))
                                {   
                                    $stmt = $con->prepare("insert into employees_schedule(employee_id,day_id,from_hour,to_hour) values(?, ?, ?,?)");
                                    $stmt->execute(array($_POST['employee_id'],$key,$_POST[$value.'-from'],$_POST[$value.'-to']));
                                    
                                    $message = "Uspešno ste promenili radno vreme!";
                                    
                                    ?>

                                        <script type="text/javascript">
                                            swal("Podesi raspored","Uspešno ste namestili radno vreme!", "success").then((value) => {}); 
                                        </script>

                                    <?php
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
  
<?php 
        
        //Include Footer
        include 'Includes/templates/footer.php';
    }
    else
    {
        header('Location: login.php');
        exit();
    }

?>