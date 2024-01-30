<!-- Banner Section Start Here -->
<section class="inner-banner">
  <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="card text-bg-dark rounded-0">
                  <img src="http://localhost/wordpress/wp-content/uploads/2023/08/Discover-Our-Departments-e1673860761465-300x73-1.png" class="card-img img-fluid rounded-0 d-none d-md-block" alt="" />
                 <img src="http://localhost/wordpress/wp-content/uploads/2023/08/Discover-Our-Departments-Mobile.png" class="card-img img-fluid rounded-0 d-block d-md-none" alt="" />

                                     <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                                         <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                                           <div id="batitle"></div>
                                          <script>
                                          //const urlParams = new URLSearchParams(window.location.search);
                                          //const deptId = urlParams.get('deptID');
                                          //console.log(deptId);
                                          fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
                                          //console.log(data);
                                          return data.json();
                                          }).then((completedata)=>{
                                           let data1="";
                                           if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
                                           completedata.data.map((values1)=>{
                                              if (values1.name == departmentName){
                                             data1+=` <div>

                          <h1 class="card-title ms-md-5">${values1.name}</font></h1>
                                             </div>`;
                                           }
                                           });
                                          }
                                           document.getElementById('batitle').innerHTML=data1;
                                          }).catch((err)=>{
                                           console.log(err);
                                          })
                                          </script>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                       </div>
                 </section>
<!-- Banner Section End Here -->
<!-- Breadcrumbs section starts here -->
<section class="breadcrumb-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
<ol id="breadcrumbs" class="breadcrumb">
<li class=" breadcrumb-item item-home" data-initial-font-size="16"><a class="bread-link bread-home" href="http://localhost/wordpress" title="Home" data-initial-font-size="16">Home</a></li>
<li class=" breadcrumb-item separator separator-home" data-initial-font-size="16"> &gt; </li>
<li class=" breadcrumb-item item-cat item-custom-post-type-our-campuses" data-initial-font-size="16"><a class=" bread-cat bread-custom-post-type-our-campuses" href="http://localhost/wordpress/departments/" title="Our Campuses" data-initial-font-size="16">Deparments</a></li>
<li class=" breadcrumb-item separator" data-initial-font-size="16"> &gt; </li>
<div id="sncustombreadcrumb"></div>
<script>
//const urlParams = new URLSearchParams(window.location.search);
//const deptId = urlParams.get('deptID');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
let data1="";
if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
completedata.data.map((values1)=>{
   if (values1.name == departmentName){
  data1+=` <div>
<li class=" breadcrumb-item item-current item-archive" data-initial-font-size="16"><strong class="bread-current bread-archive">&nbsp;${values1.name}</strong></li>
  </div>`;
}
});
}
document.getElementById('sncustombreadcrumb').innerHTML=data1;
}).catch((err)=>{
console.log(err);
})
</script>
</ol></nav>
</div>
        </div>
    </div>
</section>
<!-- Breadcrumbs section ends here -->

<div class="container">
    <div class="row">
 <div id="unitsbpath"></div>
<script>
//const urlParams = new URLSearchParams(window.location.search);
//const departmentName = urlParams.get('departmentName');
//console.log(departmentName);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
 let data1="";
 if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
 completedata.data.map((values)=>{
   var units=values.units;
   if (values.name == departmentName){
    // data1+=`<div><h3><font color=#012068 style="text-decoration: none; color:#012068">${values.name}</font></h3></div>`;
     if ((typeof units !== 'undefined') && (units.length > 0)) {
       for (var u = 0; u < units.length; u++) {
         data1+=`<div class="untext"><h6><font color=#012068 style="text-decoration: none; color:#012068">${units[u].name}|</font></h6></div>`
       }
}
 }
 });
}
 //console.log(completedata.data.name);
 document.getElementById('unitsbpath').innerHTML=data1;
}).catch((err)=>{
 console.log(err);
})
</script>
</div>
</div>
<section class="department-inner-sec">
    <div class="container">
        <div class="row">
          <style>
