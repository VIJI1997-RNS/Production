<?php
get_header();
?>
<!-- Breadcrumb Section Start Here -->
<?php
get_template_part('templates-part/breadcrumb');
?>
<style type="text/css">
  .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
    transform: scale(.7) !important;
  }
  .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
  }
</style>
<section class="sitemap-section">
  
  <div class="container">
    <div class="text-start main-headings">
      <h2>Sitemap</h2>
    </div>
    <div class="row g-5">
      <div class="col-md-4">
        <div class="sitemap-box">
          <hr>
          <a href="#">Home</a>
          <hr>
          <a href="#">Patient Portal</a>
          <hr>
          <div class="accordion common-acord" id="myAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">Education</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                  <div class="row m-top">
                    <div class="col-md-5">
                      <div class="mega-menu-link">
                        <ul>
                          <li>
                            <a href="#">Life on Campus</a>
                          </li>
                          <li>
                            <a href="#">Apply for a Course</a>
                          </li>
                          <li>
                            <a href="#">Library</a>
                          </li>
                          <li>
                            <a href="#">College Prospectus</a>
                          </li>
                          <li>
                            <a href="#">Admissions</a>
                          </li>
                          <li>
                            <a href="#">Apply Now</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="mega-menu-link">
                        <ul>
                          <li>
                            <a href="#">Govt. Approval</a>
                          </li>
                          <li>
                            <a href="#">Medical Education</a>
                          </li>
                          <li>
                            <a href="#">Distance Education</a>
                          </li>
                          <li>
                            <a href="#">eLearning</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <a href="#">Research</a>
          <hr>
          <div class="accordion common-acord" id="myAccordion1">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Departments</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion1">
                <div class="card-body">
                  <div class="row m-top">
                    <div class="col-md-5">
                      <div class="mega-menu-link">
                        <ul>
                          <li>
                            <a href="#">Life on Campus</a>
                          </li>
                          <li>
                            <a href="#">Apply for a Course</a>
                          </li>
                          <li>
                            <a href="#">Library</a>
                          </li>
                          <li>
                            <a href="#">College Prospectus</a>
                          </li>
                          <li>
                            <a href="#">Admissions</a>
                          </li>
                          <li>
                            <a href="#">Apply Now</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="mega-menu-link">
                        <ul>
                          <li>
                            <a href="#">Govt. Approval</a>
                          </li>
                          <li>
                            <a href="#">Medical Education</a>
                          </li>
                          <li>
                            <a href="#">Distance Education</a>
                          </li>
                          <li>
                            <a href="#">eLearning</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <a href="#">Ranipet Campus</a>
          <hr>
          <a href="#">About Us</a>
          <hr>
          <a href="#">Contact Us</a>
          <hr>
          <a href="#">News</a>
          <hr>
          <a href="#">Events</a>
          <hr>
        </div>
      </div>
      <div class="col-md-5">
        <div class="sitemap-box">
          <hr>
          <a href="#">Give to CMC</a>
          <hr>
          <a href="#">FAQs</a>
          <hr>
          <div class="accordion common-acord" id="myAccordion3">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree">Quick Links</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse" data-bs-parent="#myAccordion3">
                <div class="card-body">
                  <div class="m-top">
                    <div class="group-links">
                      <a href="#">Government Orders</a>
                      <a href="#">Alumni</a>
                      <a href="#">Missions</a>
                      <a href="#">Book an appointment</a>
                      <a href="#">Vellore frieneds</a>
                      <a href="#">Our Campuses</a>
                      <a href="#">Community Worship Service</a>
                      <a href="#">Statutory Declaration Careers/Vacancies</a>
                      <a href="#">CMC Year Book 2020-2021</a>
                      <a href="#">CMC Facts and Figures 2020-2021</a>
                      <a href="#">Change Internet Password</a>
                      <a href="#">Email directory</a>
                      <a href="#">Media gellery</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>