$.validator.addMethod( "rutOnly", function( value, element ) {
	return this.optional( element ) || /^[0-9-]+$/i.test( value );
}, "Solo ingrese numeros o guión" );
