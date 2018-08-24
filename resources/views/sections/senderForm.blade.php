<!-- Sender Form -->
<section id="sender-form" class="pt60 pb50" data-overlay-dark="0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"> <strong>Send an Item</strong> </h2>
                <p class="lead text-center"> Have an item to ship? Enter your details below and <br />we'll match you up with a Porter heading that way! </p>
                <form name="sender-form-1" action="" method="POST" class="form-steps">
                    <input type="submit" name="submit" value="" /> <input type="hidden" name="formType" value="sender" />
                    <div class="form-step">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label>Origin Address</label>
                                    <input type="text" class="autocomplete" name="senderOriginAddress" id="senderOriginAddress" required />
                                    
                            		<span id="senderOriginAddressFields">
                            			<input type="hidden" name="senderOriginAddress[street_number]" data-type="street_number" required />
                            			<input type="hidden" name="senderOriginAddress[street_name]" data-type="route" required />
                            			<input type="hidden" name="senderOriginAddress[city]" data-type="locality" required />
                            			<input type="hidden" name="senderOriginAddress[province]" data-type="administrative_area_level_1" required />
                            			<input type="hidden" name="senderOriginAddress[postal_code]" data-type="postal_code" required />
                            		</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label>Destination Address</label>
                                    <input type="text" class="autocomplete" name="senderDestinationAddress" id="senderDestinationAddress" required />
                            		<span id="senderDestinationAddressFields">
                            			<input type="hidden" name="senderDestinationAddress[street_number]" data-type="street_number" required />
                            			<input type="hidden" name="senderDestinationAddress[street_name]" data-type="route" required />
                            			<input type="hidden" name="senderDestinationAddress[city]" data-type="locality" required />
                            			<input type="hidden" name="senderDestinationAddress[province]" data-type="administrative_area_level_1" required />
                            			<input type="hidden" name="senderDestinationAddress[postal_code]" data-type="postal_code" required />
                            		</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-4">
                                <div class="form-group">
                                    <label>Earliest Delivery Date</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                                        <input type="date" class="" name="earliestDeliveryDate" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Latest Delivery Date</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                                        <input type="date" class="" name="latestDeliveryDate" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="form-group">
                                    <label>Select a Delivery Type:</label>
                                    <div class="row">
                                        <div class="col-xs-5 col-xs-offset-1 text-center">
                                            <div class="radio">
												<label class="lead">
													<i class="fa fa-home"></i>
													<input type="radio" name="deliveryType" value="Door to door" required />
													Door to Door
													<br /><small>Porter will take the package from your address all the way to the recipient</small>
												</label>
											</div>
                                        </div>
                                        <div class="col-xs-5 text-center">
                                            <div class="radio">
												<label class="lead">
													<i class="fa fa-street-view"></i>
													<input type="radio" name="deliveryType" value="Meet somewhere" />
													Meet Somewhere
													<br /><small>(something here...)</small>
												</label>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <p>
									<button type="button" class="btn btn-primary btn-lg next-step">
										Next Step <i class="fa fa-caret-right"></i>
									</button>
									<br /> 1/2
								</p>
                            </div>
                        </div>
                    </div>
                </form>
                <form name="sender-form-2" action="" method="POST" class="form-steps">
                    <input type="submit" name="submit" value="" />
                    <div class="form-step">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-group">
                                    <label>Item Value</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="fa fa-dollar"></i> </div>
                                        <input type="text" class="input" name="itemValue" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Item Description</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="fa fa-gift"></i> </div>
                                        <input type="text" class="input" name="itemDescription" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Required Cargo Space:</label>
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <div class="radio">
													<label class="lead">
														<img src="/img/assets/front-seat.png" />
														<input type="radio" name="cargoSpace" value="Front seat" required />
														Front Seat
														<br /><small>(book bag, small item, plant, etc...)</small>
													</label>
												</div>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <div class="radio">
													<label class="lead">
														<img src="/img/assets/back-seat.png" />
														<input type="radio" name="cargoSpace" value="Back seat" />
														Back Seat / Trunk
														<br /><small>(guitar, duffelbag, small furniture, etc...)</small>
													</label>
												</div>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <div class="radio">
													<label class="lead">
														<img src="/img/assets/truck.png" />
														<input type="radio" name="cargoSpace" value="Pickup truck" />
														Pickup Truck
														<br /><small>(tires, mattress, couch, etc...)</small>
													</label>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label>First &amp; Last Name</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon"> <i class="fa fa-map-marker"></i> </div>
                                                <input class="input" type="text" name="fullName" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="fa fa-envelope"></i> </div>
                                        <input class="input" type="email" name="email" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Cell Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="fa fa-phone"></i> </div>
                                        <input class="input" type="text" name="phone" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group text-center">
                                    <label>Best method of contact:</label>
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <div class="radio">
												<label class="lead">
													<i class="fa fa-phone"></i>
													<input type="radio" name="bestContactMethod" value="Phone call" required />
													Phone call
												</label>
											</div>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <div class="radio">
												<label class="lead">
													<i class="fa fa-mobile"></i>
													<input type="radio" name="bestContactMethod" value="Text message" />
													Text message / SMS
												</label>
											</div>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <div class="radio">
												<label class="lead">
													<i class="fa fa-envelope"></i>
													<input type="radio" name="bestContactMethod" value="Email" />
													Email
												</label>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div>
									<label class="lead">
										<input id="sender-tos" type="checkbox" name="tos" value="1" required /> I have read and agree to the <a href="#terms-of-service" class="tos">Terms of Service</a>
									</label>
								</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <p>
									<button type="button" class="btn btn-primary btn-lg go-back">
										<i class="fa fa-caret-left"></i> Go Back
									</button>
									<button type="button" class="btn btn-primary btn-lg next-step submit-forms">
										Finish <i class="fa fa-caret-right"></i>
									</button>
									<br /> 2/2
								</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Sender Form -->


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCCDUUmWMUSPCPUdyeRJ4M487c-4xU-jrE&libraries=places"></script>
<script src="/js/google-autocomplete.js"></script>
