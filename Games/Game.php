<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com">


    <!--[if lte IE 7]>
    <style>
    .Navigation .dropdownnavcontainer
    {
        margin-left:121px;
    }
    </style>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=7"/><title>
	<?php echo htmlspecialchars($_GET["game"]); ?>, a Free Game - ROBLOX
</title>
    <link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/Base/AllCSS.css"/><link id="ctl00_Link1" rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico"/><link rel="Stylesheet" type="text/css" href="https://web.archive.org/web/20110210222513cs_/http://www.roblox.com/chat/css/party.css"/><link rel="Stylesheet" type="text/css" href="https://web.archive.org/web/20110210222513cs_/http://www.roblox.com/chat/css/party_leader.css"/><link rel="Stylesheet" type="text/css" href="/web/20110210222513cs_/http://www.roblox.com/chat/css/party_invite.css"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta http-equiv="Content-Language" content="en-us"/><meta name="author" content="ROBLOX Corporation"/><meta id="ctl00_metadescription" name="description" content="<?php echo htmlspecialchars($_GET["game"]); ?>, a Free Game - ROBLOX
<?php echo htmlspecialchars($_GET["game"]); ?>
<?php echo htmlspecialchars($_GET["game"]); ?> is a free game on Ectune"/><meta id="ctl00_metakeywords" name="keywords" content="virtual good <?php echo htmlspecialchars($_GET["game"]); ?>, a Free Game - ROBLOX, ROBLOX <?php echo htmlspecialchars($_GET["game"]); ?>, a Free Game - ROBLOX"/>


</script>
<link href="/CSS/BASE/ALLCSS.css" type="text/css" rel="stylesheet"/></head>





        <!-- Used for execution that must happen before page load -->
    

    
    
    
    
    <div id="MasterContainer">
     <!-- Begin chat bar -->
        <div style="width: 100%">
        
        </div>
    <!-- End chat bar -->
    
        <div id="Container">
            <div id="HeaderContainer">
            
    <div id="AdvertisingLeaderboard">
        
            <div id="ctl00_cphBannerAd_ItemBannerAd_OutsideAdPanel" class="AdPanel">
	
            <iframe id="ctl00_cphBannerAd_ItemBannerAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="90" src="https://web.archive.org/web/20110210222513if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Item_Top_728x90&amp;format=banner&amp;v=2" width="728"></iframe>
            
</div>
            <a id="ctl00_cphBannerAd_ItemBannerAd_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphBannerAd$ItemBannerAd$ReportAdButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">[ report ]</a>
              <script type="text/javascript">
			    $(function()
                {
	                $(".AdPanel").css("z-index", 9998);
                });
            </script>
        
    

    </div>

             
            <div id="Header">
                <div id="Banner">
                    
                            

<div id="Options">
	<div id="Authentication">
		    <?php
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                        echo '<span id="AuthenticationBannerSpan" style="width: 40px;">
                        <a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/Login.php">Login</a>
                        </span>';
                }
                
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo '<span id="AuthenticationBannerSpan" style="width: 130px;">
                    <p1>Hi '.htmlspecialchars($_SESSION["username"]).'</p1><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/logout.php">Logout</a>
                    </span>';
                }
                ?>
	</div>
	<div id="Settings"></div>
</div>
                            <a id="Logo" href="/index.php" style="cursor: pointer; border: none;"></a>
                        
                    
                            
<div style="float: right; width: 203px;">
    <a id="ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" text="Sign-up and Play!" href="https://web.archive.org/web/20110210222513/http://www.roblox.com/Games.aspx" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20110210222513im_/http://www.roblox.com/images/Holiday3Button.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" blankurl="http://t1bg.roblox.com/blank-210x40.gif"/></a>


</div>

                        
                </div>
                


    <?php
        require("../important/dropdownNav.php");
        require("../important/navbar.php");
	?>
            </div>
            </div>
            
            
           
            
   
           
           
            <div id="Body">
                
    <!-- The second set of script includes are for optimization (CompositeScript). The 'true' include is declared in PlaceLauncher.ascx -->
    
    
    <div id="ItemContainer">
        <div class="StandardBoxHeader" style="width: 709px;">
            <span class="item-header">
                <a id="ctl00_cphRoblox_FavoriteThisButton2" disabled="disabled" class="favoriteStar_20h tooltip" title="Add This to Your Favorites" style="background-position: 0px 0px;"></a>
                <h1>
                    <?php echo htmlspecialchars($_GET["game"]); ?>
                </h1>
            </span>
        </div>
        <div id="Item" class="StandardBox" style="width: 709px;">
            <div id="Details">
                
                        <div id="placeContainer">
                            <div id="Thumbnail_Place">
                                <a id="ctl00_cphRoblox_AssetThumbnailImage_Place" title="<?php echo htmlspecialchars($_GET["game"]); ?>" onclick="var fn = function() { if (Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dR-U-N%26id%3d30624688' })){tryToDownload('/install/setup.ashx'); logStatistics('playmp'); }return false; }; if (fn()) __doPostBack('ctl00$cphRoblox$AssetThumbnailImage_Place',''); else return false;" style="display:inline-block;height:420px;width:230px;cursor:pointer;"><img src="/images/Games/Games/<?php echo htmlspecialchars($_GET["game"]); ?>.jpg" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="<?php echo htmlspecialchars($_GET["game"]); ?>"/></a>
                                
                            </div>
                            <div id="Actions_Place">
                                <a id="ctl00_cphRoblox_FavoriteThisPlaceButton" disabled="disabled">Favorite</a>
                            </div>
                            <div id="ctl00_cphRoblox_PlayGames" class="PlayGames">
                                <div class="PlaceInfoIcons">
                                    
<span class="PlaceAccessIndicator">
    <span id="ctl00_cphRoblox_PlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="rbx2hide">&nbsp;Friends-only</span></span>
    <span id="ctl00_cphRoblox_PlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="rbx2hide">&nbsp;Friends-only: You are friends</span></span>
    <span id="ctl00_cphRoblox_PlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="rbx2hide">&nbsp;Your Turbo Builders Club or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_PlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://web.archive.org/web/20110210222513/http://www.roblox.com/upgrades/buildersclub.aspx">re-order Turbo Builders Club or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_PlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="rbx2hide">This place is locked because the creator's <a href="/web/20110210222513/http://www.roblox.com/upgrades/buildersclub.aspx">Builders
            Club / Turbo Builders Club </a>has expired. </span></span>
</span>
                                    
                                    
                                    <a class="CopyLockedIcon tooltip" title="Copylocked"></a>
                                    <span class="rbx2hide">Copy Protection: CopyLocked</span>
                                    
                                    
                                    <a class="NoGearIcon tooltip" title="No Gear Allowed"></a>
                                    <span class="rbx2hide">Gear Not Allowed</span>
                                </div>
                                <center>

<div id="PlaceLauncherStatusPanel" style="display: none; width: 300px">
    <div class="modalPopup" style="margin: 1.5em; color: Black; padding: 10px">
        <div id="Spinner" style="float:left;margin:0 1em 1em 0">
            <img id="ctl00_cphRoblox_VisitButtons_rbxPlaceLauncher_Image1" src="/web/20110210222513im_/http://www.roblox.com/images/ProgressIndicator2.gif" alt="Progress" border="0"/></div>
        <div id="Starting" style="display: inline">
            Starting Roblox...</div>
        <div id="Waiting" style="display: none">
            Waiting for a server...</div>
        <div id="Loading" style="display: none">
            A server is loading the game...</div>
        <div id="Joining" style="display: none">
            The server is ready. Joining the game...</div>
        <div id="Error" style="display: none">
            An error occurred. Please try again later.</div>
        <div id="Expired" style="display: none">
            Joining games is temporarily disabled while we upgrade. Please try again soon.</div>
        <div id="GameEnded" style="display: none">
            The game you requested has ended.</div>
        <div id="GameFull" style="display: none">
            The game you requested is currently full. Waiting for an opening...</div>
        <div id="Updating" style="display: none">
            Roblox is updating. Please wait...</div>
        <div id="Updated" style="display: none">
            Requesting a server</div>
       <div style="text-align: center; margin-top: 1em">
            <input type="button" class="Button CancelPlaceLauncherButton" value="Cancel"/>
        </div>
    </div>
</div>



<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display: none;overflow:hidden;width:380px;">
       <div style="padding: 0px 0px 10px 0px; text-align:center;">
        <div class="titleBar">
        Installation Instructions
        </div>
        
        <div id="CancelButton" onclick="return Roblox.Client._onCancel();" class="Button" style="width: 80px; margin: 0px auto;">Close Window</div>
    </div>
</div>
<iframe id="downloadInstallerIFrame" src="/Games/Game.php?game=<?php echo htmlspecialchars($_GET["game"]); ?>" style="visibility:hidden; height: 0px">
</iframe>

<div id="pluginObjDiv" style="height: 0px">
</div>


<div id="ctl00_cphRoblox_VisitButtons_FancyButtons" style="overflow: hidden; width: 400px;">
	
    <div id="ctl00_cphRoblox_VisitButtons_VisitMPButton" style="display: inline; width: 10px;">
        <a id="ctl00_cphRoblox_VisitButtons_MultiplayerVisitButton" class="ImageButton MultiplayerVisit" onclick="$('# ctl00_cphRoblox_VisitButtons_ClientInstaller').click(); $('#GuestModePrompt').modal({overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: &quot;#000&quot; }}); return false; "></a>
    </div>
    
    
    

</div>
<script language="javascript">
       
    function redirectPlaceLauncherToLogin() {
        var baseLoginString = "/login/default.aspx?ReturnUrl=";
        var returnUrl = "/item.aspx?seoname=R-U-N&id=30624688";
        returnUrl = encodeURIComponent(returnUrl);
        location.href = baseLoginString + returnUrl;
    }

    $(function() {
    
        if (Roblox.Client.isIDE())
            $('#ctl00_cphRoblox_VisitButtons_EditButton').show();
    });
</script>

    <div id="GuestModePrompt" class="GuestModePromptModal" style="width:360px; display:none">

        <div id="Div1" class="simplemodal-close">
            <a id="ctl00_cphRoblox_VisitButtons_A2" class="ImageButton closeBtnCircle_35h" style="cursor: pointer; margin-left:355px; position:absolute; top:-20px; left:-10px"></a>
        </div>
                    
        <div id="GuestDialog" style="height: 275px; background-color: white;">
       
            <div style="clear:both; height:25px;"></div>
            <div id="CreateAccountButton" onclick="redirectPlaceLauncherToLogin();return false;">
                <a id="ctl00_cphRoblox_VisitButtons_A1" class="ImageButton GetAFreeAccount" style="cursor: pointer; margin-left:20px;"></a>
            </div>
           
           <div> 
                <ul class="GuestModePromptText">
                    <li><b>Customize your Character</b></li>
                    <li><b>Earn Tickets</b></li>
                    <li><b>Did we mention it's Free?</b></li>
                </ul>
            </div>
                    
            <div id="ctl00_cphRoblox_VisitButtons_PlayAsGuestMPButton" style="display: inline; margin-left:25px;" onclick="$.modal.close('.GuestModePromptModal'); if (Roblox.Client.WaitForRoblox(function() { RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', 30624688) })) { tryToDownload('/install/setup.ashx'); logStatistics('playasguestmp'); } return false;  ">
                <a class="GreenButton"><span>Play As Guest</span></a>
           </div>
            
            <div>
               <div style="clear: both; height: 20px;"></div> 
                
                <b><h3 style="margin-left: 20px;">Already have an account?</h3></b>

                <div id="ctl00_cphRoblox_VisitButtons_LoginButton" style="display: inline; margin-left: 15px;" onclick="redirectPlaceLauncherToLogin();return false;">
                    <a class="GreenButton" style=""><span>Log In</span></a>
                </div>   
            </div>
        </div>
    </div>

    <div id="ctl00_cphRoblox_VisitButtons_GetBCForGroupBuilding" class="modalPopup" style="display: none;">
    <div id="ctl00_cphRoblox_VisitButtons_Panel3">
	
        <div style="text-align: center;">
            <img src="/web/20110210222513im_/http://www.roblox.com/images/BuildersClub-110x110.png" alt="BC Beta Feature" style="margin-left: 35px"/>
            <p style="margin-bottom: 10px">
                This is a <span style="color: #7F7FFF; font-style:italic; font-weight: bold">BC Beta</span> Feature.<br/>
                Group Building requires a <br/>Builders Club Membership.</p>
            <div style="text-align: center; margin: 5px">
                <input type="submit" name="ctl00$cphRoblox$VisitButtons$Button3" value="Get BC!" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$VisitButtons$Button3&quot;, &quot;&quot;, true, &quot;&quot;, &quot;Upgrades/BuildersClub.aspx&quot;, false, false))" id="ctl00_cphRoblox_VisitButtons_Button3" class="MediumButton" style="cursor: pointer"/>
                <input type="submit" name="ctl00$cphRoblox$VisitButtons$Button4" value="Cancel" onclick="$find('myBehaviorMaster6').hide(); return false;WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$VisitButtons$Button4&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_VisitButtons_Button4" class="MediumButton" style="cursor: pointer"/>
            </div>
        </div>
    
</div>
</div>
<input type="hidden" name="ctl00$cphRoblox$VisitButtons$HiddenField7" id="ctl00_cphRoblox_VisitButtons_HiddenField7"/>
<input type="hidden" name="ctl00$cphRoblox$VisitButtons$HiddenField8" id="ctl00_cphRoblox_VisitButtons_HiddenField8"/>
<input type="hidden" name="ctl00$cphRoblox$VisitButtons$HiddenField9" id="ctl00_cphRoblox_VisitButtons_HiddenField9"/>

</center>
                                
                            </div>
                            
                            <div id="ctl00_cphRoblox_Div1" class="BadgeStats" style="margin-top: 10px;">
                                
<div id="BadgeStatsHeader" class="StandardTabWhite"><span>Badges</span></div>
<div id="BadgeStats" class="StandardBoxWhite" style="font-size: 10px">
    
            <table border="0">
        
            <tr>
                <td>
                    <a id="ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl01_AssetThumbnailHyperLink" title="Meet the owner" href="/Badges/?badge= Meet the owner" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20110210222513im_/http://t4bg.roblox.com/22b6284fe835cd493e7a3a20cb43d6e7" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Meet the owner" blankurl="http://t6bg.roblox.com/blank-75x75.gif"/></a> 
                </td>
                <td valign="top">       
                    <a id="ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl01_AssetNameHyperLink" title="click to view" href="/Badges/?badge=Meet the owner">Meet the owner</a>      
                    <br/><br/>
                    Meet him!
                </td>
                <td valign="top">
                    Rarity: 00.0% (Impossible)<br/>
                    Won yesterday: 0<br/>
                    Won ever: 423
                </td>
            </tr>
        
            <tr>
                <td>
                    <a id="ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl02_AssetThumbnailHyperLink" title="Her0z Badge. YOU MET ME!!!" href="/web/20110210222513/http://www.roblox.com/Her0z-Badge-YOU-MET-ME-item?id=44796761" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20110210222513im_/http://t3bg.roblox.com/76bc5f73344e4ca5ed7497722da94a1e" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Her0z Badge. YOU MET ME!!!" blankurl="http://t6bg.roblox.com/blank-75x75.gif"/></a> 
                </td>
                <td valign="top">       
                    <a id="ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl02_AssetNameHyperLink" title="click to view" href="/web/20110210222513/http://www.roblox.com/Her0z-Badge-YOU-MET-ME-item?id=44796761">Her0z Badge. YOU MET ME!!!</a>      
                    <br/><br/>
                    Meet Me!
                </td>
                <td valign="top">
                    Rarity: 00.3% (Impossible)<br/>
                    Won yesterday: 16<br/>
                    Won ever: 171
                </td>
            </tr>

        
            </table>
        

</div>      


                            </div>
                        </div>
                    
                <!-- details -->
                <div id="Summary" style="float: right;">
                    <h3>
                        ROBLOX Place
                    </h3>
                    <div>
                    <b></b>
                    
                    
                    
                    <div class="clear"></div>
                    </div>
                    <!-- timer -->
                    
                    <div id="Creator" class="Creator section">
                        <div class="Avatar">
                            
                            <a id="ctl00_cphRoblox_AvatarImage" class="tooltip-right" title="Builderman" href="My/Home.php" style="display:inline-block;cursor:pointer;"><img src="/images/NewFrontPageGuy.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Builderman" blankurl="http://t6bg.roblox.com/blank-100x100.gif"/></a>
                        </div>
                        <span class="label creator-name">Creator:</span>
                        <a id="ctl00_cphRoblox_CreatorHyperLink" href="/My/Home.php">Builderman</a>
                    </div>
                    <div class="item-detail">
                        <div>
                            <span class="label">Created:</span>
                            12/12/2020
                        </div>
                        <div id="LastUpdate">
                            <span class="label">Updated:</span>
                            Just now</div>
                        <div id="Favorited">
                            <span class="label">Favorited:</span>
                            0 times</div>
                        
                        
                        <div id="ctl00_cphRoblox_VisitedPanel" class="Visited">
                            <span class="label">Visited:</span>
                            0 times
                        </div>
                    </div>
                    <div id="Genres" class="box section">
                        <div id="ctl00_cphRoblox_Genres">
	
                            <div class="head label">Genres:</div>
                            <div class="body">
                                
                                
                                <div id="ctl00_cphRoblox_Panel5">
		
                                    <img id="ctl00_cphRoblox_Image14" class="GamesInfoIcon" src="" alt="There was no image" border="0"/>
                                    <a href="/Games/">All</a>
                                
	</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        
</div>
                    </div>
                    <div id="ctl00_cphRoblox_GearAttributes" class="box section">
	
                        <div style="margin-top: 5px; margin-bottom: 5px;">
                            <div class="head label">Allowed Gear Types:</div>
                            <div class="body">
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            </div>
                        </div>
                    
</div>
                    
                    <div id="ctl00_cphRoblox_DescriptionPanel" class="box section">
	
                        <div class="head label">
                            Description:</div>
                        <div class="Description body">
                            <?php echo htmlspecialchars($_GET["game"]); ?> is a free game in roblox. Please report any nsfw games to an admin</div>
                    
</div>
                    
                        
                    
                    <div class="ReportAbuse">
                        <div id="ctl00_cphRoblox_AbuseReportButton1_AbuseReportPanel" class="ReportAbusePanel">
	
    <span class="AbuseIcon"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseIconHyperLink" href="#"><img src="/images/abuse.PNG?v=2" alt="Report Abuse" border="0"/></a></span>
    <span class="AbuseButton"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseTextHyperLink" href="#">Report Abuse</a></span>

</div>
                    </div>
                    
                </div>
                
                
                 
                <div class="clear">
                </div>
            </div>
            
            
            <div style="margin-top: 10px;">
                <div>
                    
<div class="StandardTabWhite"><span>Recommendations</span></div>
<div class="StandardBoxWhite">
    <div style="font-size: x-small;">Here are some other free games that we think you might like.</div>
    <table id="ctl00_cphRoblox_AssetRec_dlAssets" cellspacing="0" align="Center" border="0" height="200" width="600">
	<tr>

	</tr>
</table>
    
