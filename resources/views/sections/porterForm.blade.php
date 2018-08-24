<!-- Porter Form -->
<section id="porter-form" class="pt60 pb50" data-overlay-light="10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
					<strong>Be a Porter</strong>
				</h2>
                <p class="lead text-center">
					Going somewhere? Reduce travel costs by sharing cargo space!
				</p>
                <form name="porter-form-1" action="/submit-porter-form" method="POST" class="form-steps">
                    <input type="submit" name="submit" value="" />
					<input type="hidden" name="formType" value="porter" />
                    <div class="form-step">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label>Origin Address</label>
                                    <input type="text" class="autocomplete" name="porterOriginAddress" id="porterOriginAddress" required />
                            		<span id="porterOriginAddressFields">
                            			<input type="hidden" name="porterOriginAddress[street_number]" data-type="street_number" />
                            			<input type="hidden" name="porterOriginAddress[street_name]" data-type="route" />
                            			<input type="hidden" name="porterOriginAddress[city]" data-type="locality" />
                            			<input type="hidden" name="porterOriginAddress[province]" data-type="administrative_area_level_1" />
                            			<input type="hidden" name="porterOriginAddress[postal_code]" data-type="postal_code" />
                            		</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label>Destination Address</label>
                                    <input type="text" class="autocomplete" name="porterDestinationAddress" id="porterDestinationAddress" required />
                            		<span id="porterDestinationAddressFields">
                            			<input type="hidden" name="porterDestinationAddress[street_number]" data-type="street_number" />
                            			<input type="hidden" name="porterDestinationAddress[street_name]" data-type="route" />
                            			<input type="hidden" name="porterDestinationAddress[city]" data-type="locality" />
                            			<input type="hidden" name="porterDestinationAddress[province]" data-type="administrative_area_level_1" />
                            			<input type="hidden" name="porterDestinationAddress[postal_code]" data-type="postal_code" />
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
                                    <label>Departure Date</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
                                        <input type="date" class="" name="departureDate" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Departure Time</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
                                        <input type="text" class="" name="departureTime" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="form-group">
                                    <label>How far out of your way are you willing to go?:</label>
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <div class="radio">
												<label class="lead">
													<input type="radio" name="outOfWay" value="5 minutes" required />
													<br /><strong>5 minutes</strong>
												</label>
											</div>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <div class="radio">
												<label class="lead">
													<input type="radio" name="outOfWay" value="10 minutes" required />
													<br /><strong>10 minutes</strong>
												</label>
											</div>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <div class="radio">
												<label class="lead">
													<input type="radio" name="outOfWay" value="15+ minutes" required />
													<br /><strong>15+ minutes</strong>
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
									</button><br />
									1/3
								</p>
                            </div>
                        </div>
                    </div>
                </form>
                <form name="porter-form-2" action="" method="POST" class="form-steps">
                    <input type="submit" name="submit" value="" />
                    <div class="form-step">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Available Cargo Space:</label>
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
                                                <div class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</div>
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
                                        <div class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</div>
                                        <input class="input" type="email" name="email" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Cell Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
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
                                <p>
									<button type="button" class="btn btn-primary btn-lg go-back">
										<i class="fa fa-caret-left"></i> Go Back
									</button>
									<button type="button" class="btn btn-primary btn-lg next-step">
										Next Step <i class="fa fa-caret-right"></i>
									</button>
									<br />2/3
								</p>
                            </div>
                        </div>
                    </div>
                </form>
                <form name="porter-form-3" action="" method="POST" class="form-steps">
                    <div class="form-group text-center">
                        <label>Do you have valid registration &amp; insurance on the vehicle?</label>
                        <div class="row">
                            <div class="col-xs-3 col-xs-offset-3 text-center">
                                <div class="radio">
									<label class="lead">
										<i class="fa fa-check"></i>
										<input type="radio" name="validRegistrationInsurance" value="Yes" required />
										Yes
									</label>
								</div>
                            </div>
                            <div class="col-xs-3 text-center">
                                <div class="radio">
									<label class="lead">
										<i class="fa fa-close"></i>
										<input type="radio" name="validRegistrationInsurance" value="No" />
										No
									</label>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <label>Are you licensed to drive in Alberta?</label>
                        <div class="row">
                            <div class="col-xs-3 col-xs-offset-3 text-center">
                                <div class="radio">
									<label class="lead">
										<i class="fa fa-check"></i>
										<input type="radio" name="licensed" value="Yes" required />
										Yes
									</label>
								</div>
                            </div>
                            <div class="col-xs-3 text-center">
                                <div class="radio">
									<label class="lead">
										<i class="fa fa-close"></i>
										<input type="radio" name="licensed" value="No" />
										No
									</label>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div>
								<label class="lead">
									<input id="porter-tos" type="checkbox" name="tos" value="1" required /> I have read and agree to the <a href="#terms-of-service" class="tos">Terms of Service</a>
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
								<br />3/3
							</p>
                        </div>
                    </div>
            	</div>
            </form>
        </div>
    </div>
</section>
<!-- End Porter Form -->
