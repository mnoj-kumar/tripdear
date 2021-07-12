@extends('includes.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>tripdear.com | CCPA Privacy Notice</title>

<style type="text/css">
  section.banner-section{
  padding: 50px 0px;
  background-color: #ffffff;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  min-height:200px;
}
.p-overlay {
  background-color: #0000005e;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
}
/*--------/banner-section----------*/
.inner-page-section {
padding: 60px 0px;
background-color: #f6f6f6;
}
ul.flight-points>li:before {
content: "\f072";
font-family: 'FontAwesome';
float: left;
margin-left: -1.5em;
color: #006d9e;
}
.trip-in-content-box p {
font-weight: 300;
letter-spacing: 0.5px;
text-align: justify;
font-size: 15px;
}
.ccpa-box {
padding: 15px;
box-shadow: 0px 0px 5px #00000012;
background-color: #ffffff;
}
/*.trip-in-content-box {
box-shadow: 0px 0px 10px #00000024;
padding: 15px 15px;
margin-top: 10px;
border-top: 3px solid #f9bf08;
border-bottom: 2px solid #1a5586;
}*/
</style>

@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/banners.jpg);">
    <div class="p-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white">CCPA Privacy Notice</h1>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

    <section class="inner-page-section">
      <div class="container">
        <div class="trip-in-content-box">

        <div class="row">
        	<div class="col-12 col-md-4 mb-4">
        		<div class="ccpa-box">
        			<ul>
        				<li>General</li>
        				<li>Personal Information We May Collect</li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-12 col-md-4 mb-4">
        		<div class="ccpa-box">
        			<ul>
        				<li>Your CCPA Rights</li>
        				<li>Exercising Your Rights</li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-12 col-md-4 mb-4">
        		<div class="ccpa-box">
        			<ul>
        				<li>Verifying Your Request</li>
        				<li>Contacting Us</li>
        			</ul>
        		</div>
        	</div>

        	<div class="col-12 col-md-12 mb-4">
        		<div class="ccpa-box">
        			<p class="mb-0">This California Consumer Privacy Act (“CCPA”) privacy notice (this “CCPA Notice”) is included in our Privacy Policy and applies to Fareportal’s processing of personal information of California consumers (as the terms “personal information” and “consumer” are defined under the CCPA) (collectively, “Consumers,” “you,” or “your”). Any capitalized terms or other terms not defined herein shall have the meaning ascribed to them in the Privacy Policy or, if not defined herein or in the Privacy Policy, the CCPA. To the extent of any conflict between this CCPA Notice and the rest of our Privacy Policy, this CCPA Notice shall control only with respect to Consumers and their personal information. If you are located elsewhere, please see our Privacy Policy <a href="/privacy">here.</a></p>
        		</div>
        	</div>

        	<div class="col-12 col-md-12">
        		<div class="ccpa-box">
        			<h5><strong>General</strong></h5>
        			<p class="mb-0">This CCPA Notice provides further detail regarding (a) how we have processed Consumers’ personal information within the past twelve (12) months and (b) your rights under the CCPA.</p>
        		</div>
        	</div>
        </div><!--/row-->


         <div class="row mt-4">

         	<div class="col-12 col-md-12 mb-4">
         		<div class="ccpa-box">
         			<h5>Personal Information We May Collect</h5>
         			<p>We collect the categories of personal information listed below. For more information regarding the business and commercial purposes for which we may use such personal information (and the categories of entities we may share with for such purposes), please see here.</p>
         			<p>However, note that financial information is processed solely for business purposes relating to completing your transactions, fraud management and security, accounting/auditing, and compliance with applicable law, and disclosed to our payment processors, financial institutions, accounting/auditing firms, and other entities relating thereto.</p>
         			<p>For the table below, the list of examples for each category is intended to be illustrative and not exhaustive. We also may not collect or disclose every example listed (or use every example for each purpose linked above).</p>
         	  <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Categories of Personal Information</th>
                        <th>Examples</th>
                        <th>Sources of Personal Information</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Identifiers</td>
                        <td>
                          <ul class="list-types">
				            <li>Name</li>
				            <li>Alias</li>
				            <li>Postal address</li>
				            <li>Online identifier</li>
				            <li>Internet Protocol address</li>
				            <li>E-mail address</li>
				            <li>Account name</li>
				            <li>Driver’s license number, passport number, or other similar identifiers.</li>
				            <li>Unique personal identifier(i.e. – persistent identifier such as device identifier)</li>
				          </ul>
                        </td>
                        <td>Websites, Apps, or Services (information collected directly from user)<br/> <br/>
                        Other Sources (e.g., public databases, marketing and analytics partners, social media platforms, booking suppliers and intermediaries, fraud management and security vendors)
                        </td>
                      </tr>
                      <tr>
                        <td>Commercial Information</td>
                        <td>
                        	<ul class="list-types">
                        		<li>Products or services purchased, obtained, considered, such as booking details (e.g., name, origination/destination, date of birth, gender, co-traveler details)</li>
                        		<li>Other purchasing or consuming histories or tendencies</li>
                        	</ul>
                        </td>
                        <td>
                        	Websites, Apps, or Services (information collected directly from user)<br/> <br/> 
                        	Other Sources (e.g., public databases, marketing and analytics partners, social media platforms, booking suppliers and intermediaries, fraud management and security vendors)
                        </td>
                      </tr>
                      <tr>
                        <td>Internet or Network Activity</td>
                        <td>
	                      <ul class="list-types">
			                <li>Booking search history</li>
			                <li>Email clickthroughs</li>
			                <li>Sign-ups/Registrations</li>
			                <li>Interaction with an advertisement</li>
			              </ul></td>
                        <td>
                        	Websites, Apps, or Services (information collected directly from user)<br/> <br/> 
                        	Other Sources (e.g., marketing and analytics partners, social media platforms, fraud management and security vendors)
                        </td>
                      </tr>
                      <tr>
                        <td>Geolocation</td>
                        <td>
                        	<ul class="list-types">
                        		<li>Physical location of desktop or mobile device</li>
                        	</ul>
                        </td>
                        <td>
                        	Websites, Apps, or Services (information collected directly from user)<br/> <br/> 
                        	Other Sources (e.g., marketing and analytics partners, social media platforms, fraud management and security vendors)
                        </td>
                      </tr>
                      <tr>
                        <td>Audio, electronic, visual, thermal, olfactory, or similar information</td>
                        <td>
                        	<ul class="list-types">
                        		<li>Contact center calls</li>
                        	</ul>
                        </td>
                        <td>
                        	Websites, Apps, or Services (information collected directly from user)<br/> <br/> 
                        	Other Sources (outsourced contact center locations)
                        </td>
                      </tr>
                      <tr>
                        <td>Inferences drawn from any of these personal information categories</td>
                        <td>
                          <ul class="list-types">
                            <li>Travel preferences</li>
                            <li>Potential fraudulent behavior or activity</li>
                            <li>Search history (e.g., bookings searched)</li>
                            <li>Web behavior</li>
                            <li>Characteristics</li>
                            <li>Propensity</li>
                          </ul>
                        </td>
                        <td>Websites, Apps, or Services (information derived from user interaction)<br/> <br/>
                        Other Sources (e.g., marketing and analytics partners, social media platforms, fraud management and security vendors)</td>
                      </tr>
                      <tr>
                        <td>Financial Information (information described in CA Code §1798.80)</td>
                        <td>
                          <ul class="list-types">
                            <li>Bank account number</li>
                            <li>Credit card number</li>
                            <li>ebit card number</li>
                            <li>Other financial information</li>
                          </ul>
                        </td>
                        <td>Websites, Apps, or Services (information collected directly from user)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->
         		</div>
         	</div>

         	<div class="col-12 col-md-12 mb-4">
         		<div class="ccpa-box">
              <h5>Your CCPA Rights</h5>
              <p><strong>Access</strong></p>
              <p>You may request access to the personal information that Fareportal collected and maintained about you (along with information regarding its use and disclosure) over the past twelve (12) months upon appropriate verification. You may only make such requests twice (2) per every twelve (12) months.</p>
              <p><strong>Deletion</strong></p>
              <p>You have the right to request that Fareportal delete personal information collected and maintained about you, subject to certain exceptions. Once your request is verified and we have determined that we are required to delete that information in accordance with applicable law, we will delete your personal information accordingly. Your request to delete your personal information may be denied if it is necessary for us to retain your information under one or more of the exceptions listed in the CCPA. Please note that a record of your deletion request may be kept pursuant to our legal obligations.</p>
              <p><strong>“Do Not Sell” Requests</strong></p>
              <p>You may opt-out of “sales” of personal information by clicking the “Do Not Sell My Info” link (set to appear for California-based IP addresses detected via third-party service).</p>
              <p>Subject to applicable law, opting out of “sales” will not prevent your personal information from being shared with our affiliates for any purpose or with third parties for non-marketing purposes (for example, to process one of your transactions). Further, this opt-out mechanism will not prevent the transfer of personal information in connection with a merger, reorganization, acquisition, or similar event.</p>
         			
         		</div>
         	</div>

         	<div class="col-12 col-md-12 mb-4">
         		<div class="ccpa-box">
              <h5>Exercising Your Rights</h5>
              <p>To exercise the access and deletion rights described above, please submit a request to us by either:</p>
              <ul class="list-types">
                <li>Emailing us at <a href="privacy@tripdear.com">privacy@tripdear.com</a></li>
                <li>Calling us at (888) 481-1227.</li>
              </ul>
              <p><strong>To opt-out of “sales”:</strong></p>
              <ul class="list-types">
                <li>See “Do Not Sell Requests” section above.</li>
              </ul>
              <p>Please note that Consumers have a right to not receive discriminatory treatment for the exercise of their rights under the CCPA.</p>
         			
         		</div>
         	</div>

         	<div class="col-12 col-md-12 mb-4">
         		<div class="ccpa-box">
              <h5>Verifying Your Request</h5>
              <p>Only you, or a person that you authorize to act on your behalf, may make a request related to your personal information. In the case of access and deletion (and “Do Not Sell” requests if we believe such request is fraudulent), your request must be verified before we can fulfill such request.</p>
              <p>Verifying your request will require you to provide sufficient information for us to reasonably verify that you are the person about whom we collected personal information or a person authorized to act on your behalf (e.g., previous booking number of person to whom request relates).</p>
              <p>We will only use the personal information that you have provided in a verifiable request in order to verify your request. As stated above, we cannot respond to your request or provide you with personal information if we cannot verify your identity or authority.</p>
              <p>Please note that we may charge a reasonable fee or refuse to act on a request if such request is excessive, repetitive, or manifestly unfounded.</p>
         			
         		</div>
         	</div>

          <div class="col-12 col-md-12 mb-4">
            <div class="ccpa-box">
              <h5>Contacting Us</h5>
              <p>If you have any questions regarding our privacy practices as it relates to this CCPA Notice, please contact us via email at <a href="privacy@tripdear.com">privacy@tripdear.com</a> with the subject line, <strong>“CCPA Notice.”</strong></p>
              <p>Because email communications are not always secure, please do not include credit card or other sensitive information in your emails to us.</p>
            </div>
          </div>
         </div><!--/row-->

              
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->
      </div><!--/container-->
    </section><!--/inner-page-section-->

@include('includes.footer')