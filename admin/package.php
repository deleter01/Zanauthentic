<?php
    include("include/auth_session.php");
    include 'include/header.php';
?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Packages</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><b><a href="index.html">Create a Package&nbsp;<i class="la la-pencil-square-o"></i></a></b> 
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
          <div class="card pull-up ecom-card-1 bg-info text-center">
              <div class="card-content ecom-card2 height-100">
                  <h2 class="text-white p-1 text-center">0</h2>
                  <h5 class="text-white"><b>Total Packages</b></h5>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-light text-center">
            <div class="card-content ecom-card2 height-100">
                <h2 class="text-white p-1 text-center">0</h2>
                <h5 class="text-white "><b>Unpublish</b></h5>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-success text-center">
            <div class="card-content ecom-card2 height-100">
                <h2 class="text-white p-1 text-center">0</h2>
                <h5 class="text-white"><b>Published</b></h5>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-dark text-center">
            <div class="card-content ecom-card2 height-100">
                <h2 class="text-white p-1 text-center">0</h2>
                <h5 class="text-white"><b>Expired</b></h5>
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
                                <th scope="col">Package Name</th>
                                <th scope="col">Belongs To</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Image</th>
                                <th scope="col">Operation</th>
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