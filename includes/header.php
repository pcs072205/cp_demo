		
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<img src="favicon.png">
							GoldMate Bussiness Solutions Pvt.Ltd
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
					
						<?php
						
						$d1=date('Y-m-d', strtotime('+1 days'));
						$d2 = date('Y-m-d', strtotime('-31 days'));
											 
											 
						$selectqryad="SELECT * FROM `dgmnwb`.`advsal` WHERE `asStatus` != 'Approved' AND `asrdate` BETWEEN '$d2' AND '$d1' ORDER BY `asrdate` DESC";
						
						$resultad=mysqli_query($dbconnection, $selectqryad);
													$numad = mysqli_num_rows($resultad);
													
													$i=0;
													
													print("									
						<li class='grey dropdown-modal'>
							<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
								<i class='ace-icon fa fa-money'></i>
								<span class='badge badge-grey'>$numad</span>
							</a>

							<ul class='dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close'>
								<li class='dropdown-header'>
									<i class='ace-icon fa fa-check'></i>
									$numad Salary/TA Request to Approve
								</li>

								<li class='dropdown-content'>
									<ul class='dropdown-menu dropdown-navbar'>");
													
													while($i < $numad && $i < 4)
													{
														$rowad = mysqli_fetch_array($resultad, MYSQLI_ASSOC);
														$adsID = $rowad["adsID"];
														$asEmpId = $rowad['asEmpId'];
														$asBrId = $rowad['asBrId'];
														$asAmt = $rowad['asAmt'];
														$asAmtWd = $rowad['asAmtWd'];
														$asMonth = $rowad['asMonth'];
														$asYear = $rowad['asYear'];
														
														$asRqFor = $rowad['asRqFor'];
														
														
														$asReason = $rowad['asReason'];
														$asrdate = $rowad['asrdate'];
														$asApAmt = $rowad['asApAmt'];
														$asBrAp = $rowad['asBrAp'];
														$asSuAdAp = $rowad['asSuAdAp'];
														$asStatus = $rowad['asStatus'];
														
														
														$empdetails = "";
														$brdetails="";
														$i++;
														
														
															$sqlsube="SELECT eName FROM emp WHERE etblid=$asEmpId";

															if ($resultsube=mysqli_query($dbconnection,$sqlsube))
															{
															  // Fetch one and one row
															  while ($rowsube=mysqli_fetch_row($resultsube))
																{
																$empdetails="$rowsube[0]";
																}
															}
															
															$sqlsub="SELECT bName,bLocation FROM branch WHERE btblid=$asBrId";

															if ($resultsub=mysqli_query($dbconnection,$sqlsub))
															{
															  // Fetch one and one row
															  while ($rowsub=mysqli_fetch_row($resultsub))
																{
																$brdetails="$rowsub[0]";
																}
															}
															
															
						print("									
									<li>
											<a href='adsal-View-Single.php?refID=$adsID'>
												<div class='clearfix'>
													<span class='pull-left'>
														<i class='btn btn-xs no-hover btn-inverse fa fa-money'></i>
														$empdetails ($brdetails)
														<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<i class='ace-icon fa fa-inr'></i>
														<span>$asRqFor - $asAmt</span>
													</span>
													
													
												</div>
											</a>
										</li>
										");
													}
													
									print("</ul>
								</li>

								<li class='dropdown-footer'>
									<a href='adsal-View-1-NA.php'>
										See All Salary Requests
										<i class='ace-icon fa fa-arrow-right'></i>
									</a>
								</li>
							</ul>
						</li>
						");
						
						
						
						$selectqrylv="SELECT * FROM `dgmnwb`.`elapp` WHERE `laDrApp` = '0' AND `laDate` BETWEEN '$d2' AND '$d1' ORDER BY `laDate` DESC";
						
						$resultlv=mysqli_query($dbconnection, $selectqrylv);
													$numlv = mysqli_num_rows($resultlv);
													
													$j=0;
													
													print("									
						<li class='green dropdown-modal'>
							<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
								<i class='ace-icon fa fa-font icon-animated-vertical'></i>
								<span class='badge badge-success'>$numlv</span>
							</a>

							<ul class='dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close'>
								<li class='dropdown-header'>
									<i class='ace-icon fa fa-check'></i>
									$numlv Leave Applications
								</li>

								<li class='dropdown-content'>
									<ul class='dropdown-menu dropdown-navbar'>");
													
													while($j < $numlv && $j < 4)
													{
														$rowlv = mysqli_fetch_array($resultlv, MYSQLI_ASSOC);
														$laId = $rowlv["laId"];
														$laEmpId = $rowlv['laEmpId'];
														$laBrId = $rowlv['laBrId'];
														$laFrom = $rowlv['laFrom'];
														$laTo = $rowlv['laTo'];
														$laNoDs = $rowlv['laNoDs'];
														$laRea = $rowlv['laRea'];
														
														$laRema = $rowlv['laRema'];
														
														
														$laDate = $rowlv['laDate'];
														$laBrApp = $rowlv['laBrApp'];
														$laDrApp = $rowlv['laDrApp'];
														
														
														
														$empdetails = "";
														$brdetails="";
														$j++;
														
														
															$sqlsube="SELECT eName FROM emp WHERE etblid=$laEmpId";

															if ($resultsube=mysqli_query($dbconnection,$sqlsube))
															{
															  // Fetch one and one row
															  while ($rowsube=mysqli_fetch_row($resultsube))
																{
																$empdetails="$rowsube[0]";
																}
															}
															
															$sqlsub="SELECT bName,bLocation FROM branch WHERE btblid=$laBrId";

															if ($resultsub=mysqli_query($dbconnection,$sqlsub))
															{
															  // Fetch one and one row
															  while ($rowsub=mysqli_fetch_row($resultsub))
																{
																$brdetails="$rowsub[0]";
																}
															}
															
															
						print("		<li>
											<a href='appleave-View-Single-Br.php?refID=$laId'>
												<div class='clearfix'>
													<span class='pull-left'>
														<i class='btn btn-xs no-hover btn-inverse fa fa-calendar'></i>
														$empdetails ($brdetails)
														<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														
														<span>$laFrom to $laTo ($laNoDs D) </span>
													</span>
													
													
												</div>
											</a>
										</li>							
									
										");
													}
													
									print("</ul>
								</li>

								<li class='dropdown-footer'>
									<a href='appleave-View-1-NA.php'>
										See All Leave Applications
										<i class='ace-icon fa fa-arrow-right'></i>
									</a>
								</li>
							</ul>
						</li>
						");
						
						
						

								
									
								$ndatech = date('Y-m-d');	
								$naudbr = $uebtblid;								
								$selectqry="SELECT * FROM `dgmnwb`.`notify` WHERE `nexpdate` >=  '$ndatech' AND (`naud` = 0 OR `naud` = $naudbr) ORDER BY `nexpdate` ASC";
													
								$result=mysqli_query($dbconnection, $selectqry);
								$num = mysqli_num_rows($result);
								
								print("
						<li class='purple dropdown-modal'>
							<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
								<i class='ace-icon fa fa-bell icon-animated-bell'></i>
								<span class='badge badge-important'>$num</span>
							</a>

							<ul class='dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close'>
								<li class='dropdown-header'>
									<i class='ace-icon fa fa-exclamation-triangle'></i>
									$num New Notifications
								</li>
								
								<li class='dropdown-content'>
									<ul class='dropdown-menu dropdown-navbar navbar-pink'>
								");
													
								$i=0;
								while($i < $num && $i < 4)
								{
									$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
									$nid = $row["nid"];
									$nsubj = $row['nsubj'];
									$nmatter = $row['nmatter'];
									$nremark = $row['nremark'];
									$nexpdate = $row['nexpdate'];
									$ndate = $row['ndate'];
									$nemp = $row['nemp'];
									$nbranch = $row['nbranch'];
									$arr2 = str_split($nexpdate, 5);

									print("
									
									<li>
											<a href='notify-View-Single.php?refID=$nid'>
												<div class='clearfix'>
													<span class='pull-left'>
														<i class='btn btn-xs no-hover btn-pink fa fa-comment'></i>
														$nsubj
													</span>
													<span class='pull-right badge badge-info'>$arr2[1]</span>
													
												</div>
											</a>
										</li>
									
									");
									
									$i++;
								}
								print("
									
									</ul>
								</li>
								<li class='dropdown-footer'>
									<a href='notify-View.php'>
										See all notifications
										<i class='ace-icon fa fa-arrow-right'></i>
									</a>
								</li>
							</ul>
						</li>
									
									");
								?>
														
								
						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<?php
								$refID = $uEmail;
								$qqselpropic="SELECT * FROM tblpropic WHERE ppuserID='$refID'";
													$rrppropic=mysqli_query($dbconnection,$qqselpropic);
													$num = mysqli_num_rows($rrppropic);
													
													$i=0;
															while($i < $num)
															{
																$rowppic = mysqli_fetch_array($rrppropic, MYSQLI_ASSOC);
																$ppuserID = $rowppic["ppuserID"];
																$ppFileName = $rowppic["ppFileName"];
																$ppFileSize = $rowppic["ppFileSize"];
																$ppFileType = $rowppic["ppFileType"];
																$i++;
																//if(strcmp($ppFileName,""))
																//print("<img placeholder='' height='100%' width='100%'  src='propics/$ppFileName' >");
																if($ppFileSize==0)
																{
																	echo "<img class='nav-user-photo' alt='Users's Avatar' id='avatar2' src='assets/images/avatars/profile-pic.jpg' />";
																}
																else
																{
																	echo "<img class='nav-user-photo' alt='Users's Avatar' id='avatar2' src='$ppFileName' />";

																}
															}
															?>
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo "$ueName"; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>
								

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>