.tablinks{
  background-color: #012068;
  color: #FFFFFF;
  border: none;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  font-size: 16px;
  cursor: pointer;
  height: 50px;
  border-radius: 2px;
}
.tablinks1{
  background-color: #f44336;
  color: #FFFFFF;
  border: none;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  font-size: 16px;
  cursor: pointer;
  height: 50px;
  border-radius: 2px;
}
.button3 {

}
.buttonfh:hover {
  background-color: #012068;
}

.button3:hover {
  background-color: #f44336;
}
.buttonc:active{
    background: #f44336;
}

.buttonc:focus{
    background: #f44336;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.untext{
  display: inline-block;
  padding: 5px;
}

.newfrow {
    padding-bottom: 0.9rem;
    text-decoration: none;
    color: var(--primary-text);
    line-height: 1.875;
    font-size: 1rem;
}
.wnimg {
      float: left;
      margin-right: 23px;
    }

    .cpcon {
      text-align: justify;
      font-size: 16px;
    }


</style>
            <div class="col-12">
              <div class="tab">
<button class="tablinks buttonfh button3 buttonc" onclick="openDeptt(event, 'About')" id="defaultOpen">About</button>
<button class="tablinks buttonfh button3 buttonc" onclick="openDeptt(event, 'Service')">Service</button>
<button class="tablinks buttonfh button3 buttonc" onclick="openDeptt(event, 'Training')">Training</button>
<!--<button class="tablinks buttonfh button3 buttonc" onclick="openDeptt(event, 'Infrastructure')">Infrastructure</button>-->
<button class="tablinks buttonfh button3 buttonc" onclick="openDeptt(event, 'nuFaculty')">Faculty</button>
</div>

<div id="About" class="tabcontent">
<p>
 <div id="aroot"></div>
<script>
const urlParams = new URLSearchParams(window.location.search);
const departmentName = urlParams.get('departmentName');
//console.log(departmentName);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
 let data1="";
 if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
 completedata.data.map((values)=>{
   var units=values.units;
   if (values.name == departmentName){
    // data1+=`<div><h3><font color=#012068 style="text-decoration: none; color:#012068">${values.name}</font></h3></div>`;
data1+=`<div class="row">
<div>
<div>
  <img src="http://localhost/wordpress/wp-content/uploads/2023/08/Discover-Our-Departments-Mobile.png" class="wnimg" alt="" />
  </div>
<p class="cpcon" data-initial-font-size="16">${values.aboutDepartment || "Coming soon!!!"}</p>
</div>
</div>`;
 }
 });
}
 //console.log(completedata.data.name);
 document.getElementById('aroot').innerHTML=data1;
}).catch((err)=>{
 console.log(err);
})
</script>
</p>
</div>

<div id="Service" class="tabcontent">
<p>
 <div id="sroot"></div>
<script>
//const urlParams = new URLSearchParams(window.location.search);
//const deptId = urlParams.get('deptID');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
 let data1="";
 if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
 completedata.data.map((values1)=>{
    if (values1.name == departmentName){
   data1+=` <div>
 <p>${values1.serviceDepartment || "Coming soon!!!"}</p>
   </div>`;
 }
 });
}
 document.getElementById('sroot').innerHTML=data1;
}).catch((err)=>{
 console.log(err);
})
</script>
</p>
</div>

<div id="Training" class="tabcontent">
<p>
 <div id="trroot"></div>
<script>
//const urlParams = new URLSearchParams(window.location.search);
//const deptId = urlParams.get('deptID');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
 let data1="";
 if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
 completedata.data.map((values1)=>{
    if (values1.name == departmentName){
   data1+=` <div>
 <p>${values1.trainingDepartment || "Coming soon!!!"}</p>
   </div>`;
 }
 });
}
 document.getElementById('trroot').innerHTML=data1;
}).catch((err)=>{
 console.log(err);
})
</script>
</p>
</div>

