<footer>
  <!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index"><img class="img-fluid mb-4" src="{{asset('images/sasakazi-origin.png')}}" height="90" width="200" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">Kiptagich House, 6th Floor</li>
            <li class="mb-2">+254 724 077 237</li>
            <li class="mb-2">info@sasaKazi.com</li>
          </ul>
        </div>


        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0" style="margin-left: -600">
          <h4 class="text-white mb-5">Others</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="about">About Us</a></li>
            {{-- <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li> --}}
            <li class="mb-3"><a class="text-color" href="contact">Contact</a></li>
            {{-- <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li> --}}
          </ul>
        </div>

        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">Our Partners </h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="https://www.eldohub.co.ke/">EldoHub</a></li>
            <li class="mb-3"><a class="text-color" href="http://northriftwomen.org/">Northrift women in STEM</a></li>
            <li class="mb-3"><a class="text-color" href="http://miliki.eldohub.co.ke/">Miliki</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li> -->
          </ul>
        </div>
         <!-- map -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0" >
          <h4 class="text-white mb-4">Our Location</h4>
          <ul class="list-unstyled">
            <li class="mb-4"><a class="text-color" href="blog.html">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6537415712387!2d35.26626091400792!3d0.5204145996203323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781018b02431f27%3A0xe38264b3ebe16e54!2sEldohub!5e0!3m2!1sen!2ske!4v1587036511150!5m2!1sen!2ske" width="410" height="230" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>
            © EldoHub</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/groups/529248318027147/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/sasakazi2"><i class="ti-twitter-alt text-primary"></i></a></li>
            {{-- <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li> --}}
            {{-- <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li> --}}
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer