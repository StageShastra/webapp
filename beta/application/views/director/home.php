<?php
  include 'includes/head.php';
?>
    <body>
        <style>
          body{
            padding-top: 90px;
          }
          .rotate-img {
            -webkit-animation: rotation 2s infinite linear;
          }

          @-webkit-keyframes rotation {
              from {-webkit-transform: rotate(0deg);}
              to   {-webkit-transform: rotate(359deg);}
          }


        </style>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Modal Section : Contact Form -->
         <div id="contactmodal" class="col-sm-8 fade contact-form hidden" style="max-width: 550px;">
              <font class="info dark-gray">Contact</font>
              <hr>
              <font class="info-small dark-gray">Selected Contacts</font>
              <font class="info dark-gray"><span id="receipents"></span></font>
              <input type="text" class="contact-subject email-field" id="subject" placeholder="Subject"/>
              <textarea class="contact-message email-field" id="message" placeholder="Type your message here."></textarea>
              <textarea class="contact-sms hidden sms-field" id="textsms" maxlength=280 placeholder="Type your sms text here."></textarea>
              <input type="checkbox" name="contact" id="emailcheck" class="css-checkbox contact-checkbox" data-field="email-field" checked /><label for="emailcheck" class="css-label"><span class="info dark-gray formtext">Email</span></label>
              <input type="checkbox" name="checkboxsms" id="checkboxsms" class="css-checkbox contact-checkbox" data-field="sms-field" /><label for="checkboxsms" class="css-label"><span class="info dark-gray formtext">SMS</span><font class="info-small firstcolor"><sup>New!</sup></font></label><br>
              <input type="hidden" name="sendVia" value="email">
              <button type="submit" class="btn submit-btn firstcolor sendMail" id="btn-login" ><span class="glyphicon glyphicon-send"></span> &nbsp; Send</button>
        </div>
        <!-- Ths section is pre selection !-->
        <div class="container" id="prelogin">
          <div class="col-sm-1">
          </div>
          <div class="container-fluid col-sm-10"> <!--container fluid starts -->
            <div class="center headname padded">
              <img src="<?= IMG ?>/logo.png" class="logo img-fluid"/> STAGE<b>SHASTRA</b>
            </div>
            <div class="row center light-padded">
              <div class="col-sm-10 center bordered" id="categories">
              </div>
            </div>
          </div>
          <div class="col-sm-1">
          </div>
        </div>
        <!-- Ths section is pre selection !-->

        <!--===========================================================================================!-->

        <!-- Ths section is post selection !-->
        <div class="container-fluid hidden" id="home">
           
           
            <nav class="navbar navbar-default navbar-fixed-top custom-navbar">
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="<?= IMG ?>/logo.png" class="brands"/><span class="vertical-middle brandname">STAGE<b>SHASTRA</b></span><p><span id="tag-line" class="firstcolor info-small">Makes casting easier!</span>
                        </a>
                    </div> 

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                      <ul class="nav navbar-nav navbar-right vertical-middle">
                        <li >
                            <a href="#" class="not-active">Discover<span class="info-small"><i>(Coming Soon)</i></span></a>
                        </li>
                        <li >
                            <a href="#"><span class="firstcolor" data-toggle="modal" data-target="#advancedSearch"> Advanced<sup><span class="info-small">New!</span></sup></span>
                            </a>
                        </li>
                        <li >
                            <a href="#"><span class="firstcolor" data-toggle="modal" data-target="#inviteActors"> Invite </span>
                            </a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down firstcolor" aria-hidden="true"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="add_actor.php">Add</a></li>
                            <li><a class="not-active" href="#">Import</a></li>
                            <li><a class="not-active" href="#">Export</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?= base_url() ?>home/logout/">Sign-Out</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
           <!-- contact modal toggle -->
            <div class="container-fluid padded">
              <button type="submit" class="btn submit-btn firstcolor contact-btn populateContactForm" data-toggle="modal" data-target="#contactmodal"><span class="glyphicon glyphicon-edit"></span></button>
                <div class="alert alert-success" id="success_send" role="alert">Mail sent to all the actors.</div>
                <div class="alert alert-danger"  id="failure_send" role="alert">Error sending mail! Please try again.</div>
                <div class="container col-sm-12 center" id="browse-table">
                      
                </div>
            </div>
            <input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" onclick="checkboxed()" />
   
           </div>
           

          <!-- Advanced Search Modal -->
          <div id="advancedSearch" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title firstcolor info">Advanced Search</h4><span class="info-small gray">Advance Search lets you set filters to refine your actor table</span>
                </div>
                <div class="modal-body" style="background-color:#f2f2f2;">
                  <div class="container" style="max-width:100%; ">
                    <div class="row">
                      <div class="col-sm-6 form-group no-paddinglr">
                          <span class="info-small gray">Age Range (Min)</span> <input type="text" class="form-control add" id="aagemin" name="agemin"  placeholder= "from age:" required />
                          <span class="info-small gray">Sex(M/F) </span> <input type="text" class="form-control add" id="asex" name="sex" placeholder= "M/F:" required />

                      </div>
                      <div class="col-sm-6 form-group no-paddinglr">
                          <span class="info-small gray">Age Range (Max) </span> <input type="text" class="form-control add" id="aagemax"  name="agemax" placeholder= "upto age :" required />
                          <span class="info-small gray">Skills(tag)</span>  <input type="text" data-role="tagsinput" class="form-control add" id="askills" name="skills" placeholder= "Skills :" required />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 form-group no-paddinglr">
                          <span class="info-small gray">Height (min) </span> <input type="text" class="form-control add" id="aheightmin" name="height" placeholder= "from height (in cms) :" required />
                          <span class="info-small gray">Projects(tag) <input type="text" data-role="tagsinput" class="form-control add" id="aprojects" name="projects" placeholder= "Projects :" required />
                      </div>
                      <div class="col-sm-6 form-group no-paddinglr">
                          <span class="info-small gray">Height (max) </span> <input type="text" class="form-control add" id="aheightmax"  name="agemax" placeholder= "upto height (in cms) :" required />
                          <button type="submit" class="btn submit-btn firstcolor" style="margin-top: 20px; margin-left:10px;" onclick="search()" id="btn-search" ><span class="glyphicon glyphicon-filter"></span> &nbsp; Filter</button>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                
              </div>

            </div>

            <!-- Enter Email and Mobile Modal -->
            <div id="inviteActors" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title firstcolor info"> Invite Actors </h4>
                    <span class="info-small gray">Invite Actor to StageShastra by there email and mobile numbers</span>
                  </div>
                  <div class="modal-body" style="background-color:#f2f2f2;">
                    <div class="container" style="max-width:100%; ">
                      <form action="resources/sendInvite.php" method="post" id="invitationForm">
                        <div class="row">

                          <div class="col-sm-12 form-group no-paddinglr">
                            <span class="info-small gray">
                              Emails (comma seperated)
                            </span> 
                            <textarea class="form-control add" name="emails"  placeholder="Add Emails" required rows="3" style="border: 1px solid #999;"></textarea>
                          </div>

                        </div>
                        <div class="row">

                          <div class="col-sm-12 form-group no-paddinglr">
                            <span class="info-small gray">
                              Mobile Numbers (comma seperated)
                            </span> 
                            <textarea class="form-control add" name="mobiles"  placeholder="Add Mobile Numbers" rows="3" required style="border: 1px solid #999;"></textarea>
                          </div>

                        </div>
                        <div class="row">

                          <div class="col-sm-12 form-group no-paddinglr">
                            <span class="info-small gray">
                              Enter Message
                            </span> 
                            <textarea class="form-control add" name="message"  placeholder="Enter Message" rows="5" required style="border: 1px solid #999;"></textarea>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-sm-6 form-group no-paddinglr">
                            <button type="submit" class="btn submit-btn firstcolor" style="margin-top: 20px; margin-left:10px;" id="btn-search" ><span class="glyphicon glyphicon-envelope"></span> Invite </button>
                        </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="detailsActor" class="modal fade col-sm-10 center" role="dialog">
            <div class="modal-dialog" style="width:100%;">

              <!-- Modal content-->
              <div class="modal-content center" style="width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title firstcolor info">Actor's Details</h4>
                </div>
                <div class="modal-body" id="actor_detail"  style="background-color:#fff;">
                  
                </div>
                </div>
                
              </div>

            </div>
          </div>
        <!--================================== Navigation Ends Here =======================================-!-->
<?php
  include 'includes/scripts.php';
?>