</div>
                </div>
            </div>
            <div style="width: 703px; color: #000000; margin-bottom: 10px;">
                <a name="tabRegion">&nbsp;</a>
                <div id="ctl00_cphRoblox_TabbedInfo" class="tab_white_31h_container">
	<div id="ctl00_cphRoblox_TabbedInfo_header">
		<span id="__tab_ctl00_cphRoblox_TabbedInfo_GamesTab">
                            <h3 class="ajax_tab_label">
                                Games</h3>
                        </span><span id="__tab_ctl00_cphRoblox_TabbedInfo_CommentaryTab">
                            <h3 class="ajax_tab_label">
                                Commentary</h3>
                        </span>
	</div><div id="ctl00_cphRoblox_TabbedInfo_body">
		<div id="ctl00_cphRoblox_TabbedInfo_GamesTab" style="display:none;">
			
                            <div id="ctl00_cphRoblox_TabbedInfo_GamesTab_RunningGamesUpdatePanel">
				
                                    <div style="padding:5px;text-align:center;"><a id="ctl00_cphRoblox_TabbedInfo_GamesTab_LoadGamesButton" class="GreenButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$TabbedInfo$GamesTab$LoadGamesButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span>Load running games</span></a></div>
                                    
                                
			</div>
                        
		</div><div id="ctl00_cphRoblox_TabbedInfo_CommentaryTab" style="display:none;">
			
                            <div id="ctl00_cphRoblox_TabbedInfo_CommentaryTab_CommentsPane_CommentsUpdatePanel">
				
        <div class="CommentsContainer">
            <a id="ctl00_cphRoblox_TabbedInfo_CommentaryTab_CommentsPane_LoadCommentsButton" class="GreenButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$TabbedInfo$CommentaryTab$CommentsPane$LoadCommentsButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span>Load comments (0)</span></a>
            
            
            
        </div>

    
			</div>

                        
		</div>
	</div>
</div>
                <script type="text/javascript">
                    var commentsLoaded = false;
                    function LoadComments(sender, eventargs) {
                        if (!commentsLoaded) {
                            __doPostBack('ctl00$cphRoblox$TabbedInfo$CommentaryTab$CommentsPane$LoadCommentsButton','');
                            commentsLoaded = true;
                        }
                    }
                </script>
            </div>
            
            <div id="FreeGames">
                <ul class="freegames" style="list-style: none; text-align: center;"><li style="display: inline; margin-right: 10px;"><a href="/Games/" title="Wild West games">Wild West games</a></li><li style="display: inline; margin-right: 10px;"><a href="/Games/" title="War games">War games</a></li><li style="display: inline; margin-right: 10px;"><a href="/Games/" title="Skate Park games">Skate Park games</a></li><li style="display: inline; margin-right: 10px;"><a href="/Games/" title="Tutorial games">Tutorial games</a></li></ul></div>
        </div>
        <div class="Ads_WideSkyscraper">
            
            <div id="ctl00_cphRoblox_adsWideSkyscraper_OutsideAdPanel" class="AdPanel">
	
            <iframe id="ctl00_cphRoblox_adsWideSkyscraper_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="600" src="/web/20110210222513if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Item_Right_160x600&amp;format=skyscraper&amp;v=2" width="160"></iframe>
            
</div>
            <a id="ctl00_cphRoblox_adsWideSkyscraper_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$adsWideSkyscraper$ReportAdButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">[ report ]</a>
              <script type="text/javascript">
			    $(function()
                {
	                $(".AdPanel").css("z-index", 9998);
                });
            </script>
        
    

        </div>
        <div class="clear"></div>
    </div>
    <div id="ctl00_cphRoblox_ItemPurchasePopupPanel" class="modalPopup" style="display: none">
	
        <div id="ctl00_cphRoblox_ItemPurchasePopupUpdatePanel">
		
                
            
	</div>
    
</div>
    <div id="ctl00_cphRoblox_SalePriceConfirmPopupPanel" class="modalPopup" style="display: none">
	
        <div id="ctl00_cphRoblox_UpdatePanel1">
		
                <div id="RobloxOffer">
                    <h2>
                        <font color="red">Warning!</font></h2>
                    <p>
                        You are trying to sell this item for <b>
                            ERROR: No P2P offer price</b> ROBUX.</p>
                    <p>
                        This item normally sells for around <b>
                            </b> ROBUX.</p>
                    <p>
                        If you want, ROBLOX will purchase this item from you instantly for <b>
                            0</b> ROBUX.</p>
                    <p>
                        Minus marketplace fees, your profit would be: <b>
                            ERROR: No P2P offer price</b> ROBUX</p>
                    <p>
                        <input type="submit" name="ctl00$cphRoblox$CancelAttemptedSale" value="Cancel Sale" onclick="$find('myBehavior2').hide();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$CancelAttemptedSale&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_CancelAttemptedSale" class="MediumButton"/></p>
                    <p>
                        <input type="submit" name="ctl00$cphRoblox$SellItemToROBLOX" value="Sell to ROBLOX" onclick="document.getElementById('RobloxOffer').style.display = 'none';document.getElementById('ProcessROBLOXPurchase').style.display = 'block';WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$SellItemToROBLOX&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_SellItemToROBLOX" class="MediumButton"/></p>
                </div>
                <div id="ProcessROBLOXPurchase">
                    <div id="Div8" class="processingMgs">
                        <img id="ctl00_cphRoblox_Image22" src="/web/20110210222513im_/http://www.roblox.com/images/ProgressIndicator2.gif" alt="Processing..." align="middle" border="0"/>&nbsp;&nbsp; Processing transaction
                        ...
                    </div>
                </div>
            
	</div>
    
