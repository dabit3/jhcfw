<?php include 'includes/header.php' ?>

<section class="page-card">
    <div class="page-card-content with-header">
        <div class="page-card-text">
            <h1>Contact Us</h1>
            <h3 class="basic-border-top">For appointments, prescription refills, and/or billing questions:</h3>
            <p>291 East Layfair Dr.</p>
            <p>Flowood, Mississippi 39232</p>
            <p><a href="tel:6019369190">601-936-9190</a></p>

            <div class="map-canvas map-margin">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3371.375463828891!2d-90.10470339999999!3d32.32862850000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86282ce65be6c8f3%3A0x82bafa6bef244faf!2s291+E+Layfair+Dr%2C+Flowood%2C+MS+39232!5e0!3m2!1sen!2sus!4v1407189668209"
                        style="width: 100%" frameborder="0" style="border:0"></iframe>
            </div>

            <h3 class="h3-border-top">Directions:</h3>
            <h5 class="contact-us-directions">From I-55</h5>
            <ol>
                <li>Exit 94B</li>
                <li>Take exit 98B for MS-25 N/Lakeland Dr E toward Carthage — 0.3 mi</li>
                <li>Merge onto MS-25 N/Lakeland Dr — 3.2 mi</li>
                <li>Turn right at East Layfair Drive — 350 ft</li>
                <li>Jackson Healthcare for Women on right</li>
            </ol>
            <h5 class="contact-us-directions">From I-20</h5>
            <ol>
                <li>Take exit 52 for MS-475 N</li>
                <li>Turn left at Airport Rd — 1.5 mi</li>
                <li>At the traffic circle, take the 3rd exit onto Old Brandon Rd — 0.2 mi</li>
                <li>Slight right at MS-475 N/Airport Rd — 3.0 mi</li>
                <li>Turn left at Flowood Dr — 1.0 mi</li>
                <li>Turn right at River Oaks Dr — 0.4 mi</li>
                <li>Turn right onto Layfair Drive</li>
                <li>Turn left onto East Layfair Drive</li>
                <li>Jackson Healthcare for Women is on the left</li>
            </ol>
            <section id="form-container">
                <h2 class="h3-border-top">Email Form</h2>
                <p><small>Jackson Healthcare for Women cannot address a medical emergency through this website. If you are an established patient of Jackson Healthcare for Women experiencing a medical emergency, please call 601-936-9190 to speak directly with a staff member. If you are not an established patient of Jackson Healthcare for Women experiencing a medical emergency, please go to the nearest emergency room.</small></p>
                <div id="contact-form-wrapper">
                    <form>
                        <div>
                            <label for="form-name">Name</label><br/>
                            <input id="form-name" type="text" required /><br/>
                        </div>
                        <div >
                            <label for="form-email">Email</label><br/>
                            <input id="form-email" type="email" required /><br/>
                        </div>
                        <div>
                            <label for="form-feedback-questions">Feedback/Question</label><br/>
                            <textarea id="form-feedback-questions" name="Feedback/Question"  cols="30" rows="10" required></textarea>
                        </div>
                        <div>
                            <input class="form-submit" type="submit" value="Submit" id="jhcfw-mobile-submit" />
                        </div>
                    </form>
                </div>
            </section>
            <section id="contact-form-sent">
                <div class="check-box">
                    <h1><i class="fa fa-check"></i></h1>
                </div>
                <h2 class="this-padding-top">Your message has been sent!</h2>
                <p class="this-padding-top">Thank you for contacting Jackson Healthcare for Women, someone will be in touch with you shortly.</p>
            </section>

        </div>
    </div>
</section>

<footer class="footer-container">
    <section class="footer-content">
        <div>
            <p>
                <small>&copy; 2014 Jackson Healthcare For Women</small>
            </p>
        </div>
    </section>
</footer>

<script src="js/sendMail.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
<script src="js/main.js"></script>
<script src="lib/slick/slick.min.js"></script>
<script src="js/slider.js"></script>
</body>
</html>