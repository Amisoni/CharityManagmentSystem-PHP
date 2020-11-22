<?php
//include './include_css.php';
?>
<div class="header-middle">
    <div class="container">
<!--        <div class="row">
                    
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="ulockd-ohour-info style2">
                                <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-email-filled-closed-envelope"></span></div>
                                <div class="ulockd-info">
                                    <h3>Mail Us</h3>
                                    <p class="ulockd-addrss"><strong>Email:</strong>angelcharityorganization@email.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
                            <div class="ulockd-ohour-info style2">
                                <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-old-handphone"></span></div>
                                <div class="ulockd-info">
                                    <h3>Call Us</h3>
                                    <p class="ulockd-addrss">7567701862</p>
                                </div>
                            </div>
                        </div>-->
               
 
<!--                                    <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
                                        <div class="ulockd-welcm-hmddl">
                                            <a href="index.html" class="ulockd-main-logo"><img src="images/header-logo.png" alt=""></a>
                                        </div> 
                                    </div>-->
<!--            <div class="col-xs-2 col-sm-2 col-lg-2 col-lg-3">
                <div class="ulockd-welcm-hmddl">
                    <a href="index.html" class="ulockd-main-logo"><img src="../angel_logo/angel.jpeg" alt=""></a>
                </div>
            </div>-->
<!--            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="ulockd-ohour-info style2">
                    <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-email-filled-closed-envelope"></span></div>
                    <div class="ulockd-info">
                        <h3>Mail Us</h3>
                        <p class="ulockd-addrss"><strong>Email:</strong> beahand@email.com</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
                <div class="ulockd-ohour-info style2">
                    <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-old-handphone"></span></div>
                    <div class="ulockd-info">
                        <h3>Call Us</h3>
                        <p class="ulockd-addrss">+98 9875 5968 54</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
                <div class="ulockd-ohour-info style2">
                    <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-make-a-donation"></span></div>
                    <div class="ulockd-info">
                         Trigger the modal with a button 
                        <button type="button" class="btn btn-lg ulockd-btn-thm2 ulockd-mrgn1215 ulockd-mrgn610" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
                         Modal 
                        <div id="Donation-form-modal" class="modal fade bs-example-modal-default text-left" role="dialog">
                            <div class="modal-dialog">

                                 Modal content
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h3> <span class="flaticon-make-a-donation text-thm2"></span> DONATION FORM</h3>
                                        <p>Your Donation Can Save Lot's Of Life</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 donation-form-samount">
                                                <h4>Select Your Amount</h4>
                                                <ul class="list-inline selected-amount">
                                                    <li class="amount-box">
                                                        <input id="radio-one" type="radio" name="payment-group">
                                                        <label for="radio-one"> $10</label>
                                                    </li>
                                                    <li class="amount-box">
                                                        <input id="radio-two" type="radio" name="payment-group">
                                                        <label for="radio-two"> $20</label>
                                                    </li>
                                                    <li class="amount-box">
                                                        <input id="radio-three" type="radio" name="payment-group">
                                                        <label for="radio-three"> $30</label>
                                                    </li>
                                                    <li class="amount-box">
                                                        <input id="radio-four" type="radio" name="payment-group">
                                                        <label for="radio-four"> $50</label>
                                                    </li>
                                                    <li class="amount-box">
                                                        <input id="radio-five" type="radio" name="payment-group">
                                                        <label for="radio-five"> $100</label>
                                                    </li>
                                                </ul>
                                                <h5>Would you like to make regular donations?</h5>
                                                <ul class="list-inline">
                                                    <li><p>I would like to make </p></li>
                                                    <li>
                                                        <select name="pts" class="payment-time-selection">
                                                            <option value="0">a one time</option>
                                                            <option value="W">weekly</option>
                                                            <option value="M">monthly</option>
                                                            <option value="Y">yearly</option>
                                                        </select>
                                                    </li>
                                                    <li> Donations</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-md-6 donation-form-samount">
                                                <form class="form-inline">
                                                    <h4>Custom Amount</h4>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">$</div>
                                                            <input type="number" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                            <div class="input-group-addon">.00</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <form class="donation-form donor-details">
                                                    <h4>Donor Information</h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputNamex" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputNamexx" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control required" id="exampleInputEmailxy" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputPhone" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputAddress" placeholder="Address line 1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputAddress2" placeholder="Address line 2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputCity" placeholder="City/State">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control required" id="exampleInputZip" placeholder="Zipcode/Postcode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea id="form_message" name="form_message" class="form-control required" rows="4" placeholder="Additional Note"></textarea>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-lg btn-block ulockd-btn-thm2" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<?php
//include './include_js.php';
?>