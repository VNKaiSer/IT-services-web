<script src="{{ asset('js/news.js') }}"></script>
<section
          data-aos="fade-up"
          data-aos-offset="200"
          data-aos-delay="50"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          data-aos-mirror="true"
          data-aos-once="false"
          class="about-stay"
        >
          <div class="about-stay-container">
            <div class="about-stay-content">
              <h3 class="about-stay-heading">Stay in the loop</h3>
              <p class="about-stay-desc">
                Subscribe to receive the latest news and updates about TDA. We
                promise not to spam you!
              </p>
            </div>
            <div class="about-stay-input">
              <input type="text" placeholder="Enter email address" required />
              <a href="#" class="about-stay-continue">Continue</a>
            </div>
          </div>
</section>
<div id="toast"></div>
    <div class="button__btn">
    <div onclick="showSuccessToast();" class="btn btn--success">Show Success </div>
    <div onclick="showInfoToast();" class="btn btn--danger">Show Information</div>
    <div onclick="showWaringToast();" class="btn btn--warn">Show Warning </div>
</div>
