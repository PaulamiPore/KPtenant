<div class="left side-menu text-dark">
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Navigation</li>
                        <li class="has_sub">
                            <a href="<?php echo base_url();?>Dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>
                        

                           
                    </ul>
                </div>
                <div class="clearfix"></div>

                <div class="help-box">
                    <h5 class="text-muted m-t-0">Need Help?</h5>
                    <p class="m-b-0"><span class="text-dark"><i class="fa fa-phone"></i>&nbsp;<b>Special Branch Technical Cell</b></span><br /> (033) 2283 - 2084</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="exampleModal" class="modal fade bs-example-modal-md text-dark" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="header-title m-t-0">Document Details</h4>
            </div>
            <br/>
            <div class="modal-body">
                <table id="dataTable" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="dataTable_info" >
                   <thead>
                      <tr>
                        <th>
                            Document Title
                        </th>
                        <th>
                            Document Name
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                   </thead>
                   <tbody id='docdetails'>
                      
                   </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>