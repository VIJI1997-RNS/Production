<?php
get_header();
?>


<section class="search-result-section">
  
  <div class="container">
    <div class="result-count">
      <p>Result 1-10 of 456</p>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore, seeks to be a witness to the healing ministry of Christ education,</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore...</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore, seeks to be a witness to the healing ministry of Christ education,</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore...</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore, seeks to be a witness to the healing ministry of Christ education,</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore...</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore, seeks to be a witness to the healing ministry of Christ education,</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore...</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>Kotak Prime : Online EMI Payment - BillDesk</h2>
      <p>Please make payments towards your loan account only to Authorised Staff with valid ID cards and insist for receipt for every payment made.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore, seeks to be a witness to the healing ministry of Christ education,</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
    <div class="content search-box-result">
      <h2>The Christian Medical College, Vellore...</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <div class="date-time">
        <p>17 jan, 2023, 12pm ESt</p>
      </div>
    </div>
  
  <a href="#" id="loadMore" class="loadmore btn btn-lg main-btn">Load More</a>
</div>
</section>




<?php get_footer(); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".content").slice(0, 4).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".content:hidden").slice(0, 4).slideDown();
      if($(".content:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
      }
    });
  })
</script>