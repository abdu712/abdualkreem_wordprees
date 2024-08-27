( function( api ) {

	// Extends our custom "halloween-shop" section.
	api.sectionConstructor['halloween-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );