				{* <--------------------------CONTENT---------------------------> *}
                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                {$title}
                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="images/PostDateIcon.png" width="18" height="19" alt="" />
                                                {$contact -> date}
                                                 | <img class="art-metadata-icon" src="images/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <a href="#" title="View user profile.">{$contact -> name}</a>
                                            </div>
											<hr size=3>
                                        </div>
										<div class="art-PostContent">
                                                <p>{$post}</p>
												
												<br>
												<br>
												<br>
												<a href="index.php"><b><p>back to posts</p></b></a>
												
                                        </div>										
                        </div>
                        
                        		<div class="cleared"></div>
                            </div>
							{* <--------------------------END OF CONTENT---------------------------> *}
                        </div>