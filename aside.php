 <div class="panel">
                                    <div class="row">
                                    <div class="panel-body pcolor" >
                                    <?php 
                                        include('login.php');
                                    ?>
									</div>
                                    
                                    
                                    </div>
                                    </div>
                                    
                                  
                                    
                                     
                                            <div class="panel-heading text-center">
                                                <h4>Week Programs</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiline="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                <div class="pull-left"><h3 class="panel-title">Monday</h3></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                            <?php
                                                                include('connection.php');
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Monday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <h4 align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</h4>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="pull-left"><h4 class="panel-title">Tuesday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Tuesday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <div class="pull-left"><h4 class="panel-title">Wednesday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Wednesday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                <div class="pull-left"><h4 class="panel-title">Thursday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Thursday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFive">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                <div class="pull-left"><h4 class="panel-title">Friday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Friday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingSix">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                <div class="pull-left"><h4 class="panel-title">Saturday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Saturday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingSeven">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                <div class="pull-left"><h4 class="panel-title">Sunday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Sunday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                   
									
							<br />
									
						</div>
					</div>