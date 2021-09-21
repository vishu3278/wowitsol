<footer class="footer">
  <div class="ui container">
    <div class="ui four column doubling grid">
      <div class="column">
        <h3 class="ui inverted sub header">Quick Links</h3>
        <div class="ui vertical inverted small text menu"> <a href="<?php echo HOST_NAME; ?>" class="item">Home</a> <a href="<?php echo HOST_NAME; ?>about.php" class="item">About Us</a> <a href="<?php echo HOST_NAME; ?>services.php" class="item">Services</a> <a href="<?php echo HOST_NAME; ?>portfolio.php" class="item">Portfolio</a> <a href="contact.php" class="item">Contact Us</a> <a href="http://wowitcareers.com/" class="item">Tranings</a> </div>
      </div>
      <div class="column">
        <h3 class="ui inverted sub header">Services</h3>
        <div class="ui vertical text small inverted menu"> <a href="<?php echo HOST_NAME; ?>web-ui-engineering-solutions.php" class="item">Web & UI Engineering Solution</a> <a href="<?php echo HOST_NAME; ?>web-development-solutions.php" class="item">Web Development Solutions </a> <a href="<?php echo HOST_NAME; ?>e-commerce.php" class="item">E-Commerce Solutions</a> <a href="http://wowitsolutions.com/mobile-apps-development.php" class="item">Mobile Apps Development </a> <a href="<?php echo HOST_NAME; ?>digital-marketing-solutions.php" class="item">Digital Marketing Solutions</a> <a href="<?php echo HOST_NAME; ?>content-writing-solutions.php" class="item">Content Writing Solutions</a> </div>
      </div>
      <div class="column">
        <h3 class="ui inverted sub header">More Links</h3>
        <div class="ui vertical inverted small text menu"> <a href="<?php echo HOST_NAME; ?>culture.php" class="item" title="WOW Culture">WOW Culture</a> <!-- <a href="soon.php" class="item">Partners</a>  <a href="soon.php" class="item">Testimonials</a> --><a href="<?php echo HOST_NAME; ?>careers.php" class="item">WOW Careers</a> <a href="<?php echo HOST_NAME; ?>work-process.php" class="item">WOW Work Process</a> <a href="<?php echo HOST_NAME; ?>team.php" class="item">WOW Team</a> <!-- <a href="soon.php" class="item">Blog</a> --> </div>
      </div>
      <div class="column">
        <h3 class="ui inverted sub header">Connect with us</h3>
        <!-- <p>Get all the latest information on Events, Sales and Offers.</p> -->
        <div class="ui relaxed inverted list ">
          <a class="item" href="https://web.facebook.com/wowitsolutions/" target="_blank"><span class="item"><i class="icon facebook circular"></i> <span class="content">Facebook</span></span></a>
          <a class="item" href="https://twitter.com/wowitsolutions" target="_blank"><span class="item"><i class="icon twitter circular"></i> <span class="content">Twitter</span></span></a>
          <a class="item" href="https://plus.google.com/102662441444395753267" target="_blank"><span class="item"><i class="icon google plus circular"></i><span class="content">Google+</span></span> </a>
          <a class="item" href="https://www.linkedin.com/in/wowitsolutions" target="_blank"><span class="item"><i class="icon linkedin circular"></i><span class="content">Linkedin</span></span> </a>
        </div>
        <!-- <form action="" class="ui small form">
          <div class="field">
            <input type="email" name="email" placeholder="Email Address">
          </div>
          <button class="ui red right floated button">Submit</button>
        </form> -->
      </div>
    </div>
    <div class="ui divider"></div>
    <div class="copyright">
      <p class="sub header">Copyright &copy; 2016 - WOW IT Solutions</p>
    </div>
  </div>
