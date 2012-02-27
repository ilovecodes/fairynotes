<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.3.0.23023
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Artisteer </title>

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body>
<div id="art-page-background-simple-gradient">
    </div>
    <div id="art-page-background-glare">
        <div id="art-page-background-glare-image"></div>
    </div>
    <div id="art-main">
        <div class="art-Sheet">
            <div class="art-Sheet-tl"></div>
            <div class="art-Sheet-tr"></div>
            <div class="art-Sheet-bl"></div>
            <div class="art-Sheet-br"></div>
            <div class="art-Sheet-tc"></div>
            <div class="art-Sheet-bc"></div>
            <div class="art-Sheet-cl"></div>
            <div class="art-Sheet-cr"></div>
            <div class="art-Sheet-cc"></div>
            <div class="art-Sheet-body">
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="#" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Fairies</span></a>
                			<ul>
                				<li><a href="#">kiuch</a></li>
                				<li><a href="#">princepiero</a></li>
                				<li><a href="#">littlepal</a></li>
								<li><a href="#">rdlei</a></li>
								<li><a href="#">iamangelee</a></li>
                			</ul>
                		</li>	
						<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Contact Us</span></a>
                		</li>						
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
                	</ul>
                </div>
                <div class="art-Header">
                    <div class="art-Header-jpeg"></div>
                    <div class="art-Logo">
                        <h1 id="name-text" class="art-Logo-name"><a href="#">fairytail</a></h1>
                    </div>
                </div>
						
                <div class="art-contentLayout">
				{* <--------------------------CONTENT1---------------------------> *}
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                {$title1}
                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="images/PostDateIcon.png" width="18" height="19" alt="" />
                                                Wed, 03/23/2011 - 13:04
                                                 | <img class="art-metadata-icon" src="images/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <a href="#" title="View user profile.">{$contact -> name}</a>
                                            </div>
                                        </div>
                                        <div class="art-PostContent">
                                                <p>{$post1}</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
                                        <div class="art-PostFooterIcons art-metadata-icons">
                                            <img class="art-metadata-icon" src="images/PostCategoryIcon.png" width="18" height="18" alt="" />
                                            Category: <a href="#">{$category1}</a>
                                             | <img class="art-metadata-icon" src="images/PostTagIcon.png" width="18" height="18" alt="" />
                                            Tags: <a href="#" >{$tag1}</a>
                                        </div>
										<br>
										<div class="read">{$readmore}</div>
                        </div>   
                        		<div class="cleared"></div>
                            </div>
							{* <--------------------------END OF CONTENT1---------------------------> *}
							{* <--------------------------CONTENT2---------------------------> *}
							<div class="art-Post-body">
                        <div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                {$title2}
                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="images/PostDateIcon.png" width="18" height="19" alt="" />
                                                Tues, 03/23/2010 - 13:04
                                                 | <img class="art-metadata-icon" src="images/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <a href="#" title="View user profile.">{$contact -> name2}</a>
                                            </div>
                                        </div>
                                        <div class="art-PostContent">
                                                <p>{$post2}</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
                                        <div class="art-PostFooterIcons art-metadata-icons">
                                            <img class="art-metadata-icon" src="images/PostCategoryIcon.png" width="18" height="18" alt="" />
                                            Category: <a href="#">{$category2}</a>
                                             | <img class="art-metadata-icon" src="images/PostTagIcon.png" width="18" height="18" alt="" />
                                            Tags: <a href="#" >{$tag2}</a>
                                        </div>
										<br>
										<div class="read">{$readmore}</div>
                        </div>
                        
                        		<div class="cleared"></div>
                            </div>
							{* <--------------------------END OF CONTENT2---------------------------> *}	
							{* <--------------------------CONTENT3---------------------------> *}
							<div class="art-Post-body">
                        <div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                {$title3}
                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="images/PostDateIcon.png" width="18" height="19" alt="" />
                                                Mon, 03/23/2009 - 13:04
                                                 | <img class="art-metadata-icon" src="images/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <a href="#" title="View user profile.">{$contact -> name3}</a>
                                            </div>
                                        </div>
                                        <div class="art-PostContent">
                                                <p>{$post3}</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
                                        <div class="art-PostFooterIcons art-metadata-icons">
                                            <img class="art-metadata-icon" src="images/PostCategoryIcon.png" width="18" height="18" alt="" />
                                            Category: <a href="#">{$category3}</a>
                                             | <img class="art-metadata-icon" src="images/PostTagIcon.png" width="18" height="18" alt="" />
                                            Tags: <a href="#" >{$tag3}</a>
                                        </div>
										<br>
										<div class="read">{$readmore}</div>
                        </div>
                        
                        		<div class="cleared"></div>
                            </div>
							{* <--------------------------END OF CONTENT3---------------------------> *}
                        </div>
					</div>               							
							{* <--------------------------SIDEBAR---------------------------> *}
                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-body">
                                        <div class="art-BlockHeader">
                                            <div class="art-header-tag-icon">
                                                <div class="t">Login</div>
                                            </div>
                                        </div><div class="art-BlockContent">
                                            <div class="art-BlockContent-tl"></div>
                                            <div class="art-BlockContent-tr"></div>
                                            <div class="art-BlockContent-bl"></div>
                                            <div class="art-BlockContent-br"></div>
                                            <div class="art-BlockContent-tc"></div>
                                            <div class="art-BlockContent-bc"></div>
                                            <div class="art-BlockContent-cl"></div>
                                            <div class="art-BlockContent-cr"></div>
                                            <div class="art-BlockContent-cc"></div>
                                            <div class="art-BlockContent-body">
                                                
                                                      <form action="#" method="post" id="user-login-form"> 
                                                <div><div class="form-item">
                                                 <label for="edit-name">Username: <span class="form-required" title="This field is required.">*</span></label>
                                                 <input type="text" maxlength="60" name="name" id="edit-name" style="width: 95%;" value=""  />
                                                </div>
                                                <div class="form-item">
                                                 <label for="edit-pass">Password: <span class="form-required" title="This field is required.">*</span></label>
                                                 <input type="password" name="pass" id="edit-pass"  maxlength="60"  style="width: 95%;" class="form-text required" />
                                                </div>
                                                <span class="art-button-wrapper">
                                                	<span class="l"> </span>
                                                	<span class="r"> </span>
                                                	<input class="art-button" type="submit" name="login" value="Login" />
                                                </span>
                                                
                                                <div class="cleared"></div>
                                                </div></form>
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div>
                        <div class="art-Block">
                            <div class="art-Block-body">
                                        <div class="art-BlockHeader">
                                            <div class="art-header-tag-icon">
                                                <div class="t">Search</div>
                                            </div>
                                        </div><div class="art-BlockContent">
                                            <div class="art-BlockContent-tl"></div>
                                            <div class="art-BlockContent-tr"></div>
                                            <div class="art-BlockContent-bl"></div>
                                            <div class="art-BlockContent-br"></div>
                                            <div class="art-BlockContent-tc"></div>
                                            <div class="art-BlockContent-bc"></div>
                                            <div class="art-BlockContent-cl"></div>
                                            <div class="art-BlockContent-cr"></div>
                                            <div class="art-BlockContent-cc"></div>
                                            <div class="art-BlockContent-body">
                                                <form method="get" id="searchform" action="#">
                                                <input type="text" value="" name="s" id="s" style="width: 95%;" />
                                                <span class="art-button-wrapper">
                                                	<span class="l"> </span>
                                                	<span class="r"> </span>
                                                	<input class="art-button" type="submit" name="search" value="Search" />
                                                </span>
                                                
                                                </form>
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div>
                        <div class="art-Block">
                            <div class="art-Block-body">
                                        <div class="art-BlockHeader">
                                            <div class="art-header-tag-icon">
                                                <div class="t">Recent Posts</div>
                                            </div>
                                        </div><div class="art-BlockContent">
                                            <div class="art-BlockContent-tl"></div>
                                            <div class="art-BlockContent-tr"></div>
                                            <div class="art-BlockContent-bl"></div>
                                            <div class="art-BlockContent-br"></div>
                                            <div class="art-BlockContent-tc"></div>
                                            <div class="art-BlockContent-bc"></div>
                                            <div class="art-BlockContent-cl"></div>
                                            <div class="art-BlockContent-cr"></div>
                                            <div class="art-BlockContent-cc"></div>
                                            <div class="art-BlockContent-body">
                                                <ul>
                                                  <li><a href="#">{$title1}</a></li>
												  <li><a href="#">{$title2}</a></li>
												  <li><a href="#">{$title3}</a></li>
                                                </ul>
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div>                   
                    </div>
							{* <--------------------------END OF SIDEBAR---------------------------> *}
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    <div class="art-Footer-inner">
                        <div class="art-Footer-text">
                            <p><a href="#">Contact Us</a>&nbsp;|&nbsp;<a href="#">Terms of Use</a>&nbsp;|&nbsp;<a href="#">Trademarks</a>&nbsp;|&nbsp;<a href="#">Privacy Statement</a><br />Copyright &copy; 2012&nbsp;---.&nbsp;All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="art-Footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer">Powered by <a href="http://littlepal.tumblr.com/">Littlepal</a> and <a href="http://www.twitter.com/kiuch">Kiuch Theme</a> created with Piero.</p>
    </div>
    
</body>
</html>
