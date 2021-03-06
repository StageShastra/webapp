<?php
  include 'includes/head.php';
 ?>



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
      .pro_pic{
        float: left;
        height: 75px;
        margin-right: 10px;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 1px 1px 10px gray;
        transition: all .2s ease-in-out;
        cursor: pointer;
      }
      .pro_pic:hover{
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
      font-size: 24px;
      color: #000;
      font-family: Raleway;
      margin-top: 35px;
      margin-bottom: 0px;
    }
    .project_name{
      font-size: 18px;
      color: #777;
      margin: 0px;

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
    margin-bottom: 20px;
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
.input_cs{
  padding: 3px 6px;
  background: white;
  font-size: 12px;
  border:1px solid #ffc107;
  border-radius: 5px;
  margin: 10px 5px 5px 0px;
}
.input_cs:active{
  outline: none;
  border:1px solid #ffb600;
}
.input_cs:hover{
  outline: none;
  border:1px solid #ffb600;
}
.input_cs:focus{
  outline: none;
  border:1px solid #ffb600;
  box-shadow: 1px 1px 5px 0px #ffb600;
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
  top:3px;
  padding:10px !important;
}
.glyphicon-remove{
  color:#ff3b49;
  border: 1px solid #ff3b49;
  padding: 5px;
  width: auto;
  top:3px;
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
  width: 100% !important;
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
.attendees{
  border: 1px solid #c2c6ca;
  border-radius: 5px;
  padding: 5px 10px;
  height: 500px;
  margin: 40px 0px;
}
.label_att{
  color: #ffb600;
  font-size: 18px;
  font-weight: 600;
  font-family: "Roboto","Open Sans","Raleway";
  position: relative;
  top:-40px;
}
.go_button{
  padding: 4px 10px;
  background: #ffb600;
  border-radius: 4px;
  color: #000;
  border: none;
  margin-top: 5px;
  margin-bottom: 5px;

}

.actor_name_ea{
    vertical-align: middle;
    position: relative;
    top: 30px;
    text-align: left;
}
.marginl15{
  text-align: left;
  margin-left: 15px;
}
.label_cs{
    font-size: 17px;
    /*padding: 5px 0px 5px 0px !important;*/
    font-weight: 600;
}
#static_questions{
    margin-top: 25px;
    text-align: left;
}
#role_based_questions{
    text-align: left;
}
.input_cs{
    width: 240px !important;
}
.photo_name{
      height: 100px;
      border-bottom: 2px solid #c2c6ca;
}
.col-sm-6 select{
      margin: 0px 0px 5px 0px;
}
button[disabled], html input[disabled] {
    cursor: not-allowed!important;
    opacity: 0.5!important;
}
.shoot_dates{
  font-size: 12px;
  color: #777;
  font-weight: 600;
}


.textarea{
  width: 240px !important;
  height: 72px;
}
#list_of_attendees{
  margin-top: -34px;
  overflow-y:hidden;
  height: 100%

}
#list_of_attendees:hover{
  overflow-y:scroll;
}
.attendee_name{
  font-family: "Roboto";
  font-weight: 600;
  padding: 5px 10px;
  border-radius: 5px;
  
}
.last_inserted{
  background: rgba(255, 59, 73,0.7);
  color: white;
}
#new_actor{
  text-align: left;
}
#not_registered_message{
    border: 1px solid #ff3b49;
    padding: 5px 10px;
    font-size: 14px;
    font-family: "Raleway";
    /* font-weight: 600; */
    padding: 20px;
    margin: 10px 0px 10px 0px;

}
#not_connected_message{
    border: 1px solid #ff3b49;
    padding: 5px 10px;
    font-size: 14px;
    font-family: "Raleway";
    /* font-weight: 600; */
    padding: 20px;
    margin: 10px 0px 10px 0px;

}
#not_registered_last_message{
  border: 1px solid #ff3b49;
  padding: 5px 10px;
  font-size: 14px;
  font-family: "Raleway";
  /* font-weight: 600; */
  padding: 20px;
  margin: 10px 0px 10px 0px;
  text-align: center;

}
.actors{
  width:135%;
}
.star{
  font-size: 24px;
  color:#444; 
  width: 30px;
}
.role_name{
  width: 150px;
  font-size: 12px;
  font-family: "Raleway";
  color: #777;
}
.video{
  padding-left: 10px;
  width:240px; 
  text-align: center;

}
.notes{
    font-size: 12px;
    font-family: "Raleway";
    color: #777;
    text-align: center;
}
.profile{
  width: 100px;
}
.check{
  width: 30px;
}
.click_to_add{
  font-family: "Roboto";
  color: gray;
  font-weight: 100;
  font-size: 12px;
}
.fa-star{
  color:#ffb600;
  transition: all 500ms;
  cursor: pointer;
}
.fa-star:hover{
  transform:scale(1);
  opacity: 0.7;
}
.fa{
    margin-left: 5px;
    position: relative;
    font-size: 20px;
    top: -4px;
    cursor: pointer;
}
.fa-star-o{
  transition: all 500ms;
}
.fa-star-o:hover
{
  color: #ffb600;
  transform:scale(1.1);
}
#table{
  margin-top: 20px;
}
.toggle-tab{
  padding: 2px 6px;
  border: 0px solid #FFC107;
  border-radius: 4px;
  background: black;
  font-size: 13px;
  font-family: "Roboto";
  font-weight: 500;
  box-shadow: 2px 2px 10px gray;
  margin-right: 10px;
  transition-duration: 0.1s;
  float: left;
  margin-bottom: 5px;
  cursor: pointer;
  color: #FFC107;
  /*background-image: linear-gradient(45deg, #D3263B 0%, #BE225A 41%, #A81E7B 100%);*/
}

.toggle-tab:hover{
  box-shadow: 0px 0px 3px 2px #f3525b;
}
.toggle-tab-all{

  background: #FFC107;
  color:black;
}
.inactive-tab{
  opacity: 0.5;
  color: gray;
}

.public_disabled{
  cursor: not-allowed;
}

.bigger_text{
  font-size: 18px;
  color: #444;
  position: relative;
  top: -70px;
}


.scrollable{
    overflow-y: scroll;
    overflow-x: hidden;
    min-height: 140px;
    max-height: 200px;
    margin-bottom: 10px;
}

hr{
    margin-top: 5px !important;
    margin-bottom: 0px !important;
    border: 0 !important;
    border-top: 1px solid #eee !important;
}

.projectheaderlabel{
  font-size: 12px;
  color: #777;

  text-transform: uppercase;
  vertical-align: middle;
  padding-top: 2px;
  margin-bottom: 5px;
}

.projectheaderdata{
  font-size: 16px;
  text-transform: uppercase;
  vertical-align: bottom;
  font-weight: 600;
  margin-bottom: 5px;
}

div .border-right{
  border-right: 1px solid #ddd;
}

div .border-bottom{
  border-bottom: 1px solid #ddd;
}


.graybackground{
  background: #eee;
}

.minheight90>div{
  min-height: 90px;
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
            <div class="container-fluid graybackground" id="create_project_home">
               
              <div class="border-bottom" id="table">
                <div class="nocur" style="cursor:default">
                
                <div class="row minheight90">
                  <div class="col-sm-4 border-right">
                        <div class="col-sm-3 projectheaderlabel">Project</div>
                        <div class="col-sm-9 projectheaderdata"> <?= $project["StashProject_name"]; ?></div>
                        <div class="col-sm-12">
                          <button class="go_button submit-btn" onclick="window.open('../castingsheet/<?= $project["StashProject_id"]; ?>',
                        '_blank')">Open Casting Sheet</button>
                          <button type="button" class="go_button hidden" style="opacity: 0.7;" target="_blank">Edit Project </button>
                        </div>
                  </div>

                  <div class="col-sm-4 border-right">
                    <div class="col-sm-3 projectheaderlabel">Client</div>
                    <div class="col-sm-9 projectheaderdata"> <?= $project["StashProject_client"]; ?></div>
                    <div class="col-sm-3 projectheaderlabel">Start Date</div>
                    <div class="col-sm-9 projectheaderdata"><span class="shoot_begins"></span> </div>
                    <div class="col-sm-3 projectheaderlabel">Shoot Dates</div>
                    <div class="col-sm-9 projectheaderdata"><span class="shoot_begins"></span> - <span class="shoot_ends"></span> </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="col-sm-6 projectheaderlabel">Actors Auditioned</div>
                    <div class="col-sm-6 projectheaderdata" id="attendeeslength"> updating... </div>
                    <div class="col-sm-6 projectheaderlabel">Show Videos</div>
                    <div class="col-sm-6">
                      <div class="col-sm-8 onoffswitch" data="" style="padding-top:10px; margin-top: -8px !important;">
                        <input type="checkbox" id="myonoffswitch" name="onoffswitch" class="onoffswitch-checkbox" unchecked>
                        <label class="onoffswitch-label center" for="myonoffswitch"></label>
                      </div>                      
                      <div class="col-sm-4" style="padding-top:10px;margin-top: -18px !important;margin-left: -11px;">
                        <img id="loader_gif_video" class="hidden" src="/assets/img/video_loader.gif" height="35">
                      </div>
                    </div>
                    



                  </div>
                </div>
                </div> 
              </div>
              <br>

              <div class="row">
                <div class="col-sm-12">

                  <div class="col-sm-1"><span class="projectheaderlabel">Audition Days</span></div>
                  <div class="col-sm-11 date-tabs ">
                    <span class="toggle-tab toggle-tab-all"  data-name="date" data-state="active">Hide All</span>
                  </div>
                </div>
              </div>


              <div class="row border-bottom">
                <div class="col-sm-12">
                  <div class="col-sm-1"><span class="projectheaderlabel">Roles</span></div>
                  <div class="col-sm-11 role-tabs ">
                    <span class="toggle-tab toggle-tab-all" data-name="role" data-state="active">Hide All</span>
                  </div>
                </div>
              <br>
              </div>

            </div>

        
                <div id="loader"> </div>
                <table class="table table-striped actors">
                
                </table>
              </div>
            </div>
            <div id="detailsActor" class="modal col-sm-10 center" role="dialog" >
            <div class="modal-dialog" style="width:100%;">

              <!-- Modal content-->
              <div class="modal-content center" style="width:100%; height: 500px;">
                <div class="" id="actor_detail">
                  
                </div>
                </div>
                
              </div>

            </div>
            <div id="castingsheetresponse" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header" style="border-bottom: 2px solid #f3525b">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Casting Sheet: <b><span id="m_actor_name" style="text-transform: uppercase;"></span></b></h4>
                  </div>
                  <div class="modal-body">
                    <div class="container col-sm-12">
                      <div class="row" style="border-top: 1px solid white;">
                        <div class="col-sm-5 firstcolor">
                          Email:
                        </div>
                        <div class="col-sm-7">
                          <span id="m_actor_email"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                          Mobile:
                        </div>
                        <div class="col-sm-7">
                          <span id="m_actor_mobile"></span>
                        </div>
                      </div>
                      <div class="row"> 
                        <div class="col-sm-5 firstcolor">
                          Age:
                        </div>
                        <div class="col-sm-7">
                          <span id="m_actor_age">ADD AGE HERE</span>
                        </div>
                      </div>
                      <div class="row"> 
                        <div class="col-sm-5 firstcolor">
                          Height:
                        </div>
                        <div class="col-sm-7">
                          <span id="m_actor_height"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                          Weight:
                        </div>
                        <div class="col-sm-7">
                          <span id="m_actor_weight"></span>
                        </div>
                      </div>
                    
                    
                      <div class="row m_questions">
                       
                      </div>
                      <div class="row">
                        <div class="col-sm-12 firstcolor">
                             <b>Experience:</b> 
                        </div>                     
                      </div>
                      
                      <div class="scrollable col-sm-12">
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                            TVC: 
                        </div>
                        <div class="col-sm-7">
                            <span id="m_actor_tvc"></span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                            TV: 
                        </div>
                        <div class="col-sm-7">
                            <span id="m_actor_tv"></span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                            Web: 
                        </div>
                        <div class="col-sm-7">
                            <span id="m_actor_web"></span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                            Films: 
                        </div>
                        <div class="col-sm-7">
                            <span id="m_actor_films"></span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5 firstcolor">
                            Theatre: 
                        </div>
                        <div class="col-sm-7">
                            <span id="m_actor_theatre"></span>
                        </div>
                      </div>
                      </div>
                    
                    </div>
                  <div class="modal-footer center">
                    <!--<button type="button" class="btn submit-btn" onclick="window.open('http://i.imgur.com/odnRdn3.gif', '_blank')">Open Profile</button>-->
                  </div>
                </div>
              </div> 
            </div>
            </div>

      <script>
      var project_id = <?= $project["StashProject_id"]; ?>;
      var project_shoot_begins = <?= $project["StashProject_shoot_begins"]; ?>;
      var project_shoot_ends = <?= $project["StashProject_shoot_ends"]; ?>;
      var isPublic  = <?= $isPublic; ?>;
      function showcomingsoon(){
        $("#comingsoon").toggle("hidden");
      }
      </script>
        <!--================================== Navigation Ends Here =======================================-!-->
<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>
<script src="<?= JS ?>/viewproject.js"></script>

