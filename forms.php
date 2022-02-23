<div class="recentOrders">

                <div class="cardHeader">
                    <style type="text/css">
                        .btn{
                            border: 12px;
                            border: 1px solid #306aff; 

                        }
                        .btn:hover{
                            color: #171717;
                        }
                        span:hover{
                            cursor: pointer;
                        }
                    </style>
                    <p> <a class="nav-link" href="./index.php?p=forms">Forms</a></p>
                    
                     <a href="./index.php?p=manage_forms" class="btn light-btn"><i class="fa fa-code" style="color: #306aff; text-align: center; padding-left: .7rem;"></i> Create New</a>
                </div>
              <hr class="border-primary">
<div class="col-md-12">
      <link rel="stylesheet" type="text/css" href="http://localhost/phaxadproject/css/dash-responsive.css" />
   
      <table width="100%" id="forms-tbl"  class="table table-stripped datatable">
                    <thead>
                        <tr>
                             <th>No</th>
                             <th>Time Created</th>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Links</th>
                             <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <style type="text/css">
                            .form-link{
                                color: #306aff;
                                font-weight: 400;
                            }
                            .form-link:hover{
                               text-decoration: none;
                               color: #6f7a92;
                            }
                        </style>
                       <?php $i = 1;
                         $forms = $db->conn->query("SELECT * FROM `form_list` order by date(date_created) desc");
                         while($row = $forms->fetch_assoc()):
                       ?>
                        <tr>
                            <td><?php echo "<code>".$i++ ."</code>"?> </td>
                            
           
            
           
          <!-- End Profile Iamge Icon -->


         
                            <td>
                             <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <span class="bi bi-calendar4-range d-none d-md-block  ps-2" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span>
                                </a>
                                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                  <li class="dropdown-header">
                                    <h6>Time created</h6>
                                     <?php
                                   echo date("d M, Y",strtotime($row['date_created']));
                                ?>
                                <p>time   <?php
                                   echo date("h:i:A",strtotime($row['date_created']));
                                ?> </p>
                                  </li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                               </td>
                            <td><?php echo $row['form_code'] ?></td>
                            <td>
                                <?php echo $row['title'] ?> 
                            </td>

                            
                               <!--   -->
                                <td>
                             <a class="nav-link nav-form-link d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <span class="bi bi-link d-none d-md-block  ps-2" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span>
                                </a>
                                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow form-link">
                                  <li class="dropdown-header">
                                    <h6>Link <span class="bi bi-clipboard-plus" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span> </h6>
                                     
                                   <a href="./form.php?code=<?php echo $row['form_code'] ?>" class="form-link">form.php?code=<?php echo $row['form_code'] ?></a>
                                  </li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                                  <li>
                                      <span class="bi bi-box-arrow-in-down" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span><code style="color: #19cdd4; font-size: inherit; padding-left: 5rem;">Download</code>
                                  </li>
                               </td>
                            
                             <td>
                             <div class="form-actions">
                                 <a class="nav-link nav-form-actions d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                <span class="bi bi-cone-striped d-none d-md-block  ps-2" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span>
                                </a>
                                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow form-actions">
                                  <li class="dropdown-header">
                                    <h6>actions <span class="bi bi-clipboard-plus" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span> </h6>
                                     
                                    <a href="./index.php?p=view_form&code=<?php echo $row['form_code'] ?>" class=""><span class="bi bi-eye" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span></a>
                                    <a href="./index.php?p=view_responses&code=<?php echo $row['form_code'] ?>" class=""><span class="bi bi-chat-left-dots" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span></a>
                                    <a href="javascript:void(0)" class="rem_form" data-id='<?php echo $row['form_code'] ?>'><span class="bi bi-x-octagon" style="font-size: 2rem; color: #306aff; text-align: center; padding-left: .7rem;"></span></a>
                                  </li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                             </div>
                               </td>
                        </tr>

                       <?php endwhile;  ?> 
                    </tbody>
                </table>
</div>
            </div>

<script>
    $(function(){
        $('#forms-tbl').dataTable();
        $('.rem_form').click(function(){
            start_loader();
            var _conf = confirm("Are you sure to delete this data?")
            if(_conf == true){
                $.ajax({
                    url:'classes/Forms.php?a=delete_form',
                    method:'POST',
                    data:{form_code: $(this).attr('data-id')},
                    dataType:'json',
                    error:err=>{
                        console.log(err)
                        alert("an error occured")
                    },
                    success:function(resp){
                        if(resp.status == 'success'){
                            alert("Data successfully deleted");
                            location.reload()
                        }else{
                            console.log(resp)
                        alert("an error occured")
                        }
                    }
                })
            }
            end_loader()
        })
    })
</script>