</footer>
<div id="quoteModal" class="ui small modal"><i class="close icon"></i>
  <div class="ui red header"> Request Quote </div>
  <div class=" content">
    <form id="quoteForm" name="quoteForm" class="ui form" method="POST" action="quote_form.php" >
      <div class="ui dimmer">
        <div class="ui text loader">Processing &hellip;</div>
      </div>
      <div id="successMsg" class="ui small success message">
        <p>Valid</p>
      </div>
      <div id="errorMsg" class="ui small error message" >
        
      </div>
      <div class="two fields">
        <div class="field">
          <label>Name</label>
          <input type="text" id="name" name="name" placeholder="Name">
        </div>
        <div class="field">
          <label>Email</label>
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="two fields">
        <div class="field">
          <label>Phone</label>
          <input type="text" id="phone" name="phone" placeholder="Phone">
        </div>
        <div class="field">
          <label>Requirement</label>
          <select name="type" id="type" class="ui fluid dropdown">
            <option value="Website">Website</option>
            <option value="Hybrid Mobile App">Hybrid Mobile App</option>
            <option value="Native Mobile App">Native Mobile App</option>
            <option value="e-Commerce">e-Commerce</option>
            <option value="Web Application">Web Application</option>
            <option value="ERP &amp; CRM">ERP &amp; CRM</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="two fields">
            <div class="field">
            <label>Proof that you are not Robot*</label>
             <input type="text" name="requ_capt_pass" readonly id="requ_capt_pass" > 
               <span class="input-group-btn captch-btn-span" >
                <button type="button captch-btn" onClick="reqranDomstring();">
                    <i class="refresh icon"></i> 
                </button>
               </span>
            </div>
            <div class="field">
              <label>Enter Captcha Code*</label>
                <input type="text" name="req_cpass1" id="req_cpass1" placeholder="Enter Captcha Code" >
            </div>
          </div>
      <div class="field">
        <label>Requirement</label>
        <textarea name="message" id="message" cols="30" rows="2" placeholder="Requirement"></textarea>
      </div>
      <div class="inputs">
          <input type="hidden" name="honeypot" id="honeypot" value="http://" />            
          <input type="hidden" name="humancheck" id="humancheck" class="clear" value="" />
      </div>
      <button type="button" id="sendQuery" class="ui red button">Send</button>
      <div class="ui button" onclick="$('#quoteModal').modal('hide')">Cancel</div>
    </form>
  </div>
  
</div>
<style>
	#requ_capt_pass{font-weight:bold; float: left;}
	.captch-btn-span{float: right; margin-top: -37px;}
	.captch-btn{width: 6em; height: 36px;}
</style>
<!-- <script src="ajax_submit.js"></script> -->
<script type="text/javascript">
        $(document).ready(function () {
            $('header nav').meanmenu({
                meanMenuContainer: '.navigation',
                meanScreenWidth: '980'
            });
            $(".logo a").popup();

            /*$('#quoteForm').on('submit', function (e) {
              e.preventDefault();

            });*/


            $('#quoteForm').form({
                inline:true,
                fields: {
                  name: {
                    identifier: 'name',
                    rules: [
                      {
                        type   : 'empty',
                        prompt : 'Please enter your name'
                      }
                    ]
                  },
                  email: {
                    identifier: 'email',
                    rules: [
                      {
                        type   : 'email',
                        prompt : 'You must enter valid email address.'
                      }
                    ]
                  },
                  phone: {
                    identifier: 'phone',
                    rules: [
                      {
                        type   : 'empty',
                        prompt : 'Please enter valid mobile number.'
                      }
                    ]
                  },
                  requ_capt_pass: {
                   identifier: 'requ_capt_pass',
                   rules: [
                     {            
                       type   : 'minLength[4]',
                       prompt : 'Captcha must be at least {ruleValue} characters'
                     }
                   ]
                 },
                
                req_cpass1: {
                 identifier: 'req_cpass1',
                 rules: [
                 {
                     type   : 'empty',
                     prompt : 'Please enter a Captcha'
                   },
                   {
                     type   : 'match[requ_capt_pass]',
                     prompt : 'Please enter valid Captcha'
                   }
                 ]
               }

                }
              })
            ;

            $("#sendQuery").on('click',function (e) {
              if ($("#quoteForm").form('is valid')) {
                $("#quoteForm").trigger('submit');
              }
            });
            
        })
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92208935-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Start of Kundan wow IT Solutions Chat Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58f7192f30ab263079b60626/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<script language="javascript" type="text/javascript">


function reqranDomstring()
 {  
 
  var chars = "123456789ABCDEFGHIJKLMNPQRSTUVWXTZ";
  var string_length = 4;
  var reqrandomstring = '';
  for (var i=0; i<string_length; i++)
   {
    var rnum = Math.floor(Math.random() * chars.length);
    reqrandomstring += chars.substring(rnum,rnum+1);
  }
  
  document.getElementById('requ_capt_pass').value = reqrandomstring;
 
}
$(document).ready(function(){

reqranDomstring();

});
</script>
<!--End of  Kundan wow IT Solutions Chat Tawk.to Script-->


</body>
</html>