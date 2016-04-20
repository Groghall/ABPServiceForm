$(function () {
        $("input[name='haz2']").click(function () {
            if ($("#haz2yes").is(":checked")) {
                $("#haz2number").show();
            } else {
                $("#haz2number").hide();
            }
        });
    });



$('#section1').bootstrapValidator({
message: "This value is not valid",
feedbackIcons: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	fields: {
			servicetype: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Service type is required ie. Inspection'
							  }, // notEmpty
					    regexp: {
	                        regexp: /^[A-Za-z\s.'-]+$/,
	                        message: "Alphabetical characters, hyphens and spaces"
	                    }
							} // validators
					  },  // service type
			sjn: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please enter an sjn number'
							  }, // notEmpty
					    regexp: {
	                        regexp: /[1][1-9]-[0-9]{5,5}/,
	                        message: "Must match the format 16-00000"
			                    }
							} // validators
					},  // sjn number				  
			date: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'A date is required'
							  } // notEmpty
							} // validators
					},  // date					  
			haz1: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							  } // notEmpty
						} // validators
					},  // hazard check 1					  
			haz2: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					},  // hazard check 2
			haz3: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					},  // hazard check 3
			haz4: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 4
			haz5: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 5
			haz6: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 6
			haz7: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 7
			haz8: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 8
			haz9: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 9
			haz10: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 10
			haz11: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 11		  
			haz12: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 12		  
			haz13: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 13	  
			haz14: {
				group: '.col-sm-4',
				validators: {
					notEmpty: {
						message: 'Please ensure this is checked'
							} // validators
						}
					  },  // hazard check 14	  							  
	} // fields
});
