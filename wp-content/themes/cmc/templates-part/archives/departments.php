<!-- Banner Section Start Here -->
<section class="inner-banner">
  <div class="container-fluid p-0 m-0">
    <div class="row g-0">
      <div class="col-12 p-0">
        <div class="card text-bg-dark rounded-0">
          <img src="http://172.17.13.84/institution/wp-content/uploads/sites/14/2023/12/Discover-Our-Departments-13-12-2023.png"
            class="card-img img-fluid rounded-0 d-none d-md-block">
          <img src="http://172.17.13.84/institution/wp-content/uploads/sites/14/2023/01/Discover-Our-Departments-Mobile.png"
            class="card-img img-fluid rounded-0 d-block d-md-none">
          <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
            <h1 class="card-title ms-md-5">
              <?php the_field('banner_heading'); ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_template_part('templates-part/breadcrumb');
?>
<!-- Banner Section End Here -->
<section class="departments-sec">
  <div class="container">
    <div class="row">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>

        .naccordion {
          background-color: #eee;
          color: #444;
          cursor: pointer;
          padding: 18px;
          width: 80%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
        }

        .dcolumn {
          float: left;
          width: 33.33%;
          padding: 10px;
          height: 7120px;
        }
       @media only screen and (max-width:800px) {
  /* For tablets:*/
  .naccordion {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .drow, .dcolumn, .naccordion {
    width: 100%;
  }
}
      </style>

      <div class="drow" id="deptRow">
      <script>
        fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then(resp => resp.json()).then(completeData => {
          if ((typeof completeData.data !== 'undefined') && (completeData.data.length > 0)) {
            var catData = [], categoryList = [{ id: 'clinical', name: 'Clinical' }, { id: 'generalservices', name: 'General Services' }, { id: 'others', name: 'Others' }];
            for (var i = 0; i < categoryList.length; i++) {
              document.getElementById("deptRow").innerHTML += '<div class="dcolumn"><h2><font color="#012068" style="text-decoration:none;color:#012068">' + categoryList[i].name + '</font></h2><br></br><div id="' + categoryList[i].id + '"><a href="#"></a></div></div>';
              catData = completeData.data.filter(o1 => (o1.departmentCategory == categoryList[i].name));
              if ((typeof catData !== 'undefined') && (catData.length > 0)) {
                for (var j = 0; j < catData.length; j++) {
                  document.getElementById(categoryList[i].id).innerHTML += '<div><p><button class="naccordion"><h6><font color="#012068"><a style="text-decoration:none;color:#012068" href="http://localhost/wordpress/index.php/department?departmentName=' + catData[j].name + '">' + catData[j].name + '</a></font></h6></button></p></div>';
                }
              }
            }
          }
        });
      </script>
    </div>

</div>
</div>
</section>
<!-- Contact Information Section Start Here -->
<!-- Contact Information Section End Here -->
