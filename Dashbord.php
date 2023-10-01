<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/bootstrap.min.css"rel="stylesheet" >

<link rel="stylesheet"href="./css/style.css">
<script src="./java_script/1c26fb5c51.js"
 crossorigin="anonymous">

 </script>
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- navbar start -->
   
     
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
     <!-- offcanwas  -->
     <button class= "navbar-toggler me-2" 
     type="button"
      data-bs-toggle="offcanvas"
       data-bs-target="#offcanvasExample" 
       aria-controls="offcanvasExample">
       <span class="navbar-toggler-icon"></span>
     </button>
     <!-- offcanwas end  -->
      <a class="navbar-brand text-uppercase fw-bold text-uppercase me-auto"
       href="#">KAMAL LIBRARY</a>
      <button class="navbar-toggler" 
      type="button"
       data-bs-toggle="collapse" 
       data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
         aria-expanded="false"
          aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        <form class="d-flex ms-auto" role="search">
          <div class="input-group my-3 my-lg-0 ">
            <input type="text" class="form-control"
             placeholder="Search..." 
              
             aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary btn-primary text-white"
             type="button" 
             id="button-addon2">
             <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>
        <ul class="navbar-nav  mb-2 mb-lg-0">
         
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"
             href="#" role="button" 
             data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="./image/bird.jpg" class="user-icon"/> 
             Admin
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><a class="dropdown-item" href="#">Change Password</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
    
     <!-- navbar end -->
     <!-- offcanvas start -->
    
    
    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" 
    tabindex="-1" 
    id="offcanvasExample" 
    aria-labelledby="offcanvasExampleLabel">
      
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
           <div class="text-secondary small text-uppercase fw-bold">Core</div>
          </li>


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fas fa-tachometer-alt-fast me-2"></i>Dashboard</a>
          </li>
          <li class="nav-item my-0">
            <hr>
          </li>
          <li class="nav-item">
            <div class="text-secondary small text-uppercase fw-bold">
              Inventory
            </div>
           </li>
          
          
            
            <a class="nav-link sidebar-link"
             data-bs-toggle="collapse"
              href="#booksMgmt" 
              role="button" 
              aria-expanded="false"
               aria-controls="booksMgmt">
               <i class="fas fa-book me-2"></i>
               Books Management
               <span class="right-icon float-end"
               ><i class="fas fa-chevron-down"></i>
              </span>
          </a>
        
        
            <div class="collapse" 
            id="booksMgmt">
              <div>
                <ul class="navbar-nav ps-3">  
                <li>
                 <a href="./add-book.html" class="nav-link"><i
                   class="fa-regular fa-plus me-2"></i>
                   Add New</a>
                </li>
                <li>
                  <a href="./manage-book.html" 
                  class="nav-link"><i
                   class="fa-solid fa-list me-2"></i>
                   Manage All</a>
                 </li>
                </ul>
                
              </div>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link sidebar-link"
             data-bs-toggle="collapse"
              href="#StudentsMgmt" 
              role="button" 
              aria-expanded="false"
               aria-controls="StudentsMgmt">
               <i class="fas fa-users me-2"></i>
               Student Management
               <span class="right-icon float-end"
               ><i class="fas fa-chevron-down"></i>
              </span>
          </a>
            <div class="collapse" 
            id="StudentsMgmt">
              <div>
                <ul class="navbar-nav ps-3"> ` 
                <li>
                 <a href="./add-Students.html" class="nav-link"><i 
                  class="fa-regular fa-plus me-2"></i>
                 Add Students</a>
                </li>
                <li>
                  <a href="./manage-Students.html"
                   class="nav-link"><i 
                    class="fa-solid fa-list me-2"></i>
                    Manage  Students
                  
                  </a>
                 </li>
                </ul>
                
              </div>
            </div>
          </li>
          <li class="nav-item my-0">
            <hr>
          </li>
          <li class="nav-item">
            <div class="text-secondary small text-uppercase fw-bold">
              Bussines 
            </div>
           </li>
          
         <li class="nav-item ">
           <a class="nav-link sidebar-link"
            data-bs-toggle="collapse"
             href="#StudentsbooksMgmt" 
             role="button" 
             aria-expanded="false"
              aria-controls="StudentsbooksMgmt">
              <i class="fa-solid fa-book-open me-2"> </i>
              Books loan
              <span class="right-icon float-end"
              ><i class="fas fa-chevron-down"></i>
             </span>
         </a>
           <div class="collapse" 
           id="StudentsbooksMgmt">
             <div>
               <ul class="navbar-nav ps-3">  
               <li>
                <a href="./Book-Lone.html" class="nav-link"><i 
                 class="fa-regular fa-plus me-2"></i>
                Add New</a>
               </li>
               <li>
                 <a href="./manage-Loan.html" class="nav-link"><i 
                   class="fa-solid fa-list me-2"></i>
                   Manage All</a>
                   <div class="collapse" 
                   id="booksMgmt">
                   
                   </div>
                 </li>

                </li>
               </ul>
                   
                 <li class="nav-item ">
                  <a class="nav-link sidebar-link"
                   data-bs-toggle="collapse"
                    href="#StudentsSubsMgmt" 
                    role="button" 
                    aria-expanded="false"
                     aria-controls="StudentsSubsMgmt">
                     <i class="fa-solid fa-indian-rupee-sign me-2"></i>
                      Subscretion
                     <span class="right-icon float-end"
                     ><i class="fas fa-chevron-down"></i>
                    </span>
                </a>
                  <div class="collapse" 
                  id="StudentsSubsMgmt">
                    <div>
                      <ul class="navbar-nav ps-3">  
                      <li>
                       <a href="./SubscriptionPlane.html" class="nav-link"><i 
                        class="fa-regular fa-plus me-2"></i>
                       Plans</a>
                      </li>
                      <li>
                        <a href="./PurchaseHistory.html" class="nav-link"><i 
                          class="fa-solid fa-list me-2"></i>
                          Purchase History</a>
                       </li>
                      </ul>
                      
                
             </div>
           </div>
           <li class="nav-item my-0">
            <hr>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fa-solid fa-right-from-bracket me-2"></i>Logut</a>
          </li>
         </li>
        </ul>
      </div>
    </div>
      <!-- offcanvas end -->
      <!-- main contant start -->
      <main class="mt-1 pt-3">
        <div class="container-fluid">
          <!-- cards -->
          <div class="row">
          <div class="col-md-12">
            <h4 class="fw-bold text-upparcase">Dashboard</h4>
            <p>statistic of the system</p>
          </div>
          <div class="col-md-3">
          <div class="card" >
            <div class="card-body text-center">
              <h6 class="card-title text-uppercase text-muted">Total Books

              </h6>
              <h1>130</h1>
              
              
              <a href="#" class="card-link link-underline-light">view more</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" >
            <div class="card-body text-center">
              <h6 class="card-title text-uppercase text-muted">Total Students

              </h6>
              <h1>1430</h1>
              
              
              <a href="#" class="card-link link-underline-light">view more</a>
            </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card" >
            <div class="card-body text-center">
              <h6 class="card-title text-uppercase text-muted"> Total Revenue

              </h6>
              <h1>130,500</h1>
              
              
              <a href="#" class="card-link link-underline-light">view more</a>
            </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card" >
            <div class="card-body text-center">
              <h6 class="card-title text-uppercase text-muted">Total Books Loan

              </h6>
              <h1>30</h1>
              
              
              <a href="#" class="card-link link-underline-light">view more</a>
            </div>
            </div>
          </div>
          </div>
          <!-- tabs -->
          <div class="row mt-5">
          <div class="col-md-12">

            <ul class="nav nav-tabs" 
            id="myTab"
             role="tablist">
              <li class="nav-item" 
              role="presentation">
                <button 
                class="nav-link  text-uppercase active"
                 id="recent-student"
                  data-bs-toggle="tab"
                   data-bs-target="#recent-student-pane"
                    type="button" role="tab"
                    
                    aria-controls="recent-student-pane"
                     aria-selected="true">New Student</button>
              </li>
              <li class="nav-item" role="presentation">
                <button 
                class="nav-link text-uppercase"
                 id="recent-loane"
                  data-bs-toggle="tab" 
                  data-bs-target="#recent-loane-pane" 
                  type="button" role="tab"
                   aria-controls="recent-loane-pane"
                    aria-selected="false">
                    Recent Loans
                  </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                 class="nav-link text-uppercase"
                 id="recent-subs-tab"
                 data-bs-toggle="tab"
                  data-bs-target="#recent-subs-tab-pane"
                   type="button" role="tab"
                    aria-controls="recent-subs-tab-pane"
                     aria-selected="false">
                     Recent Subscription
                    </button>
              </li>
             
            </ul>
            <div class="tab-content"
             id="myTabContent">
              <div class="tab-pane fade show active" 
              id="recent-student-pane" 
              role="tabpanel"
               aria-labelledby="recent-student" 
              tabindex="0">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Preparing For</th>
                    <th scope="col">RegisterOn</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>UPSC</td>
                  <td>14-05-2023,10:15 AM</td>
                  <td><span class="badge text-bg-success">Active</span></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>kamal</td>
                  <td>UPSC</td>
                  <td>14-05-2023,10:15 AM</td>
                  <td><span class="badge text-bg-danger">Inactive</span></td>
                </tr>
                </tbody>
              </table>
            </div>

              <div class="tab-pane fade"
              id="recent-loane-pane" 
              role="tabpanel"
               aria-labelledby="recent-loane"
              tabindex="0">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Book Name</th>
                    <th scope="col"> Students Name</th>
                    <th scope="col">Loan Date</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <th scope="row">1</th>
                  <td>Physical Education</td>
                  <td>Kamal</td>
                  <td>14-05-2023</td>
                  <td>28-05-2023</td>
                  <td><span class="badge text-bg-success">Active</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td> Education</td>
                  <td>Aman</td>
                  <td>17-05-2023</td>
                  <td>03-06-2023</td>
                  <td><span class="badge text-bg-warning">Return</span></td>
                </tr>
               
                </tbody>
              </table>
            </div>

              <div class="tab-pane fade"
               id="recent-subs-tab-pane"
               role="tabpanel"
                aria-labelledby="recent-subs-tab"
                tabindex="0">
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Student Name</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">End Date</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <th scope="row">1</th>
                    <td>Kamal</td>
                    <td>500</td>
                    <td>14-05-2023</td>
                    <td>28-05-2023</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                  </tr>
                 
                  </tbody>
                </table>
              </div>
</div>
          </div>
          </div>
           </div>
      </main>
      <!-- main contant end -->
 
  <script src="java_script/bootstrap.bundle.min.js"
   integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
   crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/1c26fb5c51.js"
   crossorigin="anonymous">

   </script>
 </body>
</html>

