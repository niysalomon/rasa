<section id="hire-sec">
        <div class="overlay">
            <div class="container">
                <div class="row text-center pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h1>JOIN US</h1>
                        <p>Nibyigiciro kandinibyo kwishimira kubana namwe kuko dukunda abashyitsi kandi natwe biradushimisha kubona watwibutse ukaza ngo twifatanye.</p>
                        <br />
                    </div>

                </div>
                <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="col-lg-6  col-md-6  col-sm-6">
                    <?php 
                    include("connection.php");
                    if(isset($_POST['send']))
                    {
                    	$name=$_POST['Name'];
                    	$email=$_POST['Email'];
                    	$subject=$_POST['Subject'];
                    	$message=$_POST['Message'];
                    	$insert="INSERT INTO message(Id,Name,Email,Subject,Message) VALUES (NULL,'$name','$email','$subject','$message')";
                    	$qry=mysqli_query($conn,$insert);
                    if($qry)
                    {
										echo'<p id="foot" align="center"><h3>Thanks to participate!</h3></p>';
									}
									else
									{
										echo'<p align="center"><h3>Message not send!</h3></p>';  
									
									
							}
						}
							?>							
		

                        <form class="form-group" action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="required" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"name="email" required="required" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" required="required" class="form-control" placeholder="subject">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" class="btn custom-btn-one "value="SEND"</a>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" id="footer-sec">
                        <h3><strong>OUR LOCATION </strong></h3>
                        <p>We are located in kigali city center near to marriot hotel  </p>

                        <p><i>ADDRESS :</i> UR NYARUGENGE CAMPUS(KIST)</p>
                        <p><i>E-mail :</i> rasakistkhi@yahoo.com</p>
                        <p><i>PoBOX :</i> 3900 KIGALI.RWANDA</p>
                        <p>&copy; 2018 All Rights Reserved 
                            <br />
                              <a href="niysalomon@gmail.com" style="color:#fff;font-size:11px;" target="_blank">Design by : N.salomon</a> </p>
                              <div class="footer-col col-md-2 col-sm-2 col-xs-2 col-lg-2">
							<a href="dashboard/index1.php" type="button" class="active btn btn-link">
								<span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span> ADMIN</a>
							</div><br />
						
                    </div>

                </div>
            </div>
        </div>
    </section>
							