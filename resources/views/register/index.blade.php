@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-registration">
      
       <img width="100" height="67" src="{{ ('img/logo.png') }}" class="mx-auto d-block mb-3 " > 
        
      <form class=" needs-validation" novalidate>
    
        <div class="form-floating">
          <input type="text" name="picname" class="form-control" id="picname" placeholder="picname" required>
          <div class="invalid-tooltip">
            Please input PIC Name
          </div>
          <label for="picname">PIC Name</label>
          
        </div>
        <div class="form-floating">
          <input type="text" name="companyname" class="form-control" id="companyname" placeholder="companyname" required>
          <div class="invalid-tooltip">
            Please input Company Name
          </div>
          <label for="companyname">Company Name</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
          <div class="invalid-tooltip">
            Please input Email
          </div>
          <label for="floatingInput">Email </label>
        </div>
        
          <div class="mb-2">
        <select class="form-select"  type="group" required>
         
          <option selected disabled value="">Service Group</option>
          <option value="1">Shared</option>
          <option value="2">Dedicated</option>
          <option value="3">OnPrem</option>
        </select>
       
        </div>
        <div class="mb-2">
          <select class="form-select"  type="group" required>
           
            <option selected disabled value="">Service Type</option>
            <option value="1">FAQ</option>
            <option value="2">Transactional</option>
          </select>
          </div>


          
          <div class="mb-2">
            <label>Channels :</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" >
              <label class="form-check-label" for="inlineCheckbox1">WhatsApp</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" >
              <label class="form-check-label" for="inlineCheckbox2">Telegram</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox3">Slack</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
              <label class="form-check-label" for="inlineCheckbox4">Coster</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
              <label class="form-check-label" for="inlineCheckbox5">Custom</label>
            </div>
          </div>
            <div class="form-floating">
              <input type="text" name="channelname" class="form-control" id="channelname" placeholder="channelname" required disabled>
              <div class="invalid-tooltip">
                Please input channel name
              </div>
              <label for="picname">Channel Name</label>
            </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="pass" placeholder="Password" required>
          <div class="invalid-tooltip">
            Please input password
          </div>
          <label for="password">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password1" class="form-control" id="pass2" placeholder="Password1" required>
          <div class="invalid-tooltip">
            Please input confirm password
          </div>
          <label for="password1">Confirm Password</label>
        </div>
        <div class="g-recaptcha " data-sitekey="6LfFuEwfAAAAADkEL5fx4KKvOLJwRiMN2_0JrnvH" required></div>

        <div>
        <button id="submit" class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
        </div>
      </form>
      <small class="d-block  p-2" >Back to <a href="/login">Login</a></small>
    </main>
</div>




<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

<script type="text/javascript">
  $('#reload').click(function () {
      $.ajax({
          type: 'GET',
          url: 'reload-captcha',
          success: function (data) {
              $(".captcha span").html(data.captcha);
          }
      });
  });
</script>

<script>
	$(document).ready(function(){
	   	$('#submit').click(function() {
			var pass = $('#pass').val();
			var pass2 = $('#pass2').val();						
			if (pass != pass2) {				
				alert("Passwords are not the same!");
			}
		});
	});
</script>



@endsection