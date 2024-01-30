<section class="finaltest-inner-sec">
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

</style>
            <div class="col-12">
              <div class="tab">
<button class="tablinks" onclick="openDeptt(event, 'About')" id="defaultOpen">About</button>
<button class="tablinks" onclick="openDeptt(event, 'Service')">Service</button>
</div>

<div id="About" class="tabcontent">
<h3>About</h3>
<p>
 <div id="aroot"></div>
<script>
const urlParams = new URLSearchParams(window.location.search);
const deptId = urlParams.get('deptID');
console.log(deptId);
fetch('https://academics.cmcvellore.edu.in/api/collegeWebsite/getAllDepartment').then((data)=>{
//console.log(data);
return data.json();
}).then((completedata)=>{
 let data1="";
 completedata.data.map((values)=>{
   if (values._id == deptId){
     data1+=` <div>
   <h3><font color=#012068 style="text-decoration: none; color:#012068">${values.name}</font></h3>
   <p>${values.aboutDepartment || "Coming soon!!!"}</p>
     </div>`;
 }
 });
 document.getElementById('aroot').innerHTML=data1;
}).catch((err)=>{
 console.log(err);
})
</script>
</p>
</div>

<div id="Service" class="tabcontent">
<h3>Service</h3>
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
 completedata.data.map((values)=>{
    if (values._id == deptId){
   data1+=` <div>
<h3><font color=#012068 style="text-decoration: none; color:#012068">${values.name}</font></h3>
 <p>${values.serviceDepartment || "Coming soon!!!"}</p>
   </div>`;
 }
 });
 document.getElementById('sroot').innerHTML=data1;
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

