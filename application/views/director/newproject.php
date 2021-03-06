<?php
  include 'includes/head.php';
 ?>

    <body>
        <style>
          body{
            padding-top: 120px;
            padding-bottom: 0px;
          }
          .rotate-img {
            -webkit-animation: rotation 2s infinite linear;
          }
          @-webkit-keyframes rotation {
              from {-webkit-transform: rotate(0deg);}
              to   {-webkit-transform: rotate(359deg);}
          }
          .email-templete {
            
          }
          .tab-content {
            padding: 10px 5px;
          }
      
        .ui-autocomplete.ui-widget-content{
        z-index: 1200;
        }
        #emailPreview, #previewSMS{
          z-index: 1200;
        }
        iframe#emailPreviewiFrame{
          border: none;
        }
        #emailtab, #smstab .active{
          border: 1px solid #FF3B49;
          padding: 0px;
          /* margin: 0px; */
          border-bottom: 0px;
          border-radius: 4px 4px 0px 0px;
        }
        .nav-tabs>li>a {
          margin-right: 0px;
        }
        .contact_inputs{
          height: 40px;
          border: 2px solid #EAEAEA;
          font-size: 14px;
          padding: 8px 8px 8px 8px;
          margin-bottom: 5px;
          border-radius: 0px;
              -webkit-box-shadow: none;
        }
        .contact_textarea{
          height: 340px;
        }
        .contact_inputs :focus{
          border: 1px solid #ff3b49;
        }
        .form-control:focus {
          border-color: #FF003A;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 2px rgba(255, 0, 0, 0.6);
          border: 1px;
      }
      .form-group{
        margin-bottom: 0px;
      }
      .info{
        font-family: "Roboto","Open Sans";
        font-size: 15px;
      }
      .profile_image{
        height: 75px;
        width: 75px;
        border-radius: 50%;
        border: 2px solid white;
        transition: all .2s ease-in-out;

      }
      .profile_image:hover{
        transform: scale(1.1);
      }
      thead{
        font-family: "Open Sans";
        font-size: 16px;
        font-weight: 600;
        background: white;
        
      }
      th{
        color: #FF9800;
      }
      table{
        border: 1px solid #ddd;
      }
      .row_btn{
        color:#FF9800;
        margin-left: 5px;
      }
      .row_btn:hover{
        color: #F44336;
      }
      .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    
        border-color: #ddd;
        box-shadow:none; 
    }
    .submit-btn {
      padding: 4px 8px;
    }
    .navbar-nav > li > a:hover{
      color: #fff;
      background:#F7A9A9;
      border-radius:30px; 
    }
    .footer-items a {
      color: rgba(255,255,255,0.7);
    }
    .footer-items a:hover {
      color: rgba(255,255,255,1);
      text-decoration: none;
    }
    .heading
    {
      font-size: 18px;
      color: #777788;
      font-family: Raleway;
      margin-top: 20px;
    }
    .form-validation{
    box-sizing: border-box;
   
    margin: 0 auto;
    padding: 55px;

    background-color:  #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);

    font: bold 14px sans-serif;
    text-align: center;
}

.form-row{
    position: relative;
    text-align: left;
    margin-bottom: 23px;
}

.form-title-row{
    text-align: center;
    margin-bottom: 55px;
}

.form-validation h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 15px 8px;
    border-bottom: 2px solid #ffb600;
    margin:0;
}

.form-validation .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color:  #5f5f5f;
    width: 180px;
    text-align: right;
    padding: 8px 25px;
}

.form-validation input{
    position: relative;
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 240px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}


/* Styles for Valid input data */

.form-validation .form-valid-data-sign{
    position: absolute;
    color: #ffffff;
    line-height: 24px;
    text-align: center;
    width: 23px;
    height: 23px;
    border-radius: 50%;
    background-color:  #a2cf78;
    left: 440px;
    top: 10px;
    display: none;
}

/* Styles for Invalid input data */

.form-validation .form-invalid-data{
    margin-bottom: 55px;
}

.form-validation .form-invalid-data input{
    border: 1px solid #d37171;
    box-shadow: 2px 3px 4px 0 rgba(200, 77, 77, 0.15);
}

.form-validation .form-invalid-data-sign{
    position: absolute;
    color: #ffffff;
    line-height: 23px;
    font-size: 14px;
    text-align: center;
    width: 23px;
    height: 23px;
    border-radius: 50%;
    background-color: #e17c4f;
    left: 440px;
    display: none;
    top: 10px;
}

