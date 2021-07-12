@extends('includes.app')
@section('content')
<div class="loading" style="display: flex; justify-content: center; width: 100%;height: 100%;background: white; position: fixed; z-index: 10;">
  <img class="loaderImg" style="width:120px; align-self: center" src="{{ asset('assets/images/loader.gif') }}" alt="Loading">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Sign Up</title>

<style type="text/css">
section.Billing-payment-section {
  background-color: #f2f2f2;
  padding: 25px 0px;
}
.price-head {
  background-color: #344651 !important;
  padding: 5px 15px;
  border-radius: 4px;
}
.pay-field {
  font-size: 13px !important;
}
select.form-control:not([size]):not([multiple]) {
  height: calc(2rem + 2px) !important;
}
.traveler-details-box {
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0px 0px 10px #00000033;
}
.pay-flight {
  width: 60px;
  height: 35px;
  border: 1px solid #eee;
  margin-bottom: 3px;
}
/*------flights-details----*/
#flights-details{
  display: none;
}
.collapse-close, .details{
  cursor: pointer;
}
.exchange-key, .plane-key{
    position: absolute;
    left: -14px;
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 50%;
    color: #01519a;
    background: #ececec;
}
.sch-dots {
    position: absolute;
    top: 29px;
    left: 157px;
    width: 21%;
    border-top: 2px dotted #000;
    opacity: 0.1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=10)";
    filter: alpha(opacity=10);
}
.stop-duration{
  position: absolute;
  right: 60px;
}
.row.agg-box {
    margin: 8px;
}
/*------/flights-details----*/
</style>
@include('includes.header')
<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<section class="Billing-payment-section">
  <div class="container">
    <div class="price-head mb-3 mt-3"> 
      <div class="row">
        <div class="col-md-2 col-12">
          <a href="/" class="blue-btn-sm btn-block">Go Back</a>
        </div>
        <div class="col-md-4 col-12">
          <p class="mb-0 mt-2 text-white"><i class="fa fa-clock-o"></i> Prices not guaranteed until booked</p>
        </div>
        <div class="col-md-6 col-12">
          <p class="mb-0 mt-2 text-white"><i class="fa fa-check"></i> Free cancellation within 24 hours of booking!</p>
        </div>
      </div>
    </div>
  <form method="" action="/thank-you">
    <div class="row">
      <div class="col-md-12 col-12">
        <div class="traveler-details-box p-md-3 p-2 mb-1">
          <h3 class="p-2">Traveler Details</h3>
          <p class="p-2 black-bg font-13 mb-2">Traveler name must match Government-issued Photo ID exactly</p>
          <div class="p-2">
            <p><b>Adult</b></p>
              @csrf
              <input type="hidden" name="obj" value="{{ json_encode($data) }}">
              <div class="row">
                <div class="col-md-4 col-12 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">First Name<span style="color:red">*</span></label>
                    <input type="text" class="form-control pay-field" placeholder="First Name" name="fname" required>
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Middle Name</label>
                    <input type="text" class="form-control pay-field" placeholder="Middle Name" name="mname">
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Last Name<span style="color:red">*</span></label>
                    <input type="text" class="form-control pay-field" placeholder="Last Name" name="lname"  required>
                  </div>
                </div>
                <div class="col-md-3 col-6 pr-1">
                  <div class="form-group">
                    <label class="font-13">Gender<span style="color:red">*</span></label>
                    <select class="form-control pay-field" name="gender"  required>
                      <option value="">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-6 pl-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Birth Month<span style="color:red">*</span></label>
                    <select class="form-control pay-field" name="dobmonth"  required>
                      <option value="">Month</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-6 pr-1 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Day<span style="color:red">*</span></label>
                    <select class="form-control pay-field" name="dobday"  required>
                      <option value="">Day</option>
                      @for($i=1;$i<=31;$i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-6 pl-1">
                  <div class="form-group">
                    <label class="font-13">Year<span style="color:red">*</span></label>
                    <input type="text" class="form-control pay-field" placeholder="Year" name="dobyear"  required>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="traveler-details-box p-md-3 p-2 mb-1">
          <div class="p-2">
              <div class="row">
                <div class="col-md-6 col-12 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Address 1</label>
                    <input type="text" class="form-control pay-field" placeholder="Address1" name="address1">
                  </div>
                </div>
                <div class="col-md-6 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Address 2</label>
                    <input type="text" class="form-control pay-field" placeholder="Address2" name="address2">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-4 pr-1">
                  <div class="form-group">
                    <label class="font-13">City</label>
                    <input type="text" class="form-control pay-field" placeholder="City Name" name="city">
                  </div>
                </div>
                <div class="col-md-4 col-4 pl-1 pr-1">
                  <div class="form-group">
                    <label class="font-13">Country</label>
                    <select class="form-control pay-field" name="country">
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BR">Brazil</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="CD">Democratic Republic Of The Congo</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="KP">North Korea</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestine</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn Islands</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="KR">South Korea</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option selected="selected" value="US">United States</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                      <option value="UK">LONDON</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 col-4 pl-1">
                  <div class="form-group">
                    <label class="font-13">ZIP Code</label>
                    <input type="text" class="form-control pay-field" placeholder="ZIP Code" name="zipcode">
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- <div class="col-md-4 col-4 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Phone</label>
                    <div class="row">
                      <div class="col-2 col-md-3 pr-0">
                        <input type="text" class="form-control pay-field" name='bphCode' placeholder="Code">
                      </div>
                      <div class="col-10 col-md-9 pl-0">
                        <input type="text" class="form-control pay-field" placeholder="Billing Phone" name="bph">
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="col-md-4 col-12 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Billing Phone</label>
                    <div class="row">
                      <div class="col-2 col-md-3 pr-0">
                        <input type="text" class="form-control pay-field" name='bphCode' placeholder="Code">
                      </div>
                      <div class="col-10 col-md-9 pl-0">
                        <input type="text" class="form-control pay-field" placeholder="Billing Phone" name="bph">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1 pr-md-1">
                  <div class="form-group">
                    <label class="font-13">Alternate/Mobile Phone</label>
                    <div class="row">
                      <div class="col-2 col-md-3 pr-0">
                        <input type="text" class="form-control pay-field" name="altphCode" placeholder="Code">
                      </div>
                      <div class="col-10 col-md-9 pl-0">
                        <input type="text" class="form-control pay-field" placeholder="Mobile Phone" name="altph">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-12 pl-md-1">
                  <div class="form-group">
                    <label class="font-13">Email Address<span style="color:red">*</span></label>
                    <input type="email" class="form-control pay-field" placeholder="Enter email address for Ticket" name="email" required>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="traveler-details-box p-md-3 p-2 mb-3">
          <div class="row agg-box">
            <div class="reqAgree-box">
              <div class="heading-req-box">
                <h3>Required Agreement</h3>
              </div>
              <p style="color:red">By clicking "Sign Up", you agree to Tripdear <a href="/terms">Terms of Use</a> and <a href="/privacy">Privacy Policy</a>. You consent to receive phone calls and SMS messages from Tripdear to provide updates on your order and/or for marketing purposes. Message frequency depends on your activity. You may opt-out by texting "STOP". Message and data rates may apply.</p>
              <input type="checkbox" name="agreementAcept" id="agreementAcept">
              <p><b>I Agree</b></p>
            </div>
          </div>
        </div>
        <div class="traveler-details-box p-md-3 p-2 p-2">
          <div class="bg-light p-2 mb-1">
            <p class="font-13 mb-2"><b>Review and book your trip</b></p>
            <p class="mb-0 font-12">Free cancellation within 24 hours of booking!</p>
            <p class="mb-0 font-12">By selecting to complete this booking I acknowledge that I have read and accept the above Rules & Restrictions, Terms of Use, Privacy Policy and Government Travel Advice.</p>
          </div>
          <div class="bg-light p-2 mb-2">
            <p class="font-13 mb-2"><b>Terms & Conditions</b></p>
            <p class="mb-0 font-12">We at tripdear.com care about your trust & hence use judicious measures to protect your personal information within our organization. Unfortunately, no data transmission or storage system can be 100% guaranteed and secured, so If you have a reason to believe that your interaction with us is no longer secure (for example, if you feel that the security of your account has been compromised), please call us immediately on our 24/7 customer service cum support team at (888) 481-1227 or mail at info@tripdear.com so we can find the root cause & assure a satisfactory resolution to any concern you might have. <a href="#"> Read More </a></p>
            <p class="mb-0 font-12">*By clicking "BOOK" I agree to the total trip cost of US $ {{ $data->route[0]->totalPrice }} and the Terms and Conditions and Privacy Policy.</p>
          </div>
          <div class="text-center">
              <button type="submit" class="blue-btn-sm pl-3 pr-3">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
</section>
@include('includes.footer')