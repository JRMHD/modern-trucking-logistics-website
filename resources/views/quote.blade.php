 <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
 <section id="quote" class="home-contact2">
     <div class="container">
         <div class="section-title center">
             <h4 class="subtitle">Get Quote</h4>
             <h2 class="title">Request Your Free Quote Today</h2>
         </div>
         <div class="row">
             <div class="col-lg-2"></div>
             <div class="col-lg-8">
                 <div class="form-area">
                     @if (session('success'))
                         <div class="alert alert-success">
                             {{ session('success') }}
                         </div>
                     @endif
                     @if (session('error'))
                         <div class="alert alert-danger">
                             {{ session('error') }}
                         </div>
                     @endif
                     @if ($errors->any())
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif

                     <form method="post" action="{{ route('submit.quote') }}">
                         @csrf
                         <div class="row">
                             <!-- First Name -->
                             <div class="col-md-6 col-lg-6">
                                 <label for="fname">Your first name</label>
                                 <div class="name-field">
                                     <input type="text" id="fname" name="fname"
                                         placeholder="Your first name" />
                                 </div>
                             </div>

                             <!-- Last Name -->
                             <div class="col-md-6 col-lg-6">
                                 <label for="lname">Your last name</label>
                                 <div class="email-field">
                                     <input type="text" id="lname" name="lname" placeholder="Your last name" />
                                 </div>
                             </div>

                             <!-- Email -->
                             <div class="col-md-6 col-lg-6">
                                 <label for="usermail">Your E-mail</label>
                                 <div class="email-field">
                                     <input type="text" id="usermail" name="usermail" placeholder="Your Email" />
                                 </div>
                             </div>

                             <!-- Phone -->
                             <div class="col-md-6 col-lg-6">
                                 <label for="userphone">Your Phone</label>
                                 <div class="phone-field">
                                     <input type="text" id="userphone" name="userphone" placeholder="Your Phone" />
                                 </div>
                             </div>

                             <!-- Phone Extension -->
                             <div class="col-md-6 col-lg-6">
                                 <label for="phone_ext">Phone Extension</label>
                                 <div class="phone-ext-field">
                                     <input type="text" id="phone_ext" name="phone_ext"
                                         placeholder="Phone Extension (if any)" />
                                 </div>
                             </div>

                             <!-- Company -->
                             <div class="col-md-6 col-lg-6">
                                 <label for="company">Company</label>
                                 <div class="company-field">
                                     <input type="text" id="company" name="company"
                                         placeholder="Your Company Name" />
                                 </div>
                             </div>

                             <!-- Select Equipment Needed -->
                             <div class="col-lg-12">
                                 <label for="equipment">Select Equipment Needed</label>
                                 <div class="equipment-field">
                                     <select id="equipment" name="equipment" onchange="toggleCustomEquipment()">
                                         <option value="53 foot Dry Van">53 foot Dry Van</option>
                                         <option value="Power Only">Power Only</option>
                                         <option value="Flatbed">Flatbed</option>
                                         <option value="Custom">Custom</option>
                                     </select>
                                 </div>
                             </div>

                             <!-- Message -->
                             <div class="col-lg-12">
                                 <label for="message">Message</label>
                                 <div class="message-field">
                                     <textarea name="message" id="message" cols="30" rows="10">Write Message..</textarea>
                                 </div>
                             </div>

                             <!-- Terms and Conditions -->
                             <div class="col-lg-12">
                                 <div class="radio-field">
                                     <input type="radio" id="terms" name="terms" />
                                     <label for="terms">I have read and accept the</label>
                                     <a href="contact-us">Terms and Conditions</a>
                                     <a href="contact-us">Privacy Policy</a>
                                 </div>
                             </div>
                             <!-- Add reCAPTCHA widget -->
                             {!! NoCaptcha::display() !!}
                             <!-- Submit Button -->
                             <div class="col-lg-12">
                                 <button type="submit">Send Message</button>
                             </div>
                         </div>
                     </form>
                     <script>
                         function toggleCustomEquipment() {
                             var equipmentSelect = document.getElementById('equipment');
                             var customEquipmentInput = document.getElementById('custom_equipment');
                             if (equipmentSelect.value === 'Custom') {
                                 customEquipmentInput.style.display = 'block';
                             } else {
                                 customEquipmentInput.style.display = 'none';
                                 customEquipmentInput.value = ''; // Clear custom equipment input if not 'Custom'
                             }
                         }
                     </script>
                 </div>
             </div>
             <div class="col-lg-2"></div>
         </div>
     </div>
 </section>