</div>
    <input type="hidden" name="ctl00$cphRoblox$HiddenField1" id="ctl00_cphRoblox_HiddenField1"/>
    <input type="hidden" name="ctl00$cphRoblox$HiddenField2" id="ctl00_cphRoblox_HiddenField2"/>
    <input type="hidden" name="ctl00$cphRoblox$HiddenField3" id="ctl00_cphRoblox_HiddenField3"/>
    
    






<div id="ctl00_cphRoblox_CreateSetPanelDiv" class="createSetPanelPopup">
	
        
      
</div>

    <script type="text/javascript" language="javascript">
        function UpdateSets(assetSetItemId, updateAllSets)
        {
            $.get(
                "/Sets/SetHandler.ashx?rqtype=getnewestversion&assetSetItemId=" + assetSetItemId + (updateAllSets ? "&allsets=true" : ""),
                function()
                {
                    $('#ctl00_cphRoblox_UpdateSet').hide("slow");
                    if (updateAllSets)
                    {
                        $('#ctl00_cphRoblox_updateSetsDiv').slideToggle("slow");
                    }
                });
        }
        $(document).ready(function()
        {
            $('.SetAddButton').click(function()
            {
                var assetId = $(this).parent().parent().attr('id').replace('setList_', '');
                var setId = $(this).children('.setId')[0].value;
                var setDivId = 'set_' + setId + '_' + assetId;
                var imgId = "waiting" + setDivId;
                $(setDivId).append("<img src='/images/spinners/spinner16x16.gif' id='" + imgId + "'");
                $.ajax(
                {
                    type: "GET",
                    async: true,
                    cache: false,
                    timeout: 50000,
                    url: "/Sets/SetHandler.ashx?rqtype=addtoset&assetId=" + assetId + "&setId=" + setId,
                    success: function(data)
                    {
                        if (data !== null)
                        {
                            // Remove that set from the list of available sets
                            $('#' + setDivId).removeClass('SetAddButton');
                            $('#' + setDivId).addClass('SetAddButtonAlreadyContainsItem');
                            $('#' + setDivId).unbind('click');
                            // Remove the spinner
                            $('#' + imgId).remove();
                        }
                    },
                    failure: function(data)
                    {
                        if (data !== null)
                        {
                            //alert("failure");
                        }
                    }
                });
            });
        });
	</script>  

            </div>
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_rbxFooter_PrivacyHyperLink" href="/web/20110210222513/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_AdvertiseHyperLink" href="https://web.archive.org/web/20110210222513/http://sales.roblox.com/">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_ContactHyperLink" href="/web/20110210222513/http://www.roblox.com/info/ContactUs.aspx">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AboutHyperLink" href="/web/20110210222513/http://www.roblox.com/info/About.aspx">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_FreeGamesHyperLink" href="/web/20110210222513/http://www.roblox.com/FreeGames.aspx">Free Games</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_JobsHyperLink" href="https://web.archive.org/web/20110210222513/http://jobs.roblox.com/">Jobs</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20110210222513/http://www.roblox.com/town-and-city-games" title="Town and City Games">Town and City</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/medieval-games" title="Fantasy Games">Fantasy</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/ninja-games" title="Ninja Games">Ninja</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/scary-games" title="Scary Games">Scary</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/pirate-games" title="Pirate Games">Pirate</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/adventure-games" title="Adventure Games">Adventure</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/sports-games" title="Sports Games">Sports</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/funny-games" title="Funny Games">Funny</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games">Wild West</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/war-games" title="War Games">War</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/skatepark-games" title="Skate Park Games">Skate Park</a>&nbsp;|&nbsp;<a href="/web/20110210222513/http://www.roblox.com/gametutorials-games" title="Tutorial Games">Tutorial</a></div>
    </div>
    <p class="Legalese">
        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="ctl00_rbxFooter_hlRobloxCorporation" href="/web/20110210222513/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2011. Patents pending.
        <br/>
        ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,<br/> and no resemblance to the products of these companies is intended.<br/>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="/web/20110210222513/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.
        <br/>
    </p>
