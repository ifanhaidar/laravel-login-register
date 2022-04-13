@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-registration">
       <img width="100" height="67" src="{{ ('img/logo.png') }}" class="mx-auto d-block mb-3 " > 
      <form class=" needs-validation" novalidate action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="picname" class="form-control " id="picname" placeholder="picname" required value="{{ old('picname') }}">
         
          <div class="invalid-tooltip">
            Please input PIC Name
          </div>
         
          <label for="picname">PIC Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="companyname" class="form-control " id="companyname" placeholder="companyname" required value="{{ old('companyname') }}">
         
          <div class="invalid-tooltip">
            Please input Company Name
          </div>
          
          <label for="companyname">Company Name</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control " id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        
          <div class="invalid-tooltip">
            Please input Email
          </div>
         
          <label for="floatingInput">Email </label>
        </div>
          <div class="mb-2">
        <select class="form-select "  type="group" name="group" id="main_menu" required value="{{ old('group') }}">
          <option selected disabled value="">Select Group</option>
          <option value="Shared">Shared</option>
          <option value="Dedicated">Dedicated</option>
          <option value="Onprem">OnPrem</option>
        </select>
      
        <div  class="invalid-feedback" >
          Please select a valid state.
        </div>
       
        </div>
        <div class="mb-2">
          <select class="form-select"  type="group"  name="type" id="sub_menu" required value="{{ old('type') }}">
          </select>
          </div>
          <div class="mb-2"name="frm"  >
            <label>Channels :</label>
            <br>
            <div class="form-check form-check-inline" >
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="channel" >
              <label class="form-check-label" for="inlineCheckbox1" >WhatsApp</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="channel">
              <label class="form-check-label" for="inlineCheckbox2">Telegram</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" name="channel">
              <label class="form-check-label" for="inlineCheckbox3">Slack</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" name="channel">
              <label class="form-check-label" for="inlineCheckbox4"  >Coster</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5"  onclick="checkMe()"/>
              <label class="form-check-label" for="inlineCheckbox5" name="channel" >Custom</label>
            </div>
          </div>
            <div class="form-floating">
              <input type="text" name="channelname" class="form-control " id="channelname" placeholder="channelname" style="display:none" >
             
              <div class="invalid-tooltip">
                Please input channel name
              </div>
              <label for="channelname">Channel Name Custom</label>
            </div>


        <div class="form-floating">
          <input type="password" name="password" class="form-control " id="pass"  placeholder="Password" required >
         
          <div class="invalid-tooltip">
            Please input password
          </div>
          
          <label for="password">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password1" class="form-control " id="pass2" placeholder="Password1" required >
          
          <div class="invalid-tooltip">
            Please input confirm password
          </div>
         
          <label for="password1">Confirm Password</label>
        </div>
       <div class="g-recaptcha " data-sitekey="6LcEIV4fAAAAAOdJAIdLDUiI5zddbIk8zzWHgM5W" required></div>
        <div>
        <button id="submit" class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
        </div>
      </form>
      <small class="d-block  p-2" >Back to <a href="/login">Login</a></small>
    </main>
</div>


<script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
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

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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


  <script>
    var group = {
    select: ['Bebas'],
    Shared: ['FAQ'],
    Dedicated: ['Transactional'],
    Onprem: ['Transactional']
}

var main = document.getElementById('main_menu');
var sub = document.getElementById('sub_menu');

main.addEventListener('change', function () {

    var selected_option = group[this.value];

    while (sub.options.length > 0) {
        sub.options.remove(0);
    }

    Array.from(selected_option).forEach(function (el) {
        let option = new Option(el, el);
        sub.appendChild(option);
    });
});

  </script>

  <script>
    function checkMe(){
      var cb = document.getElementById("inlineCheckbox5");
      var text = document.getElementById("channelname");
      if (cb.checked==true){
        text.style.display="block";
      }else {
        text.style.display="none";
      }
    }
  </script>


@endsection