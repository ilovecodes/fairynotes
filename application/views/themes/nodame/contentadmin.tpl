 <div class="art-contentLayout">
				{* <--------------------------CONTENT1---------------------------> *}
                    <div class="art-content">
                        <div class="art-Post">
							{foreach from=$articles item=article}
                            <div class="art-Post-body">
								<div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                {$article['title']}
                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="images/PostDateIcon.png" width="18" height="19" alt="" />
                                                {$article['date_created']}
                                                 | <img class="art-metadata-icon" src="images/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: {$article['title']} <!--<a href="#" title="View user profile.">{$contact -> name}</a>-->
                                            </div>
											<hr size=3>
                                        </div>
                                        <div class="art-PostContent">
                                                <p>{$post1}</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
       
										<br>
										<div class="read"><a href="post1.php">{$article['view_link']}</a></div>
                        </div>   
                        		<div class="cleared"></div>
                            </div> <!--end art-post-body -->
							{/foreach}
						</div>
						{$pagination}
					</div>  
				