</div>
   
        </div>
    </div>
    
    
        <script src="https://web.archive.org/web/20110210222513js_/http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">            _uacct = "UA-486632-1"; _udn = "roblox.com"; urchinTracker(); __utmSetVar('Visitor/Spider');</script>
    

    
    
    

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {RobloxLaunch._LaunchGamePage = "/Install/Download.aspx";Sys.Application.remove_load(fn);};Sys.Application.add_load(fn);})();__utmSetVar('ROBLOX_Home_Skin_Left_400x1180');__utmSetVar('ROBLOX_Home_Skin_Right_400x1180');__utmSetVar('Roblox_Item_Top_728x90');Roblox.Controls.Image.ErrorUrl = "https://web.archive.org/web/20110210222513/http://www.roblox.com/Analytics/BadHtmlImage.ashx";Roblox.Controls.Image.IE6Hack($get('ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl01_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl02_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl03_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl04_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl05_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl06_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl07_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl08_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl09_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl10_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl11_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl12_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl13_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_PlaceBadgeStats_BadgeRepeater_ctl14_AssetThumbnailHyperLink'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_AvatarImage'));__utmSetVar('Roblox_Item_Right_160x600');Sys.Application.initialize();
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"ctl00_cphRoblox_VisitButtons_HiddenField7","DropShadow":true,"OkControlID":"ctl00_cphRoblox_VisitButtons_HiddenField8","PopupControlID":"ctl00_cphRoblox_VisitButtons_GetBCForGroupBuilding","dynamicServicePath":"/item.aspx","id":"myBehaviorMaster6"}, null, null, $get("ctl00_cphRoblox_VisitButtons_HiddenField9"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.TabPanel, {"headerTab":$get("__tab_ctl00_cphRoblox_TabbedInfo_GamesTab")}, null, {"owner":"ctl00_cphRoblox_TabbedInfo"}, $get("ctl00_cphRoblox_TabbedInfo_GamesTab"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.TabPanel, {"headerTab":$get("__tab_ctl00_cphRoblox_TabbedInfo_CommentaryTab")}, null, {"owner":"ctl00_cphRoblox_TabbedInfo"}, $get("ctl00_cphRoblox_TabbedInfo_CommentaryTab"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.TabContainer, {"activeTabIndex":0,"clientStateField":$get("ctl00_cphRoblox_TabbedInfo_ClientState")}, {"activeTabChanged":LoadComments}, null, $get("ctl00_cphRoblox_TabbedInfo"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"ctl00_cphRoblox_HiddenField1","DropShadow":true,"OkControlID":"ctl00_cphRoblox_HiddenField2","PopupControlID":"ctl00_cphRoblox_ItemPurchasePopupPanel","dynamicServicePath":"/item.aspx","id":"myBehavior1"}, null, null, $get("ctl00_cphRoblox_HiddenField3"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"ctl00_cphRoblox_HiddenField1","DropShadow":true,"OkControlID":"ctl00_cphRoblox_HiddenField2","PopupControlID":"ctl00_cphRoblox_SalePriceConfirmPopupPanel","dynamicServicePath":"/item.aspx","id":"myBehavior2"}, null, null, $get("ctl00_cphRoblox_HiddenField3"));
});
//]]>
</script>
</form>
    
    
</body>
</html>