<div id="Infrastructure" class="tabcontent">
<p>
 <div id="infrasroot"></div>
<script>
//const urlParams = new URLSearchParams(window.location.search);
//const deptId = urlParams.get('deptID');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
 let data1="";
 if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
 completedata.data.map((values1)=>{
    if (values1.name == departmentName){
   data1+=` <div>
<h3><font color=#012068 style="text-decoration: none; color:#012068">${values1.name}</font></h3>
 <p>${values1.infrastructureDepartment || "Coming soon!!!"}</p>
   </div>`;
 }
 });
}
 document.getElementById('infrasroot').innerHTML=data1;
}).catch((err)=>{
 console.log(err);
})
</script>
</p>
</div>

<div id="nuFaculty" class="tabcontent">
<p>
 <div id="facultyroot"></div>
<script>
//const urlParamsf = new URLSearchParams(window.location.search);
//const deptId = urlParamsf.get('deptID');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((nfacultydata)=>{
  let li = `<tr><th></th></tr>`;
 if ((typeof nfacultydata.data !== 'undefined') && (nfacultydata.data.length > 0)) {
 nfacultydata.data.map((valuesf)=>{
    if (valuesf.name == departmentName){
      var deptFaculty=valuesf.deptFaculty;
      valuesf.deptFaculty.sort((a, b) => a.departmentSeniority > b.departmentSeniority ? 1 : -1);
      if ((typeof deptFaculty !== 'undefined') && (deptFaculty.length > 0)) {
       for (var i = 0; i < deptFaculty.length; i++) {
         li+=   ` <tr>
    <div class="srow">
            <div class="column">
              <div class="newfrow">
                  <a style="text-decoration:none;color:#012068" href="http://localhost/wordpress/index.php/faculties?facultyDocId=${deptFaculty[i].facultyDocId}">${deptFaculty[i].nameOnRecords}</a>
              </div>
              </div>
              </div>
    </tr>`;

       }
     }
}
 });
}
document.getElementById('facultyroot').innerHTML=li;
}).catch((err)=>{
 console.log(err);
})
</script>
</p>
</div>



            </div>
        </div>

        <script>
       function openDeptt(evt, ndeptName) {
         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("tabcontent");
         for (i = 0; i < tabcontent.length; i++) {
           tabcontent[i].style.display = "none";
         }
         tablinks = document.getElementsByClassName("tablinks");
         for (i = 0; i < tablinks.length; i++) {
           tablinks[i].className = tablinks[i].className.replace(" active", "");
         }
         document.getElementById(ndeptName).style.display = "block";
         evt.currentTarget.className += " active";
       }

       // Get the element with id="defaultOpen" and click on it
       document.getElementById("defaultOpen").click();
       </script>


</div>
</section>
<!-- Contact Information Section Start Here -->
<section class="contact-info mt-4 mt-md-5">
<div class="container">
  <div class="row">
      <div class="col-12">
          <div class="main-headings">
              <h2><?php the_field('contact_info_heading' , 'option'); ?></h2>
          </div>
          <div class="row g-5">
              <?php
              // Check rows existexists.
              if (have_rows('contact_info', 'option')) :
                  // Loop through rows.
                  while (have_rows('contact_info' , 'option')) : the_row();
              ?>
                      <div class="col-md-4 position-relative">
                          <div class="border-right">
                              <span><?php echo get_sub_field('heading' , 'option'); ?></span>
                              <?php echo get_sub_field('content' , 'option'); ?>
                          </div>
                      </div>
              <?php
                  // End loop.
                  endwhile;
              // No value.
              else :
              // Do something...
              endif;
              ?>
          </div>
      </div>
  </div>
</div>
</section>
<!-- Contact Information Section End Here -->

