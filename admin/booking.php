<?php
    include("include/auth_session.php");
    include 'include/header.php';
?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Booking</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Booking
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<section id="">
    <!-- Status Button-->
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-12">
          <div class="card pull-up ecom-card-1 bg-white">
              <div class="card-content ecom-card2 height-100">
                  <h5 class="text-muted danger position-absolute p-1">Booking</h5>
                  <div>
                      <i class="btn btn-primary btn-min-width btn-sm float-right">New</i>
                  </div><br><br>
                    <h2 class="card-footer text-muted p-1"><b>1</b></h2>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
          <div class="card pull-up ecom-card-1 bg-white">
              <div class="card-content ecom-card2 height-100">
                  <h5 class="text-muted info position-absolute p-1">Booking</h5>
                  <div>
                    <i class="btn btn-success btn-min-width btn-sm float-right">Completed</i>
                  </div><br><br>
                  <h2 class="card-footer text-muted p-1"><b>1</b></h2>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-12">
          <div class="card pull-up ecom-card-1 bg-white">
              <div class="card-content ecom-card2 height-100">
                  <h5 class="text-muted warning position-absolute p-1">Booking</h5>
                  <div>
                    <i class="btn btn-warning btn-min-width btn-sm float-right">Pendding</i>
                  </div><br><br>
                  <h2 class="card-footer text-muted p-1"><b>1</b></h2>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-100">
                <h5 class="text-muted info position-absolute p-1">Booking</h5>
                <div>
                  <i class="btn btn-danger btn-min-width btn-sm float-right">Canceled</i>
                </div><br><br>
                <h2 class="card-footer text-muted p-1"><b>1</b></h2>
            </div>
        </div>
    </div>
  </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <!-- Contect comes here -->

                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tour's name</th>
                                <th scope="col">People</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Tour's Date</th>
                                <th scope="col">Date</th>
                                <th scope="col">Operation</th>
                              </tr>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!---Contect End here--> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>    
</section>
<!-- // Pie charts section end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


<?php
    include 'include/footer.php';
?>