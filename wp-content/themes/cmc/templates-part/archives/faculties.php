<!-- Breadcrumbs section starts here -->
<section class="breadcrumb-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
<ol id="breadcrumbs" class="breadcrumb">
<li class=" breadcrumb-item item-home" data-initial-font-size="16"><a class="bread-link bread-home" href="http://localhost/wordpress" title="Home" data-initial-font-size="16">Home</a></li>
<li class=" breadcrumb-item separator separator-home" data-initial-font-size="16"> &gt; </li>
<li class=" breadcrumb-item item-cat item-custom-post-type-our-campuses" data-initial-font-size="16"><a class=" bread-cat bread-custom-post-type-our-campuses" href="http://localhost/wordpress/index.php/departments/" title="Our Campuses" data-initial-font-size="16">Deparments</a></li>
<li class=" breadcrumb-item separator" data-initial-font-size="16"> &gt; </li>
<div id="nbfacultybreadcrumb"></div>
<script>
//const urlParams = new URLSearchParams(window.location.search);
//const deptId = urlParams.get('deptID');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllFaculty').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
let data1="";
if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
completedata.data.map((values1)=>{
   if (values1._id==facultyDocId){
  data1+=` <div>
<li class=" breadcrumb-item item-current item-archive" data-initial-font-size="16"><strong class="bread-current bread-archive">&nbsp;${values1.department}</strong></li>
  </div>`;
}
});
}
document.getElementById('nbfacultybreadcrumb').innerHTML=data1;
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
<section class="faculties-inner-sec">
    <div class="container">
        <div class="row">
          <style>
          .faculties-inner-sec .post-info span {
            color: var(--secondary-text);
        }
        .nsfaculty-slider mb-5 {
        margin-bottom: 3rem!important
        }
          </style>
            <p>
 <div id="nufaculties"></div>
<script>
const urlParamsf = new URLSearchParams(window.location.search);
const facultyDocId = urlParamsf.get('facultyDocId');
//console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllFaculty').then((data)=>{
//console.log(data);
return data.json();
}).then((nufacultiesdata)=>{
 let lif = "";
 if ((typeof nufacultiesdata.data !== 'undefined') && (nufacultiesdata.data.length > 0)) {
 nufacultiesdata.data.map((valuesfac)=>{
    if (valuesfac._id==facultyDocId){
   lif+=`<div class="row">
   <div class="col-12 pb-4">
                 <h4><font color=#0a0a0a style="text-decoration: none; color:#012068">${valuesfac.nameOnRecords}</font></h4>
                <p>${valuesfac.designation}</p>
                </div>
                <div class="col-md-3">
                  <img src=${valuesfac.avatar || "https://s3.amazonaws.com/img.studenthub.in/sampleImage/sample.jpg"} class="img-fluid" alt="Posts held">
                  </div>
                  <div class="col-md-8 ms-md-3">
                      <div class="main-headings text-start">
                      </div>
                      <p data-initial-font-size="16">${valuesfac.department}</p>
                                              <div class="post-info">
                                  <ul class="list-unstyled">
                                      <li data-initial-font-size="16">
                                          <span data-initial-font-size="16">
                                              Dept. Address :                                    </span>
                                          <p data-initial-font-size="16">Christian Medical College, Ida Scudder Road, Vellore – 632004. Tamil Nadu, India</p>
                                      </li>
                                  </ul>
                              </div>
                                              <div class="post-info">
                                  <ul class="list-unstyled">
                                      <li data-initial-font-size="16">
                                          <span data-initial-font-size="16">
                                              Email us :                                    </span>
                                          <p data-initial-font-size="16">${valuesfac.email}</p>
                                      </li>
                                  </ul>
                              </div>
                                              <div class="post-info">
                                  <ul class="list-unstyled">
                                      <li data-initial-font-size="16">
                                          <span data-initial-font-size="16">
                                               Tel :                                    </span>
                                          <p data-initial-font-size="16">Call: +91 8000338855</p>
                                      </li>
                                  </ul>
                              </div>

                              </div>

             </div>`;

 }
 });
}
 document.getElementById('nufaculties').innerHTML= lif;
}).catch((err)=>{
 console.log(err);
})
</script>


</p>

        </div>

  <div id="nbfacultypub"></div>
  <style>
  .nfeducation-box,
      .award-box .row {
          background: #f1f0f0;
          height: 100%;
          padding: 2rem 4rem 5rem;
      }
      .nfacol-md-6 {
  flex: 0 0 auto;
  width: 100%
  }
  </style>
              <script>
              //const urlParams = new URLSearchParams(window.location.search);
              //const deptId = urlParams.get('deptID');
              //console.log(deptId);
              fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllFaculty').then((data)=>{
              //console.log(data);
              return data.json();
              }).then((completedata)=>{
              let datapub="";
              if ((typeof completedata.data !== 'undefined') && (completedata.data.length > 0)) {
              completedata.data.map((valuesp)=>{
                 var publist=valuesp.publist;
                 if (valuesp._id==facultyDocId){
                   if ((typeof publist !== 'undefined') && (publist.length > 0)) {
                     datapub+=`<div class="nfeducation-box">
                       <div class="main-headings text-start">
                                           <h2><span data-initial-font-size="30">Publications</span></h2>
                </div>`
     for (var p = 0; p < publist.length; p++) {
       datapub+=`
       <div class="nfacol-md-6">
        <div class="col-12">
         <div class="education-slider owl-carousel owl-theme position-relative owl-loaded owl-drag">
       <p data-initial-font-size="16">${publist[p].title}</p>
       </div>
       </div>
       </div>`;
     }
}
              }
              });
              }
              document.getElementById('nbfacultypub').innerHTML=datapub;
              }).catch((err)=>{
              console.log(err);
              })
              </script>
            </div>
      </div>
    </section>



    <!-- Contact Information Section Start Here

    Contact Information Section End Here -->

