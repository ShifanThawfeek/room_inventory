/* ------------------------------------------------------------------------------
 *
 *  # Alpaca - Controls
 *
 *  Demo JS code for alpaca_controls.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var AlpacaControls = function() {


    //
    // Setup module components
    //

    // Alpaca examples
    var _componentAlpacaControls = function() {
        if (!$().alpaca) {
            console.warn('Warning - alpaca.min.js is not loaded.');
            return;
        }


        // Checkboxes
        // ------------------------------

        // Checkbox with label
        var $alpacaCheckboxLabel = $('#alpaca-checkbox-label');
        $alpacaCheckboxLabel.alpaca({
            data: true,
            options: {
                label: 'Question:',
                rightLabel: 'Do you like Alpaca?'
            },
            postRender: function(control) {
                $alpacaCheckboxLabel.find('.checkbox').addClass('form-check');
                $alpacaCheckboxLabel.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaCheckboxLabel.find('input[type=checkbox]').addClass('form-check-input');
            }
        });

        // Display only mode
        $('#alpaca-checkbox-static').alpaca({
            data: false,
            view: 'bootstrap-display',
            options: {
                label: 'Registered?'
            }
        });

        // Basic checkbox list
        var $alpacaCheckboxList = $('#alpaca-checkbox-list');
        $alpacaCheckboxList.alpaca({
            data: ['sandwich', 'cookie', 'drink'],
            schema: {
                type: 'array',
                enum: ['sandwich', 'chips', 'cookie', 'drink']
            },
            options: {
                type: 'checkbox',
                label: 'What would you like with your order?',
                optionLabels: ['A Sandwich', 'Potato Chips', 'A Cookie', 'Soft Drink']
            },
            postRender: function(control) {
                $alpacaCheckboxList.find('.checkbox').addClass('form-check');
                $alpacaCheckboxList.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaCheckboxList.find('input[type=checkbox]').addClass('form-check-input');
            }
        });


        // Disabled checkbox list
        var $alpacaCheckboxListDisabled = $('#alpaca-checkbox-list-disabled');
        $alpacaCheckboxListDisabled.alpaca({
            data: ['sandwich', 'cookie', 'drink'],
            schema: {
                type: 'array',
                enum: ['sandwich', 'chips', 'cookie', 'drink']
            },
            options: {
                type: 'checkbox',
                label: 'What would you like with your order?',
                disabled: true,
                optionLabels: ['A Sandwich', 'Potato Chips', 'A Cookie', 'Soft Drink']
            },
            postRender: function(control) {
                $alpacaCheckboxListDisabled.find('.checkbox').addClass('form-check');
                $alpacaCheckboxListDisabled.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaCheckboxListDisabled.find('input[type=checkbox]').addClass('form-check-input');
            }
        });


        // Radios
        // ------------------------------

        // Basic radios
        var $alpacaRadioBasic = $('#alpaca-radio-basic');
        $alpacaRadioBasic.alpaca({
            data: 'green',
            options: {
                type: 'radio',
                label: 'Favorite Color',
                helper: 'Pick your favorite color',
                optionLabels: {
                    red: 'Red',
                    green: 'Green',
                    blue: 'Blue',
                    white: 'White',
                    black: 'Black'
                }
            },
            schema: {
                required: true,
                enum: ['red', 'green', 'blue', 'white', 'black']
            },
            postRender: function(control) {
                $alpacaRadioBasic.find('.radio').addClass('form-check');
                $alpacaRadioBasic.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaRadioBasic.find('input[type=radio]').addClass('form-check-input');
            }
        });

        // Disabled mode
        var $alpacaRadioBasicDisabled = $('#alpaca-radio-basic-disabled');
        $alpacaRadioBasicDisabled.alpaca({
            data: 'Jimi Hendrix',
            schema: {
                enum: ['Jimi Hendrix', 'Mark Knopfler', 'Joe Satriani', 'Eddie Van Halen', 'Orianthi']
            },
            options: {
                type: 'radio',
                label: 'Who is your favorite guitarist?',
                vertical: true,
                disabled: true
            },
            postRender: function(control) {
                $alpacaRadioBasicDisabled.find('.radio').addClass('form-check');
                $alpacaRadioBasicDisabled.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaRadioBasicDisabled.find('input[type=radio]').addClass('form-check-input');
            }
        });

        // Required radios
        var $alpacaRadioRequired = $('#alpaca-radio-required');
        $alpacaRadioRequired.alpaca({
            data: 'Coffee2',
            options: {
                label: 'Ice cream',
                helper: 'Guess my favorite ice cream?',
                optionLabels: ['Vanilla Flavor', 'Chocolate Flavor', 'Coffee Flavor']
            },
            schema: {
                required: true,
                enum: ['Vanilla', 'Chocolate', 'Coffee']
            },
            postRender: function(control) {
                $alpacaRadioRequired.find('.radio').addClass('form-check');
                $alpacaRadioRequired.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaRadioRequired.find('input[type=radio]').addClass('form-check-input');
            }
        });

        // Options
        var $alpacaRadioOptions = $('#alpaca-radio-options');
        $alpacaRadioOptions.alpaca({
            data: 'Jimi Hendrix',
            schema: {
                enum: ['Jimi Hendrix', 'Mark Knopfler', 'Joe Satriani', 'Eddie Van Halen', 'Orianthi']
            },
            options: {
                type: 'radio',
                label: 'Who is your favorite guitarist?',
                removeDefaultNone: true,
                vertical: true
            },
            postRender: function(control) {
                $alpacaRadioOptions.find('.radio').addClass('form-check');
                $alpacaRadioOptions.find('label:not(.alpaca-control-label)').addClass('form-check-label');
                $alpacaRadioOptions.find('input[type=radio]').addClass('form-check-input');
            }
        });
    };

    // Alpaca with Tokenfield
    var _componentAlpacaControlsTokenfield = function() {
        if (!$().alpaca || !$().tokenfield) {
            console.warn('Warning - alpaca.min.js and/or tokenfield.min.js is not loaded.');
            return;
        }

        // Basic setup
        $('#alpaca-tokenfield').alpaca({
            schema: {
                title: 'Character Names',
                type: 'string'
            },
            options: {
                type: 'token',
                focus: false,
                tokenfield: {
                    autocomplete: {
                        source: ['marty', 'doc', 'george', 'biff', 'lorraine', 'mr. strickland'],
                        delay: 100
                    },
                    showAutocompleteOnFocus: true
                }
            },
            data: 'marty,doc,george,biff'
        });

        // Display only mode
        $('#alpaca-tokenfield-static').alpaca({
            schema: {
                title: 'Character Names',
                type: 'string'
            },
            options: {
                type: 'token',
                focus: false,
                tokenfield: {
                    autocomplete: {
                        source: ['marty', 'doc', 'george', 'biff', 'lorraine', 'mr. strickland'],
                        delay: 100
                    },
                    showAutocompleteOnFocus: true
                }
            },
            data: 'marty,doc,george,biff',
            view: 'bootstrap-display'
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentAlpacaControls();
            _componentAlpacaControlsTokenfield();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    AlpacaControls.init();
});