.form-validation .form-invalid-data-info{
    position: relative;
    color: #c84d4d;
    font-weight: normal;
    bottom: -30px;
    left: 183px;
}

.form-invalid-data .form-invalid-data-sign,
.form-invalid-data .form-invalid-data-info{
    display: block;
}

.form-valid-data .form-valid-data-sign{
    display: block;
}

.form-validation select{
    position: relative;
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 240px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}

.form-validation .form-checkbox input{
    width:auto;
}

.form-validation button{
    display: block;
    border-radius: 2px;
    background-color:  #6caee0;
    color: #ffffff;
    font-weight: bold;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 14px 22px;
    border: 0;
    margin: 40px 183px 0;
}


/* Placeholder color */

.form-validation ::-webkit-input-placeholder {
    color:  #999;
}

.form-validation ::-moz-placeholder {
    color:  #999;
    opacity: 1;
}

.form-validation :-ms-input-placeholder {
    color:  #999;
    opacity: 1;
}
.role-plus{
            font-family: AvenirNext-Regular;
            font-size: 18px;
            color: #FBB515 !important;
            padding: 0px !important;
            text-align: left !important;
            width: auto;

        }
        .training-minus{
            font-family: AvenirNext-Regular;
            font-size: 18px;
            color: #F05759;
        }
        .training_title{
            font-family: AvenirNext-Bold;
            font-size: 15px;
            color: #9B9B9B;
            letter-spacing: 0px;
            text-shadow: 0px 1px 0px #FFFFFF;
        }
        .training_details{
            background: #EBEBEB;
            border-radius: 9px;
            font-size: 15px;
            color: black;
            padding-left: 15px;
            padding: 15px;
            width: 100%;
        }
        .add_role{
          width: auto!important;
          float: none;

        }
        .roles{
          float: none;
          padding: 0px !important;
          width: auto !important;
        }
        .role_label{
          max-width: 185px;
          text-align: right;

        }

input[type=date], input[type=time], input[type=datetime-local], input[type=month] {
    line-height: 18px !important;
}

.gradient{
    background: #F7A9A9;
    background-image: linear-gradient(45deg, rgba(234, 83, 11, 0.67) 0%, rgba(216, 27, 79, 0.86) 31%, rgba(195, 15, 76, 0.86) 100%, rgb(253, 24, 255) 0%);
    color: white;
    width:75%;
    margin-top:5px;
}

/*  Making the form responsive. Remove this media query
    if you don't need the form to work on mobile devices. */

@media (max-width: 700px) {

    .form-validation{
        margin-top: 0;
        padding: 30px;
        max-width: 480px;
    }

    .form-validation .form-row{
        max-width: 300px;
        margin: 25px auto;
        text-align: left;
    }

    .form-validation .form-title-row{
        margin-bottom: 50px;
    }

    .form-validation h1{
        padding: 0 0 15px 0;
    }

    .form-validation .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 15px;
    }

    .form-validation input,
    .form-validation select{
        width: 220px;
    }

    .form-validation .form-valid-data-sign,
    .form-validation .form-invalid-data-sign{
        left: 235px;
        top: 40px;
    }

    .form-validation .form-invalid-data{
        margin-bottom: 55px;
    }

    .form-validation .form-invalid-data-info{
        left: 0;
    }

    .form-validation .form-checkbox span{
        display: inline-block !important;
        width: 100px !important;
    }

    .form-validation button{
        margin: 0;
    }
    .add_role{
      margin-left: 0px;
    }
    .role_label{
      text-align: left;
    }

}

.glyphicon{
  font-size: 12px;
  margin-left: 5px;
  top:0px;
}
.glyphicon-pencil{
  color:#009968;
}
.glyphicon-ok{
  color:#009968;
  border: 1px solid #009968;
  padding: 5px;
  width: auto;
  top:18px;
  padding:10px !important;
}
.glyphicon-remove{
  color:#ff3b49;
  border: 1px solid #ff3b49;
  padding: 5px;
  width: auto;
  top:18px;
  padding:10px !important;
}
.glyphicon-trash{
  color: #ff3b49;
}
.add_role .col-sm-3{
  padding-left: 0px;

}
.add_role .col-sm-5{
  padding-left: 0px;
}
.col-sm-3 input{
  width: 100%;
  margin: 0px 0px 5px 0px;
}
 
