<?php //pre($_SESSION,1);?>
<div class="content-page text-dark">
    <?php //Start content ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Please Select Advance Report Attributes</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
             <?php
                            echo form_open(base_url('Report/Advrepi'));
                        ?>
<!-- 
                  <input type="hidden" name="RP_PRIORITY" value="<?php echo $RP_PRIORITY ; ?>"> 
                  <input type="hidden" name="RP_MODE" value="<?php echo $RP_MODE ; ?>">  -->
                 	    
		<div class="row">
			<div class="col-md-6 m-t-50">
				<div class="panel panel-border panel-teal hi1000 wid1000" align="center">
                   	<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        						<div class="form-group">
	                                                <label class="col-md-2 control-label">Program Type</label>                                           
	                                               
	                                               <!--  <div class="col-md-10"> -->
	                                                       <select class="col-md-10 selectpicker" data-live-search="true" data-style="btn-teal" tabindex="-98" id="EVID" name="EVID" required>
                                           <option selected="true" disabled="disabled" value="">Select Event Type</option> 
                                          s                                      
                             				</select>


                             				<span id="othev" name="othev" style="display:none;">
                             					<!-- OPTIONAL TEXT INPUT IN OTHER SELECT -->

	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Other Event Type</label>
                             				 <div class="col-md-10">
                             				<input type="text" class="form-control max" maxlength="50" name="OTHEREVENT" placeholder="please enter other event type" >
	                                                </div>
	                                            </div>

                             				</span>
	                                                
	                                            </div>				
                        					
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Program Date</label>
	                                                <div class="col-md-10">
	                                                    <input type="date" class="form-control" name="RP_DATE" required 
	                                                    >
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Program Start Time</label>
	                                                <div class="col-md-10">
	                                                    <input type="time" name="RP_TIME" class="form-control" required>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Program End  Time</label>
	                                                <div class="col-md-10">
	                                                    <input type="time" name="RP_TIME_END" class="form-control" required>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Venue</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control max" maxlength="150" name="VENUE">
	                                                </div>
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Organization</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control max" maxlength="100" name="ORGANIZATION">
	                                                </div>

	                                            </div>                                         
	                                            
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Issue</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control max" maxlength="50" name="ISSUE" placeholder="Issue">
	                                                </div>
	                                            </div>   
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Expected Strength</label>
	                                                <div class="col-md-10">
	                                                    <input type="number" class="form-control" name="STRENGTH">
	                                                </div>
	                                                
	                                            </div>  
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Leadership/Supervision</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control max" maxlength="50" name="LEADERSHIP">
	                                                </div>
	                                                
	                                            </div>    
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Note</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control max" maxlength="500" name="NOTE" rows="5"></textarea>
	                                                </div>
	                                            </div>
	                                           <div class="form-group">
	                                                <label class="col-md-2 control-label">Concerned Officer Incharge</label>                                 
	                                                                                           
	                                     <select class="col-md-10 selectpicker" data-live-search="true" data-style="btn-teal" tabindex="-98" required name="OFID" >
                                           <option selected="true" disabled="disabled" value="">Select Concerned OCs Name</option> 
                                                                      
                             				</select>	                                                
	                                            </div>
	                                            <br><br>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">cc to other DOs </label>                                 
	                                                                                           
	                                     <select class="col-md-10 selectpicker" data-live-search="true" data-style="btn-teal" tabindex="-98" required multiple="multiple" name="OTHR_OFIDS[]">
                                           <option selected="true" disabled="disabled" value="" >Select DOs Name</option> 
                                                                             
                             				</select> 	                                                
	                                            </div>
	                                             <br><br>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">cc to other OCs </label>                                 
	                                                                                           
	                                     <select class="col-md-10 selectpicker" data-live-search="true" data-style="btn-teal" tabindex="-98" required multiple="multiple" name="OTHR_OFIDS[]">
                                           <option selected="true" disabled="disabled" value="" >Select OCs Name</option> 
                                                                    
                             				</select> 	                                                
	                                            </div> 
	                                            <br><br>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">cc to ACs </label>                                 
	                                                                                           
	                                     <select id="dolist"class="col-md-10 selectpicker" data-live-search="true" data-style="btn-teal" tabindex="-98" required multiple="multiple" name="OTHR_OFIDS[]">
                                           <option selected="true" disabled="disabled" value="" >Select ACs Name</option> 
                                                                            
                             				</select> 	                                                
	                                            </div> 
	                                            <br><br>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">cc to DCs </label>                                 
	                                                                                           
	                                     <select id="dolist"class="col-md-10 selectpicker" data-live-search="true" data-style="btn-teal" tabindex="-98" required multiple="multiple" name="OTHR_OFIDS[]">
                                           <option selected="true" disabled="disabled" value="" >Select DCs Name</option> 
                                           
                                                                                   
                             				</select> 	                                                
	                                            </div> 


	       										<div class="form-group">
	                                                <label class="col-md-2 control-label">Upload Reports </label>                                 
	                                                                                           
												                            
											            <input type="file" multiple="" name="images[]">                                           
	                                            </div> 


	                                        </div> 	   
	                         <button type="submit" align="midle" class="btn btn-info waves-effect w-md waves-light">Submit</button>   <br><br>                                 

										</div>
	                                    
	                                                                          
 								<br><br>
							</div>
                   		</div>
                   	</div>	
             		<?php
                            echo form_close();
                    ?>
        </div>
    </div> <?php //container ?>
</div> <?php //content ?>
<?php $this->load->view('includes/contentFooter'); ?>