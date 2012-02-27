<div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
								<div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                {$post -> title}
                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="{$base_url}images/nodame/PostDateIcon.png" width="18" height="19" alt="" />
                                                {$post -> date_created}
                                                 | <img class="art-metadata-icon" src="{$base_url}images/nodame/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <a href="{$view_profile}">{$post -> author_name}</a> <!--<a href="#" title="View user profile.">{$contact -> name}</a>-->
                                            </div>
											<hr size=3>
                                        </div>
                                        <div class="art-PostContent">
                                                <p>{$post -> content}</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
       
										<br>
                        </div>   {$back_to_posts}
                        		<div class="cleared">
                        			
                        		</div>
                            </div> <!--end art-post-body -->
						</div>
					</div>  