.col-sm-5 input{
  width: 100%;
  margin: 0px 0px 5px 0px;
}   
.add_role .col-sm-6{
  padding-left: 0px;

}
.add_role .col-sm-3{
  padding-left: 0px;
}
.add_role .col-sm-2{
  padding-left: 0px;
}

.col-sm-6 input{
  width: 100%;
  margin: 0px 0px 5px 0px;
}  
.col-sm-2 select{
  width: 100%;
  margin: 0px 0px 5px 0px;
  border-radius: 0px !important;
  background: #fff !important;
  height: 40px;
}
.role_name{
  width: 100px;
}
.question_container{
  margin-bottom: 60px;
}
#question_list{
  text-align: left;

}
.go_button{
  padding: 4px 10px;
  background: #ffb600 !important;
  border-radius: 4px;
  color: #000 !important;
  border: none;

}            
.toggleEdit{
    cursor: pointer;
  }  
  .small_label{
    font-family: "Raleway";
    font-weight: 500;
    font-size: 12px;
    color: #ffb600;
  }

  </style>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Modal Section : Contact Form -->
          
        <!-- Ths section is post selection !-->
        <div class="container-fluid" id="home">
           
           
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
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= IMG ?>/logo.png" class="brands img-responsive "/>
                            <div class="vertical-middle brandname title">
                                <?= M_Title ?>
                                <br>
                                <span id="tag-line" class="firstcolor info-small hidden-xs">
                                Making Casting easier!                      
                                </span>
                            </div>
                            
                        </a>
                    </div> 

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                      <ul class="nav navbar-nav navbar-right ul_list">
                       <li >
                            <a href="<?= base_url()?>director/"  > Dashboard
                            </a>
                        </li>
                        <li >
                            <a href="<?= base_url()?>director/account"  > Account
                            </a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down firstcolor" aria-hidden="true"></span></a>
                          <ul class="dropdown-menu">
                           <li><a href="#" class="changeCategory">Change Category</a></li>
                           <li><a href="<?= base_url() . "director/conversations" ?>" >Conversations</a></li>
                            <!--<li><a href="add_actor.php">Add</a></li>
                            <li><a class="not-active" href="#">Import</a></li>
                            <li><a class="not-active" href="#">Export</a></li>
                            <li role="separator" class="divider"></li>-->
                            <li><a href="<?= base_url() ?>home/logout/">Sign-Out</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
          </div>
           <!-- contact modal toggle -->
            <div class="container-fluid" id="create_project_home">
              <div class="col-sm-12 center">
              
                  <form class="form-validation" method="post" action="#">

                    <div class="form-title-row">
                         <h1 class="heading"> CREATE A NEW PROJECT</h1>
                    </div>

                    <div class="form-row form-input-name-row">

                        <label>
                            <span>TITLE</span>
                            <input type="text" id="title" name="title" placeholder="Title of the Project">
                        </label>

                        <!--
                            Add these three elements to every form row. They will be shown by the
                            .form-valid-data and .form-invalid-data classes (see the JS for an example).
                        -->

                        <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                        <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                        <span class="form-invalid-data-info"></span>

                    </div>

                    <div class="form-row form-input-name-row">

                        <label>
                            <span>CLIENT</span>
                            <input type="text" id="client" name="client" placeholder="Name of the client">
                        </label>

                        <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                        <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                        <span class="form-invalid-data-info"></span>

                    </div>
                    <div class="form-row form-input-name-row">

                        <label>
                            <span>START DATE</span>
                            <input type="date" id="project_date" name="start_date" placeholder="">
                        </label>

                        <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                        <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                        <span class="form-invalid-data-info"></span>

                    </div>
                    <div class="form-row form-input-name-row">

                        <label>
                            <span>SHOOT START DATE</span>
                            <input type="date" id="shoot_begins" name="shoot_start_date" placeholder="Name of the client">
                        </label>

                        <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                        <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                        <span class="form-invalid-data-info"></span>
                        <label>
                            <span>SHOOT END DATE</span>
                            <input type="date" id="shoot_ends" name="shoot_end_date" placeholder="Name of the client">
                        </label>

                        <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                        <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                        <span class="form-invalid-data-info"></span>

                    </div>

                    <div class="form-row form-input-name-row">
                      <div class="row">
                        <div class="col-sm-3 role_label">
                          <label>
                              <span>ROLE</span>
                          </label>
                        </div>
                        <div id="role_list" class="col-sm-9">
                          <span id="add_role_form_open" class="role-plus toggleEdit" data-unhide-id="#add_role_form,#add_role_form_close" data-hide-id="#add_role_form_open" onclick="add_role()">+ Add a new role<br></span>
                          <div id="add_role_form" class="add_role hidden" >
                                <span class="col-sm-3"><span class="small_label">Role Name</span><input type="text" id="role_input" placeholder="Role"></input></span>
                                <span class="col-sm-3"><span class="small_label">Role Description</span><input type="text" id="role_description_input" placeholder="Role Description"></input></span>
                                <span class="col-sm-3"><span class="small_label">No. of scenes to be auditions.</span><input type="text" id="role_scenes_input" placeholder="No. of scenes to be auditions" value=1 title="Put the number of scenes you will using to audition for this role. This will help you later to organize the audition videos."></input></span>
                                <input type="hidden" id="request_input" value=""/>
                                <input type="hidden" id="role_id_input" value=""/>
                                <span id="add_role_form_submit" class="col-sm-2 glyphicon glyphicon-ok toggleEdit" onclick="role_add_edit()"></span>
                                <span id="add_role_form_close" class="col-sm-2 glyphicon glyphicon-remove toggleEdit hidden" data-unhide-id="#add_role_form_open" data-hide-id="#add_role_form,#add_role_form_close"></span>

                          </div>
                        </div>  
                        
                      </div>  
                        <span id="add_edit_form_not_valid" class="form-invalid-data-sign hidden"><i class="fa fa-close"></i></span>
                        <span id="add_edit_form_info" class="form-invalid-data-info hidden">Please fill all the fields.</span>

                    </div>

                    <div class="form-row">

                        <button type="button" class="go_button" onclick="form_submit()">Create Project</button>

                    </div>

                </form>
              </div>  
            </div>
            <div class="container fluid hidden" id="set_questions">
              <div class="alert alert-primary alert-dismissible alertbox gradient center" id="savedChnaged" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <span id="savedChnagedMsg">NEW PROJECT CREATED!</span>
              </div>
              <div class="col-sm-12 center">
              
                  <form class="form-validation" method="post" action="#">

                    <div class="form-title-row">
                         <h1 class="heading"> Now setup the questions for the Casting Sheet.</h1>
                    </div>
                    <div id="list_of_roles">
                      <div id="role_question" class="question_container">
                        <h1 id="which_role_question" class="heading pull-left"> Questions</h1>
                        <br><br><br><br>
                        <div id="question_list">
                          <span id="add_question_form_open" class="role-plus pull-left toggleEdit" 
                            data-unhide-id="#add_question_form,#add_question_form_close"
                            data-hide-id="#add_question_form_open" 
                            onclick="add_question()">
                              + Add a new question<br>
                          </span>
                          <div id="add_question_form" class="add_role hidden" >
                                <span class="col-sm-6">
                                  <span class="small_label">Question</span><input type="text" id="question_input" placeholder="Enter Question"></input>
                                </span>
                                <span class="col-sm-2">
                                  <span class="small_label">Assign to role</span><select id="question_role_options" placeholder="Question Type">
                                    <option value=-1>All</option>
                                  </select>
                                </span>
                                <span class="col-sm-2">
                                  <span class="small_label">Answered in</span><select id="question_type_all" placeholder="Question Type">
                                    <option value=1>Yes/No/Maybe</option>
                                    <option value=2>Text</option>
                                  </select>
                                </span>
                                <input type="hidden" id="request_input_q" value=""/>
                                <input type="hidden" id="question_id_input_q" value=""/>
                                <span id="add_question_form_submit" class="col-sm-2 glyphicon glyphicon-ok toggleEdit" onclick="add_edit_question()"></span>
                                <span id="add_question_form_close" class="col-sm-2 glyphicon glyphicon-remove toggleEdit " data-unhide-id="#add_question_form_open" data-hide-id="#add_question_form"></span>
                                <span id="add_edit_form_not_valid_q" class="form-invalid-data-sign hidden"><i class="fa fa-close"></i></span>
                                <span id="add_edit_form_info_q" class="form-invalid-data-info hidden">Please fill all the fields.</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">

                        <button type="button" style="margin:0px;" class="go_button" onclick="question_submit()">Save and Open Casting Sheet</button>

                    </div>

                </form>
              </div>  
            </div>

      <script>
      var isAllowed = <?= ($isAllowed) ? 1 : 0; ?>;
      </script>
        <!--================================== Navigation Ends Here =======================================-!-->
<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>
<script src="<?= JS ?>/newproject.js"></script>
