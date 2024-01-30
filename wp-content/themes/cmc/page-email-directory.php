<?php
get_header();
?>

<!-- Breadcrumb Section Start Here -->
<?php
get_template_part('templates-part/breadcrumb');
?>
<style type="text/css">
  .email-directory-section .accordion-button::after {
    background-image: url("https://cmc.tonicww.in/wp-content/uploads/2023/03/plus-white.png");
    transform: scale(.7) !important;
  }
  .email-directory-section .accordion-button:not(.collapsed)::after {
    background-image: url("https://cmc.tonicww.in/wp-content/uploads/2023/03/minus-icon.png");
  }
  .email-directory-section table th {
    background: #e64838;
    color: #fff;
    font-weight: 400;
    padding:8px 15px;
    border: 3px solid #fff;
}
.email-directory-section .faqs-acord .accordion-button:not(.collapsed) {
    color: #fff;
    background-color: var(--primary-color);
    box-shadow: none;
    border-radius: 0;
    padding: 7px 15px 7px;
    border-left: 3px solid #fff;
    border-right: 3px solid #fff;
}
.email-directory-section .faqs-acord .card-body {
    padding: 0;
}
.email-directory-section table td {
    background: #e9e9e9;
    border: 3px solid #fff;
    padding: 7px 15px;
    color: #333;
}
.email-directory-section table td a{
  color: #333;
  text-decoration: none;
  display: block;
}
.email-directory-section .faqs-acord button.accordion-button.collapsed {
    border: 1px solid #888;
    color: #fff;
    background-color: var(--primary-color);
    box-shadow: none;
    border-radius: 0;
    padding: 7px 15px 7px;
    border-left: 3px solid #fff;
    border-right: 3px solid #fff;
}
.email-directory-section .faqs-acord .accordion-item:last-of-type .accordion-button.collapsed {
    
    border-radius: 0;
}
.email-directory-section .faqs-acord .accordion-item {
    margin-bottom: 2px;
}
section.email-directory-section {
    padding: 0 0 4rem;
}
</style>

