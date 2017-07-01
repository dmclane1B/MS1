


<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('add-menu'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content text-center width-90 content_center">
    <!--- USER SIGN IN ICON ---> 
    <div class="panel-header" style="padding:70px 0px 50px;">
        <div class="panel-header-img align-center"><img src="/danny/public/assets/images/logo/v2/lpm-symbol-v2-lg-1b.png" width="120px" height="auto"></div>
        <h2 class="panel-header-title align-center">New Client Application</h2>
    </div>
    
    <div class="panel-body">
        <div id="multistep_form" class="form text-left">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
            <form class="form-horizontal msf">
            <div class="msf-header">
                <div class="row text-center">
                    <div class="msf-step col-md-3"><span>1</span></div>
                    <div class="msf-step col-md-3"><span>2</span></div>
                    <div class="msf-step col-md-3"><span>3</span></div>
                    <div class="msf-step col-md-3"><span>4</span></div>
                </div>
            </div>

            <div class="msf-content">
                <div class="msf-view">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                            <input id="property_address" name="property_address" type="text" class="form-control" placeholder="Property Address" data-bind="value: Property" data-val="true" data-val-required="property address is required">
                            <!--data-val="true" data-val-required="name is required"-->
                            </div>
                            <div class="form-group">
                            <input id="available_schools" name="available_schools" type="text" class="form-control" placeholder="Available Schools" data-bind="value: Schools" data-val="true" data-val-required="available schools is required">
                            <!--data-val="true" data-val-required="name is required"-->
                            </div>
                            <div class="form-group">
                                <!--div class='input-group date' id='datetimepicker1'>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Date Available" data-bind="value: Name" data-val="true" data-val-required="name is required">
                                <!--data-val="true" data-val-required="name is required"-->
                                <!--/div-->
                                <div class="input-group input-append date" id="mydatePicker">
                                    <input id="available_date" type="text" class="form-control" name="available_date" placeholder="Date Available" data-bind="value: AvailableDate" data-val="true" data-val-required="available date is required"/>
                                    <span class="input-group-addon add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <p>Occupied?</p>
                                    <label>
                                        <input type="radio" name="01" value="Yes" data-bind="checked: Occupied">
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        Yes
                                    </label>
                                    <label style="font-size: 1em">
                                        <input type="radio" name="01" value="No" data-bind="checked: Occupied">
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        No
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="02" value="Tenant" data-bind="checked: OccupiedBy">
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        By Tenant
                                    </label>
                                    <label>
                                        <input type="radio" name="02" value="Owner" data-bind="checked: OccupiedBy">
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        By Owner
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="msf-view">
                    <div class="row">
                        <div class="col-md-12 ">
                            <h3>Please Select Your Services:</h3>
                            <!--div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                         Services Included
                                    </label>
                                    <label>
                                        <input type="checkbox" value="" >
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Select service option
                                    </label>
                                </div>
                            </div-->
                            <h4>TENANT PLACEMENT SERVICES</h4>
                            <div class="head_info">
                                <p>SERVICE</p>
                                <span>FEE</span>
                            </div>
                            <div class="form-group no_margin">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="tenantPlacement01" value="Tenant Placement" data-bind="checked: tenantPlacement" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                         Tenant Placement 
                                    </label>
                                    <span>2%</span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="tenantPlacement02" value="Property Showings" id="checkbox-parent" data-bind="checked: propertyShowing">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Property Showings
                                    </label>
                                    <ul>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="tenantPlacement03" value="Included Property Showing(3 after 5pm + 2 weekend open houses)" data-bind="checked: propertyShowing">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                     Included Property Showing(3 after 5pm + 2 weekend open houses) 
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="tenantPlacement04" value="3 additional after 5PM " data-bind="checked: propertyShowing">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                     3 additional after 5PM 
                                                </label>
                                                <span>$50</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="tenantPlacement05" value="2 additional on weekend" data-bind="checked: propertyShowing">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                      2 additional on weekend
                                                </label>
                                                <span>$100</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="Advertising01" value="Photos and Advertising" id="checkbox-parent" data-bind="checked: advertising">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Photos and Advertising
                                    </label>
                                    <ul>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Advertising02" value="Online Property Listings" data-bind="checked: advertising">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                      Online Property Listings
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Advertising03" value="Virtual Tour" data-bind="checked: advertising">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                      Virtual Tour 
                                                </label>
                                                <span>$100</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Advertising04" value="Virtual Walk Through" data-bind="checked: advertising">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                     Virtual Walk Through 
                                                </label>
                                                <span>$250</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Advertising05" value="Video Walkthrough" data-bind="checked: advertising">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                     Video Walkthrough 
                                                </label>
                                                <span>$300</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Advertising06" value="Flyers" data-bind="checked: advertising">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                     Flyers
                                                </label>
                                                <span>$50</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="Screening" value="Screening" data-bind="checked: screening" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Screening 
                                    </label>
                                </div>
                                <div class="checkbox" data-bind="checked: leaseSigning">
                                    <label>
                                        <input type="checkbox" name="leaseSigning" value="Lease Signing" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Lease Signing 
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="inspection01" value="Inspection/s" id="checkbox-parent" data-bind="checked: inspection">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Inspection/s
                                    </label>
                                      <ul>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection02" value="Initial Move-In Inspection" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Initial Move-In Inspection
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection03" value="Termite inspection" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Termite inspection 
                                                </label>
                                                <span>$300</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection04" value="Pest Inspection" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Pest Inspection  
                                                </label>
                                                <span>$300</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection05" value="Roof inspection" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Roof inspection 
                                                </label>
                                                <span>$400</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection06" value="Chimney Inspection" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Chimney Inspection
                                                </label>
                                                <span>$200</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection07" value="Electrical Inspection" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Electrical Inspection 
                                                </label>
                                                <span>$400</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="inspection08" value="Visual Inspection during tenancy (fee per occurrence)" data-bind="checked: inspection">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Visual Inspection during tenancy (fee per occurrence)
                                                    <ul>
                                                        <li>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="03" value="Quarterly Inspections" data-bind="checked: inspectionChecked">
                                                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                                    Quarterly Inspections
                                                                </label>
                                                                <span>$150</span>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="03" value="Six Month Inspections" data-bind="checked: inspectionChecked">
                                                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                                    Six Month Inspections
                                                                </label>
                                                                <span>$150</span>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="03" value="Annual Inspections" data-bind="checked: inspectionChecked">
                                                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                                    Annual Inspections
                                                                </label>
                                                                <span>$150</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="inspection09" value="Tenant Move-In’s" data-bind="checked: inspection" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Tenant Move-In's
                                    </label>
                                </div>
                            </div>
                            <h4>MAINTENANCE SERVICES</h4>
                            <div class="head_info">
                                <p>SERVICE</p>
                                <span>FEE</span>
                            </div>
                            <div class="form-group no_margin">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="maintenance01" value="Project Management" data-bind="checked: maintenance" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                         Project Management 
                                    </label>
                                    <span>15%</span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="maintenance02" value="24 Hour Maintenance Dispatching Service" data-bind="checked: maintenance" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                         24 Hour Maintenance Dispatching Service
                                    </label>
                                    <span>2%</span>
                                </div>
                            </div>
                            <h4>RENT COLLECTION AND DISBURSEMENTS</h4>
                            <div class="head_info">
                                <p>SERVICE</p>
                                <span>FEE</span>
                            </div>
                            <div class="form-group no_margin">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="collection01" value="Rent Collection" data-bind="checked: collection"checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                         Rent Collection
                                    </label>
                                    <span>2%</span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="collection02" value="Late Fee’s" data-bind="checked: collection" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                          Late Fee's
                                    </label>
                                    <span>50%</span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="collection03" data-bind="checked: collection" value="Accounting Statements (monthly account statement)" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                          Accounting Statements (monthly account statement)
                                    </label>
                                </div>
                            </div>
                            <h4>HOME OWNER ASSOCIATIONS</h4>
                            <div class="form-group no_margin">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hoa01" data-bind="checked: HOA" value="HOA Coordinating and Compliance" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                         HOA Coordinating and Compliance
                                    </label>
                                    <span>2%</span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hoa02" data-bind="checked: HOA" value="Attend HOA meetings (fee per meeting)" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                          Attend HOA meetings (fee per meeting)
                                    </label>
                                    <span>$100</span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hoa03" data-bind="checked: HOA" value="HOA Payments (fee per month)" checked>
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                          HOA Payments (fee per month)
                                    </label>
                                    <span>$200</span>
                                </div>
                            </div>
                            <!--   <div class="form-group">
                            <textarea id="additionaldetails" name="additionaldetails" rows="10" class="form-control" placeholder="Enter Additional Details" data-bind="value: AdditionalDetails"></textarea>
                            </div>
                        -->

                        </div>
                    </div>
                </div>
                <div class="msf-view">
                    <div><label>Property Address</label> : <span data-bind="text: Property"></span></div>
                    <div><label>Available Schools</label> : <span data-bind="text: Schools"></span></div>
                    <div><label>Available Date</label> : <span data-bind="text: AvailableDate"></span></div>
                    <div><label>Occupied</label> : <span data-bind="text: Occupied"></span></div>
                    <div><label>Occupied By</label> : <span data-bind="text: OccupiedBy"></span></div>
                    <h3>Selected Services</h3>
                    <h4>TENANT PLACEMENT SERVICES</h4>
                    <p data-bind="text: tenantPlacement"></p>
                    <p data-bind="text: propertyShowing"></p>
                    <h4>Photos and Advertising</h4>
                    <p data-bind="text: advertising"></p>
                    <p data-bind="text: screening"></p>
                    <h4>Inspections</h4>
                    <p data-bind="text: inspection"></p>
                    <p data-bind="text: inspectionChecked"></p>
                    <h4>MAINTENANCE SERVICES</h4>
                    <p data-bind="text: maintenance"></p>
                    <h4>RENT COLLECTION AND DISBURSEMENTS</h4>
                    <p data-bind="text: collection"></p>
                    <h4>HOME OWNER ASSOCIATIONS</h4>
                    <p data-bind="text: HOA"></p>
                    <!--div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Countries</label> : <span data-bind="text: chosenCountries"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <label>Details</label> : <span data-bind="text: Details"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <input id="additional" name="additional" type="text" class="form-control" placeholder="Additional Details"  data-val="true" data-val-required="name is required">    
                            </div>
                        </div>
                    </div-->
                </div>
                <div class="msf-view">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="agreement">
                                <div class="contact">
                                    <p class="address">1901 OLD MIDDLEFIELD WAY #10 MOUNTAIN VIEW, CA 9403</br> <a href="" class="email">WWW.LEGACYPROPERTYGROUP.COM</a></br>650-241-3888</p>
                                </div>
                                <div class="instructions">
                                    <p>The undersigned owner hereby employs set forth management company, Legacy Property Group, exclusively to rent, lease, operate and manage real property located at:</p>
                                    <label>Property Address</label> : <span data-bind="text: Property"></span>
                                    <h3>Manager's Abilities</h3>
                                    <p>Property owner hereby gives Legacy Property Group the following duties, authority and powers:</p>
                                    <ol>
                                        <li><span>Marketing:</span> Legacy Property Group has the ability to advertise and market the set forth property for rent. Marketing is to include a "For Rent" sign and our online Marketing Campaign. If Property Owners wish to place advertisements other than the websites that Legacy Property Group advertises,then Property Owner will consume the costs associated with the additional marketing.</li>
                                        <li><span>Tenant Screening:</span> Legacy Property Group will screen all applicants as well as current tenants periodically with a credit check and criminal background check that are over the ages of 18. All of the tenants we deem to be fit under our standards must have over a 640 mid FICO score and must not have any Felonies or Criminal Drug charges on their record. Bankruptcies within the most recent 2 Years will not be accepted. We will execute a verification of Rent and Employment for all qualifying applicants. We will gather most recent Pay Stub, Bank Statement and Copy of Driver’s license from all qualifying applicants. If the Property Owner wishes to accept a tenant that does not fit into Legacy Property Group's criterion they must sign a waiver to release Legacy Property Group from any claims that may result from the future tenant.</li>
                                        <li><span>Leasing:</span>  Legacy Property Group has the right to execute leases, renewals or cancellations of leases related to such property. Legacy Property Group has the ability to send notices on behalf of the Property Owner to the Tenants of the property; such as termination of tenancies, serving 3 day notices and 24 or 48 hour notices to enter premises. Legacy Property Group can institute legal actions in the name of the Property Owner to evict tenants and recover the property, rents and sums due. All rights described above will be exercised only upon approval of the property owner.</li>
                                        <li><span> Collecting Rents and Deposits:</span> All rents are due on the first of the month. Tenants have a grace period until the fifth to get the rents into our office by the end of the business day. After that Legacy Property Group considers the rent late. The late fee for the rent is 5% of the monthly rent and this fee is split 50/50 between the Legacy Property Group and the Property Owner. If the tenant was to have insufficient funds the first fee will be $25.00 and $35.00 thereafter. On the third insufficient funds in one year we will no longer accept personal checks from the tenant. Legacy Property Group will keep 100% of all insufficient funds fees. All rent deposits will be held in a Legacy Property Group's trust account, it will not accrue any interest, and will be refunded to the tenant minus any repairs or cleaning expenses with 21 days of tenant vacating the residence.</li>
                                        <li><span>Disbursements:</span> Legacy Property Group will send all rent checks out on or Before the Tenth Business day of the month. Payments will be sent by either company check or direct deposit. Legacy Property Group will deduct from the monthly rental funds the agreed upon management fees, materials, repairs due to vendors, late fees, and legal fees. The remainder of the rental funds will go to the Property Owner.</li>
                                        <li><span>Monthly and Yearly Statements:</span> Every month Legacy Property Group will send out a monthly statement to the Property Owner prior to the rental disbursement. Each statement shall include rental amount collected, management fees, late fees, repairs or vendor charges, receipts, expenses, and escrow accounts. In the event disbursements shall exceed receipts the Property Owner assumes full responsibility for the payment of any expense and obligations incurred in connection with the exercise of Legacy Property Group's duties set forth herein.</li>
                                        <li><span>Service Contracts:</span>Legacy Property Group shall have the ability to execute contracts for utilities and services for the operation, maintenance and safety of the property. The Legacy Property Group will not incur the cost associated with these contracts, as owner will take responsibility for payments due.</li>
                                        <li><span>Maintenance:</span> Legacy Property Group has the ability to supervise, coordinate and dispatch all labor required for the operation and maintenance of the property. Maintaining property during vacancies and when the property is occupied. The Property Owner may sign a waiver relinquishing Legacy Property Group from all maintenance responsibilities.</li>
                                        <li><span>Repairs:</span> Legacy Property Group has the ability to take charge of repairs, inspections, decorating and alterations and purchasing materials for the property. Legacy Property Group will notify the Property Owner for every repair item except for normal operating costs and recurring charges. During afterhours repairs or emergency repairs the Property Owner may be notified on the very next day. Any repair that is in excess of $500.00 must be authorized by the owner prior to the work being completed, unless the owner is unattainable and or does not respond within one hour of being notified. If the repair is an emergency that is over $500.00 Legacy Property Group has the authority to make the repair. Legacy Property Group will require the home to be professionally cleaned prior to any tenant moving into the home. Legacy Property Group will not be responsible for the cost of cleaning.</li>
                                        <li><span>Inspections:</span> Legacy Property Group will provide detailed move in and move out inspections of the property with every tenant that we place into your home. The inspection will be uploaded into the online portal for you to review and have access to. Every 6 months Legacy Property group will do a periodic maintenance inspection of the home to look out for any deferred maintenance of the property. If there is a maintenance issue Legacy Property Group will notify the Landlord right away. If there is nothing found there will be no need for a notification.</li>
                                    </ol>
                                    <h3>Property Owner's Commitment</h3>
                                    <ol>
                                        <li><span>Management Fees:</span>  Property Owner agrees to pay Legacy Property Group a fee of 8% of Monthly rent received for services rendered. Owner recognizes Legacy Property Group as an agent in any negotiations relative to the property or any part thereof, which may have been initiated during the term hereof, and shall compensate Legacy Property Group in accordance with the rate set forth. Compensation will be deducted by Legacy Property Group from the monthly rents received. Management fees are as such 8% of gross rents, 50% of late fees.</li>
                                        <li><span>Hold Harmless:</span> Property Owner agrees to hold Legacy Property Group harmless from the damage suits in connection with the management of the herein described property and from liability for injury suffered by any employee or other person whomsoever, and to carry, at his own expense adequate public liability. Legacy Property Group agrees to have its own errors and omissions insurance. Legacy Property Group shall not be liable for any error of judgment or for any mistake of fact or law, or for anything which we may do or refrain from doing hereunder, except in cases of willful misconduct or gross negligence. If suit is brought to collect Legacy Property Group's compensation and is successful at defending any action brought against Legacy Property Group, relating to the property, Property Owner agrees to pay all costs incurred by Legacy Property Group in connection with such action, including reasonable attorney's fees.</li>
                                        <li><span>Data and Records:</span> Property owner agrees to make available any data, records, or documents pertinent to the property in which Legacy Property Group may require exercising its management duties.</li>
                                    </ol>
                                    <h3>OTHER TERMS</h3>
                                    <ol>
                                        <li><span>Assignability:</span> In the event that Legacy Property Group is to ever be bought or sold, Property Owner's property will be assigned to the new property management company. It is the Property Owners right to interview with new property Management Company to make sure they are deemed fit to manage such property. If the property owner decides he no longer wishes to continue with the new company after the interview he can terminate this agreement without penalty.</li>
                                        <li><span>Terms: </span>This agreement supersedes all previous management agreements, both verbal and written. This agreement shall be for whatever date is last; one year from the execution date and/or at the end of any lease Legacy Property Group has executed for a minimum term of one year. This agreement will be automatically renewed on a month to month basis after expiration date. If Property Owner cancels this agreement prematurely for any reason within the first year, the owner will remit to Legacy Property Group the balance of three months’ management fees. Unless Legacy Property Group was found through a court of law to be negligent or at fault. After the first year the property owner can terminate this agreement with a 30-day notice without penalty. If such property is sold or transferred to a new Property Owner this agreement becomes null and void. Upon termination of this agreement, all monies due to Property Owner, if any will be returned within 30 days.</li>
                                        <li> Each of the Parties intends that the facsimile of its signature printed by a receiving facsimile machine to constitute an original signature, or to have the equivalent evidentiary value of the original signature. This also includes scanned copies of the agreement.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agreement">
                        <div class="row">
                            <div class="col-md-6" >
                                <div class="form-group">
                                  <label>Owner Name(s):</label>
                                  <input type="text" class="form-control" id="owner_name" name="ownername">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group less_width">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <div class="form-group">
                                  <label>Owner Cell:</label>
                                  <input type="text" class="form-control" id="owner_cell" name="ownercell">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group less_width">
                                  <label>Home:</label>
                                  <input type="text" class="form-control" id="home" name="home">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Home Address:</label>
                                <input type="text" class="form-control" id="home_address" name="homeaddress">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <div class="form-group">
                                    <label>Social Security #</label>
                                    <input type="text" class="form-control" id="social_security" name="socialsecurity">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <span class="authentication">(or EIN if under business name)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <div class="form-group">
                                  <label>Bank Account #</label>
                                  <input type="text" class="form-control" id="bank_account" name="bankac">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group less_width">
                                  <label>Routing #</label>
                                  <input type="text" class="form-control" id="Routing" name="Routing">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="msf-view">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="completion_msg">
                                <h4>great work! We’ve got all we need. An Agent will contact you within 24hrs to complete your signup process. Thank you for choosing</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="msf-navigation">
                <div class="row">
                    <div class="col-md-3">
                        <button type="button" data-type="back" class="btn msf-nav-button"><i class="fa fa-chevron-left"></i> Back </button>
                    </div>

                    <div class="col-md-3 col-md-offset-6">
                        <button type="button" data-type="next" class="btn msf-nav-button">Next <i class="fa fa-chevron-right"></i></button>
                        <button type="submit" data-type="submit" class="btn msf-nav-button">Submit</button>
                    </div>

                </div>
            </div>
            </form>
        </div>				
    </div>
    
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('/danny/public/assets/user/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/danny/public/assets/user/js/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('/danny/public/assets/user/js/lib/validation/formvalidation.js')); ?>"></script>
<script src="<?php echo e(asset('/danny/public/assets/user/js/jquery.validate.unobtrusive.min.js')); ?>"></script>
<script src="<?php echo e(asset('/danny/public/assets/user/js/knockout-min.js')); ?>"></script>
<script src="<?php echo e(asset('/danny/public/assets/user/js/custom.js')); ?>"></script>

<script>
$('input[name=01]').on('change', function(){
	var val = $(this).val();
	$('#occupied').val(val);
});
$('input[name=02]').on('change', function(){
	var val = $(this).val();
	$('#occupiedBy').val(val);
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.sections.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('user.sections.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('user.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>