$(document).ready(function() {
    $('.input-click').click(function(){
        $('.card').addClass('active');
    });
    
    $('.question-wrapper').click(function(){
        if ($('.slide').hasClass('show')){
            $('.slide').removeClass('show');
        } else{
            $('.slide').addClass('show');
        }

    });
    
    
	// single hendelr input value
	var pmdSliderValueInput = document.getElementById('pmd-slider-value-input');
	
	noUiSlider.create(pmdSliderValueInput, {
		start: [ 18 ], // Handle start position
		connect: 'lower', // Display a colored bar between the handles
		tooltips: [ wNumb({ decimals: 0 }) ],
		format: wNumb({
			decimals: 0,
		}),
		range: { // Slider can select '0' to '100'
			'min': 0,
			'max': 100
		}
	});

	var valueInput = document.getElementById('value-input');
	
	// When the slider value changes, update the input and span
	pmdSliderValueInput.noUiSlider.on('update', function( values, handle ) {
			valueInput.value  = values[handle];
	});
	
	// When the input changes, set the slider value
	valueInput.addEventListener('change', function(){
		pmdSliderValueInput.noUiSlider.set([this.value]);
	});

});