<section class="email-directory-section">
  <div class="container">
    <div class="text-start main-headings">
      <h2>Departments Dealing With Patient Care</span></h2>
    </div>

    <div class="table-responsive">
      <table style="width:100%">
        <tr>
          <th>Department / Unit / Office </th>
          <th width="15%">Head/Ag-Head/ Person-in-charge</th>
          <th width="15%">Phone no </th>
          <th width="30%">Email</th>
          <th width="12%">OPD Timings</th>
        </tr>
      </table>
    </div>
    <div class="accordion faqs-acord" id="myAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-1">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-1">A</button>
        </h2>
        <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
          <div class="card-body">
            <div class="table-responsive">
              <table style="width:100%">
                <tr>
                  <td>Accident & Emergency </td>
                  <td width="15%">Dr. K. P. P. Abhilash </td>
                  <td width="15%"><a href="tel:0416-228-2225">0416-228-2225</a></td>
                  <td width="30%"><a href="mailto:emergency_medicine@cmcvellore.ac.in">emergency_medicine@cmcvellore.ac.in</a></td>
                  <td width="12%"></td>
                </tr>
                <tr>
                  <td>Anaesthesia</td>
                  <td width="15%">Dr. Ekta Rai</td>
                  <td width="15%"><a href="tel:0416-228-2225">0416-228-2225</a></td>
                  <td width="30%"><a href="mailto:anaesthesia@cmcvellore.ac.in">anaesthesia@cmcvellore.ac.in</a> <a href="mailto:paedanaes@cmcvellore.ac.in">paedanaes@cmcvellore.ac.in</a></td>
                  <td width="12%"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-2">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-2">B</button>
        </h2>
        <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
          <div class="card-body">
            <div class="table-responsive">
              <table style="width:100%">
                <tr>
                  <td rowspan="2">Blood Bank </td>
                  <td width="15%">Blood Bank Lab </td>
                  <td width="15%"><a href="tel:0416-228-2538">0416-228-2538</a>
                  <a href="tel:0416-228-2566">0416-228-2566</a>
                  <a href="tel:0416-228-2641">0416-228-2641</a></td>
                  <td width="30%"></td>
                  <td width="12%"></td>
                </tr>
                <tr>
                  <td width="15%">Blood Bank consultant</td>
                  <td width="15%"><a href="tel:0416-228-2093">0416-228-2093</a></td>
                  <td width="30%"></td>
                  <td width="12%"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-3">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-3">
          C</button>
        </h2>
        <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
          <div class="card-body">
            <div class="table-responsive">
              <table style="width:100%">
                <tr>
                  <td rowspan="4">Cardio-thoracic Surgery</td>
                  <td>Overall</td>
                  <td width="15%">Dr. Madhu Andrew Philip </td>
                  <td width="15%"></td>
                  <td width="30%"></td>
                  <td width="12%"></td>
                </tr>
                <tr>
                  <td>Unit 1</td>
                  <td width="15%">Dr. Madhu Andrew Philip</td>
                  <td width="15%"><a href="tel:0416-228-2106">0416-228-2106</a></td>
                  <td width="30%">
                    <a href="mailto:thoracic1@cmcvellore.ac.in">thoracic1@cmcvellore.ac.in</a> 
                    <a href="mailto:cardiothoracic1@cmcvellore.ac.in">cardiothoracic1@cmcvellore.ac.in</a>
                  </td>
                  <td width="12%">Mon, Thu</td>
                </tr>
                <tr>
                  <td>Unit 1</td>
                  <td width="15%">Dr. Madhu Andrew Philip</td>
                  <td width="15%"><a href="tel:0416-228-2106">0416-228-2106</a></td>
                  <td width="30%">
                    <a href="mailto:thoracic1@cmcvellore.ac.in">thoracic1@cmcvellore.ac.in</a> 
                    <a href="mailto:cardiothoracic1@cmcvellore.ac.in">cardiothoracic1@cmcvellore.ac.in</a>
                  </td>
                  <td width="12%">Mon, Thu</td>
                </tr>
                <tr>
                  <td>Unit 1</td>
                  <td width="15%">Dr. Madhu Andrew Philip</td>
                  <td width="15%"><a href="tel:0416-228-2106">0416-228-2106</a></td>
                  <td width="30%">
                    <a href="mailto:thoracic1@cmcvellore.ac.in">thoracic1@cmcvellore.ac.in</a> 
                    <a href="mailto:cardiothoracic1@cmcvellore.ac.in">cardiothoracic1@cmcvellore.ac.in</a>
                  </td>
                  <td width="12%">Mon, Thu</td>
                </tr>
                <tr>
                  <td colspan="2">Clinical Biochemistry</td>
                  <td width="15%"></td>
                  <td width="15%"><a href="tel:0416-228-2170">0416-228-2170</a></td>
                  <td width="30%">
                    <a href="mailto:clinbio@cmcvellore.ac.in">clinbio@cmcvellore.ac.in</a> 
                  </td>
                  <td width="12%"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-4">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-4">
          D</button>
        </h2>
        <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
          <div class="card-body">
            <div class="table-responsive">
              <table style="width:100%">
                <tr>
                  <td rowspan="2">Blood Bank </td>
                  <td width="15%">Blood Bank Lab </td>
                  <td width="15%"><a href="tel:0416-228-2538">0416-228-2538</a>
                  <a href="tel:0416-228-2566">0416-228-2566</a>
                  <a href="tel:0416-228-2641">0416-228-2641</a></td>
                  <td width="30%"></td>
                  <td width="12%"></td>
                </tr>
                <tr>
                  <td width="15%">Blood Bank consultant</td>
                  <td width="15%"><a href="tel:0416-228-2093">0416-228-2093</a></td>
                  <td width="30%"></td>
                  <td width="12%"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-5">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-5">
          E</button>
        </h2>
        <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
          <div class="card-body">
            <div class="table-responsive">
              <table style="width:100%">
                <tr>
                  <td rowspan="4">Cardio-thoracic Surgery</td>
                  <td>Overall</td>
                  <td width="15%">Dr. Madhu Andrew Philip </td>
                  <td width="15%"></td>
                  <td width="30%"></td>
                  <td width="12%"></td>
                </tr>
                <tr>
                  <td>Unit 1</td>
                  <td width="15%">Dr. Madhu Andrew Philip</td>
                  <td width="15%"><a href="tel:0416-228-2106">0416-228-2106</a></td>
                  <td width="30%">
                    <a href="mailto:thoracic1@cmcvellore.ac.in">thoracic1@cmcvellore.ac.in</a> 
                    <a href="mailto:cardiothoracic1@cmcvellore.ac.in">cardiothoracic1@cmcvellore.ac.in</a>
                  </td>
                  <td width="12%">Mon, Thu</td>
                </tr>
                <tr>
                  <td>Unit 1</td>
                  <td width="15%">Dr. Madhu Andrew Philip</td>
                  <td width="15%"><a href="tel:0416-228-2106">0416-228-2106</a></td>
                  <td width="30%">
                    <a href="mailto:thoracic1@cmcvellore.ac.in">thoracic1@cmcvellore.ac.in</a> 
                    <a href="mailto:cardiothoracic1@cmcvellore.ac.in">cardiothoracic1@cmcvellore.ac.in</a>
                  </td>
                  <td width="12%">Mon, Thu</td>
                </tr>
                <tr>
                  <td>Unit 1</td>
                  <td width="15%">Dr. Madhu Andrew Philip</td>
                  <td width="15%"><a href="tel:0416-228-2106">0416-228-2106</a></td>
                  <td width="30%">
                    <a href="mailto:thoracic1@cmcvellore.ac.in">thoracic1@cmcvellore.ac.in</a> 
                    <a href="mailto:cardiothoracic1@cmcvellore.ac.in">cardiothoracic1@cmcvellore.ac.in</a>
                  </td>
                  <td width="12%">Mon, Thu</td>
                </tr>
                <tr>
                  <td colspan="2">Clinical Biochemistry</td>
                  <td width="15%"></td>
                  <td width="15%"><a href="tel:0416-228-2170">0416-228-2170</a></td>
                  <td width="30%">
                    <a href="mailto:clinbio@cmcvellore.ac.in">clinbio@cmcvellore.ac.in</a> 
                  </td>
                  <td width="12%"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
