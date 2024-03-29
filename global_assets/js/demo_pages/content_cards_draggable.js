/* ------------------------------------------------------------------------------
 *
 *  # Draggable cards
 *
 *  Demo JS code for content_cards_draggable.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var CardsDraggable = function() {


    //
    // Setup module components
    //

    var _componentDragula = function() {
        if (typeof dragula == 'undefined') {
            console.warn('Warning - dragula.min.js is not loaded.');
            return;
        }

        //
        // Basic sorting
        //

        // Define containers
        const containersBasic = Array.from(document.querySelectorAll('.row-sortable [class*="col-"]'));

        // Init dragula
        dragula(containersBasic, {
            mirrorContainer: document.querySelector('.content-inner'),
            moves: function (el, container, handle) {
                return handle.matches('[data-action=move]');
            }
        });


        //
        // Sorting area
        //

        // Define containers
        const containersArea = Array.from(document.querySelectorAll('.column-card-sortable'));

        // Init dragula
        dragula(containersArea, {
            mirrorContainer: document.querySelector('.content-inner'),
            moves: function (el, container, handle) {
                return handle.matches('[data-action=move]');
            }
        });


        //
        // Exclude card from sort
        //

        // Define containers
        const containersExclude = Array.from(document.querySelectorAll('.sortable-exclude [class*="col-"]'));

        // Init dragula
        dragula(containersExclude, {
            mirrorContainer: document.querySelector('.content-inner'),
            moves: function (el, container, handle) {
                return handle.matches('.card:not(.skip-sort) [data-action=move]');
            }
        });


        //
        // Sorting handles
        //

        // Define containers
        const containersHandle = Array.from(document.querySelectorAll('.sortable-heading [class*="col-"]'));

        // Init dragula
        dragula(containersHandle, {
            mirrorContainer: document.querySelector('.content-inner'),
            moves: function (el, container, handle) {
                return handle.matches('.card-title, [data-action=move]');
            }
        });


        //
        // Card as a handle
        //

        // Define containers
        const containersCardHandle = Array.from(document.querySelectorAll('.sortable-card [class*="col-"]'));

        // Init dragula
        dragula(containersCardHandle, {
            mirrorContainer: document.querySelector('.content-inner')
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDragula();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    CardsDraggable.init();
});
