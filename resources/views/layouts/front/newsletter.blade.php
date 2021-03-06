<div class="newsletter">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg"
         data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
                    <div class="newsletter_title_container">
                        <div class="newsletter_title">Are you buying or selling?</div>
                        <div class="newsletter_subtitle">Search your dream home</div>
                    </div>
                    <div class="newsletter_form_container">
                        <form id="newsletter_form" class="newsletter_form">
                            {{csrf_field()}}
                            <div id="email">
                                <input type="email" name="email" class="newsletter_input"
                                       placeholder="Your e-mail address">
                                <span class="error"></span>
                            </div>
                            <button class="newsletter_button">subscribe now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
