<footer>
    <div class="container">
        <div class="row">
            <div class="col-5 col-md-6">
                <div class="footer-logo">
                    <picture>
                        <img src="<?php the_field('footer_logo', 'option'); ?>" alt="<?php the_field('footer_logo_alt', 'option'); ?>" class="img-fluid">
                    </picture>
                </div>
            </div>
            <div class="col-7 col-md-6">
                <div class="social-links">
                    <?php if (have_rows('social_media', 'option')) : ?>
                        <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                            <a href="<?php the_Sub_field('url', 'option'); ?>">
                                <picture>
                                    <img src="<?php the_sub_field('icon', 'option'); ?>" alt="<?php the_sub_field('icon_alt', 'option'); ?>" class="img-fluid">
                                </picture>
                            </a>
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
        <div class="row middle-footer">
            <div class="col-md-3 p-0">
                <div class="footer-head">
                    <h2><?php the_field('contact_us_heading', 'option'); ?></h2>
                    <?php the_field('conatct', 'option'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-head quick-links-start quick-links">
                    <h2><?php the_field('quick_links_heading', 'option'); ?></h2>
                    <div class="footer-row">
                        <?php if (have_rows('quick_links', 'option')) : ?>
                            <?php while (have_rows('quick_links', 'option')) : the_row(); ?>
                                <div class="footer-col">
                                    <a href="<?php the_sub_field('external_url', 'option'); ?>">
                                        <?php the_sub_field('pages_name', 'option'); ?>
                                    </a>
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
            <div class="col-md-3">
                <div class="footer-head working-hrs">
                    <h2><?php the_field('working_hours_heading', 'option'); ?></h2>
                    <?php the_field('working_hours', 'option'); ?>
                </div>
                <div class="footer-head secondpara working-hrs">
                    <h2><?php the_field('feedback_info_heading', 'option'); ?></h2>
                    <?php the_field('feedback_info', 'option'); ?>
                </div>
            </div>
        </div>
        <div class="row bottom-footer">
            <div class="col-md-6">
                <div class="copyright-line">
                    <?php the_field('copyright', 'option'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-line">
                    <?php the_field('design_by', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">

// store google translate's change event
trackChange = null;
pageDelayed = 3000;

// overwrite prototype to snoop, reset after we find it (keep this right before translate init)
Element.prototype._addEventListener = Element.prototype.addEventListener;
Element.prototype.addEventListener = function(a,b,c) {
  reset = false;

  // filter out first change event
  if (a == 'change'){
    trackChange = b;
    reset = true;
  }

  if(c==undefined)
    c=false;

  this._addEventListener(a,b,c);

  if(!this.eventListenerList)
    this.eventListenerList = {};

  if(!this.eventListenerList[a])
    this.eventListenerList[a] = [];

  this.eventListenerList[a].push({listener:b,useCapture:c});

  if (reset){
    Element.prototype.addEventListener = Element.prototype._addEventListener;
  }
};


function googleTranslateElementInit() {
  new google.translate.TranslateElement({ pageLanguage: 'en',includedLanguages: 'ar,bn,en,hi,ml,ta,te,ur' }, 'google_translate_element');

  let first = $('#google_translate_element');
  let second = $('#google_translate_element2');

  let nowChanging = false;

  // we need to let it load, since it'll be in footer a small delay shouldn't be a problem
  setTimeout(function(){
    select = first.find('select');
    // lets clone the translate select
    second.html(first.clone());
    second.find('select').val(select.val());

    // add our own event change
    first.find('select').on('change', function(event){
      if (nowChanging == false){
        second.find('select').val($(this).val());
      }
      return true;
    });

    second.find('select').on('change', function(event){
      if (nowChanging){
        return;
      }

      nowChanging = true;
      first.find('select').val($(this).val());
      trackChange();

      // give this some timeout incase changing events try to hit each other                    
      setTimeout(function(){
        nowChanging = false;
      }, 1000);

    });
  }, pageDelayed);

 var $googleDiv = $("#google_translate_element .skiptranslate");
  var $googleDivChild = $("#google_translate_element .skiptranslate div");
  $googleDivChild.next().remove();

  $googleDiv.contents().filter(function(){
  	return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
  }).remove();

}

</script>

</body>

</html>
