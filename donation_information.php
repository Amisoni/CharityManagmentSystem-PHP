<?php
include 'include/include_css.php';
?>

<div class="modal-dialog">

                                        <!-- Modal content-->
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
<?php
include 'include/include_js.php';
?>