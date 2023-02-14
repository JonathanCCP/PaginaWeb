( function( api ) {

	// Extends our custom "couture-netnus-lite" section.
	api.sectionConstructor['couture-netnus-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );