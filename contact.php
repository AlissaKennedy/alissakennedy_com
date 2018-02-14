<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hi. I'm a Graphic Designer and Web Designer/Developer based out of San Diego, CA. I also specialize in digital marketing. I strive to create impactful designs and to make the web a more enjoyable place.">
    <meta name="keywords" content="San Diego Web Designer, San Diego Web Developer, Web Design, Web Development, Graphic Design, HTML, CSS, PHP, Responsive Design, Mobile Web Design, UI/UX Designer, Marketing, Digital Marketing, Email Marketing, Social Media Marketing,">

    <?php include("layout/import-css.html"); ?>

    <style>
		.clickable {cursor: pointer; cursor: hand;}
		.contact-social i{display:inline-block; width:15px; height:15px; margin:10px;}
    </style>
    <title>Alissa Kennedy's Graphic &amp; Web Design Portfolio</title>
  </head>
  <body>
  <?php include("layout/nav.html"); ?>
     
      <section id="message">
        <div class="container">
         <div class="row">
        	 <h1>Contact</h1>
         </div>
          <div class="row" id="contactsection">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
            <!-- Form contact -->
              <form>
                  <p class="h5">Send a Note</p>
					<br/>
                  <div class="md-form">
                      <!--<i class="fa fa-user prefix grey-text"></i>-->
                      <input name="name" type="text" id="form3" class="form-control">
                      <label for="form3">Your name</label>
                  </div>
                  <div class="md-form">
                      <!--<i class="fa fa-envelope prefix grey-text"></i>-->
                      <input name="email" type="text" id="form2" class="form-control">
                      <label for="form2">Your email</label>
                  </div>

                  <div class="md-form">
                      <!--<i class="fa fa-tag prefix grey-text"></i>-->
                      <input name="subject" type="text" id="form32" class="form-control">
                      <label for="form34">Subject</label>
                  </div>
                  <div class="md-form">
                      <!--<i class="fa fa-pencil prefix grey-text"></i>-->
                      <textarea name="message" type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
                      <label for="form8">Your message</label>
                  </div>
                  <div class="text-right">
                      <button type="submit" name="submit_form" class="btn btn-action btn-lg">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                  </div>
              </form>
              <!-- Form contact -->
            </div>
              <div class="hidden-sm-down col-md-4 col-lg-4" id="contactinfo">
                <p>
                  <h5>Email</h5>
                  design@alissakennedy.com
                  <h5>Phone</h5>
                  (619) 752-4048
                  <h5>Social</h5>
                    <ul class="no-bullet contact-social">
                      <li>
                         <a href="https://www.linkedin.com/in/alissakennedy" target="_blank">
                          <i class="fa fa-linkedin"></i>LinkedIn
                        </a>
                      </li>
                      <li>
                          <a href="https://twitter.com/DesignByAlissa" target="_blank">
                          <i class="fa fa-twitter"></i>Twitter
                        </a>
                      </li>
                      <li>
                          <a href="https://www.facebook.com/AlissaKennedyVisualArts" target="_blank">
                         <i class="fa fa-facebook"></i>Facebook
                        </a>
                      </li>
                      <li>
                          <a href="https://www.instagram.com/akphoto7/" target="_blank">
                            <i class="fa fa-instagram"></i>Instagram
                        </a>
                      </li>
                      <li>
                          <a href="https://www.behance.net/AlissaKennedy" target="_blank">
                            <i class="fa fa-behance"></i>Behance
                        </a>
                      </li>
                    </ul>
                </p>
            </div>
          </div>
        </div>
      </section>
    <?php include("layout/footer.html"); ?>
    <?php include("layout/import-script.html"); ?>
  </body>
</html>
