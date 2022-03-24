<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>New Lead | Binof App</title>
    <meta name="description" content="Contact Us | Binof App">
</head>
<style>
    a:hover {
        text-decoration: underline !important;
    }
</style>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8" style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <!-- Logo -->
                    <tr>
                        <td style="text-align:center;">
                           <a href="#" class="logo"><b style="font-size: 35px;">C</b><span class="fas fa-virus bounce" style="color:#e4505d;"></span>vid-19</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <!-- Email Content -->
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <!-- Title -->
                                <tr>
                                    <td style="padding:0 15px; text-align:center;">
                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">New Lead</h1>
                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece;
                                        width:100px;"></span>
                                    </td>
                                </tr>
                                <!-- Details Table -->
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #ededed">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        First Name:</td>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">{{($data["firstname"] ?? "--")}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Last Name:</td>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">{{($data["lastname"] ?? "--")}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Email:</td>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">{{($data["email"] ?? "--")}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Phone #:</td>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">{{($data["phone"] ?? "--")}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Dry_Cough #:</td>
                                                     <?php
                                                      if(isset($data["dry_cough"]) && $data["dry_cough"]!=0){?>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #eb210c;">Yes</td>
                                                       <?php 
                                                      }else{?>
                                                      <td style="padding: 10px; border-bottom: 1px solid #ededed; color: green;">No</td>
                                                    <?php
                                                      }
                                                     ?>   
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                     Sore Throat #:</td>
                                                    <?php
                                                      if(isset($data["sore_throat"]) && $data["sore_throat"]!=0){?>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #eb210c;">Yes</td>
                                                       <?php 
                                                      }else{?>
                                                      <td style="padding: 10px; border-bottom: 1px solid #ededed; color: green;">No</td>
                                                    <?php
                                                      }
                                                     ?>   
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                    Cold #:</td>
                                                    <?php
                                                      if(isset($data["cold"]) && $data["cold"]!=0){?>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #eb210c;">Yes</td>
                                                       <?php 
                                                      }else{?>
                                                      <td style="padding: 10px; border-bottom: 1px solid #ededed; color: green;">No</td>
                                                    <?php
                                                      }
                                                     ?>   
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                    Fever #:</td>
                                                    <?php
                                                      if(isset($data["fever"]) && $data["fever"]!=0){?>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #eb210c;">Yes</td>
                                                       <?php 
                                                      }else{?>
                                                      <td style="padding: 10px; border-bottom: 1px solid #ededed; color:green;">No</td>
                                                    <?php
                                                      }
                                                     ?>   
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                    Headache #:</td>
                                                    <?php
                                                      if(isset($data["headache"]) && $data["headache"]!=0){?>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #eb210c;">Yes</td>
                                                       <?php 
                                                      }else{?>
                                                      <td style="padding: 10px; border-bottom: 1px solid #ededed; color: green;">No</td>
                                                    <?php
                                                      }
                                                     ?>   
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                    Vomiting #:</td>
                                                    <?php
                                                      if(isset($data["vomiting"]) && $data["vomiting"]!=0){?>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #eb210c;">Yes</td>
                                                       <?php 
                                                      }else{?>
                                                      <td style="padding: 10px; border-bottom: 1px solid #ededed; color: green;">No</td>
                                                    <?php
                                                      }
                                                     ?>   
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px;  border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                        Message:</td>
                                                    <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">{{($data["detail"] ?? "--")}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0;">&copy; <strong>www.binofapp.com</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
