(function( $ ){

	var Tab = {
		init: function(){
			$( document ).on( 'click', '.rise-blocks-custom-fields-tab-menu', function( e ){
				
				e.preventDefault();
				var tab = $( this ).attr( 'href' );

				$( '.rise-blocks-custom-fields-tab-menu' ).removeClass( 'active' );
				$( this ).addClass( 'active' );

				$( '.rise-blocks-custom-fields-single-tab' ).removeClass( 'active' );
				$( tab ).addClass( 'active' );
			});
		}
	};

	var ImageBrowser = {
		wrapper: false,
		json: false,
		uploader: false,
		button: false,
		init: function(){

			var $this = this;

			$( document ).on( 'click', '.rise-blocks-custom-fields-image-browse', function( e ){

				e.preventDefault();

				$this.wrapper = $( this ).closest( '.rise-blocks-custom-fields-image-wrapper' );

				$this.button = $( this ).find( '.rise-blocks-custom-fields-image-btn-text' );

				if( $this.uploader ){
					$this.uploader.open();
					return;
				}

				$this.uploader = wp.media.frames.file_name = wp.media({
					title: RBCF.media_title,
					button: {
						text: RBCF.media_btn_text
					},
					multiple: false
				});

				$this.uploader.on( 'select', function(){
					$this.onSelect();
				});

				$this.uploader.open();
			});

			$( document ).on( 'click', '.rise-blocks-custom-fields-image-delete', function( e ){ 
				
				e.preventDefault();

				var data = $( this ).data( 'required' );

				$wrapper = $( this ).closest( '.rise-blocks-custom-fields-image-wrapper' );
				$wrapper.find( '.rise-blocks-custom-fields-image-input' ).val( '' );
				$wrapper.find( '.rise-blocks-custom-fields-image-holder' ).html( '' );

				$( this ).addClass( 'hidden' );

				$( this ).parent( '.rise-blocks-custom-fields-image-btns' )
					.find( '.rise-blocks-custom-fields-image-btn-text' )
					.text( RBCF.image_upload_text );
			});
		},
		onSelect: function(){
			
			var attachment = this.uploader.state().get( 'selection' ).first().toJSON();

			if( attachment ){

				var url = attachment.url;
				if( typeof attachment.sizes !== 'undefined' ){
					if( typeof attachment.sizes.thumbnail !== 'undefined' ){
						url = attachment.sizes.thumbnail.url;
					}else{
						url = attachment.sizes.full.url;
					}
				}

				var img = $( '<img />',{  src: url } );

				this.wrapper.find( '.rise-blocks-custom-fields-image-input' ).val( attachment.id );
				this.wrapper.find( '.rise-blocks-custom-fields-image-holder' ).html( img );
				this.wrapper.find( '.rise-blocks-custom-fields-image-delete' ).removeClass( 'hidden' );
				this.wrapper.find( '.rise-blocks-custom-fields-image-btn-text' ).text( RBCF.media_btn_change_text );
			}
		}
	};

	var Repeater = {

		init: function(){
			var $this = this;
			$( document ).on( 'click', '.custom-field-repeater-add', function( e ){

				e.preventDefault();

				var $wrapper = $( this ).closest( '.custom-field' ),
					$appendTo = $wrapper.find( '.custom-field-repeater-wrapper' );
				
				$wrapper.find( '.sample .repeater-single' )
					.clone()
					.appendTo( $appendTo );
			});

			$( document ).on( 'click', '.custom-field-repeater-delete', function( e ){
				e.preventDefault();

				var $wrapper = $( this ).closest( '.custom-field.repeater' );
				$( this ).closest( '.repeater-single' ).remove();

				var data = [], i = 0;

				$wrapper.find( '.custom-field-repeater-wrapper .repeater-single' ).each(function(){

					data[ i ] = {};

					$( this ).find( '.custom-field' ).each(function(){
						var $ele = $( this ).find( '.field' );
						data[ i ][ $ele.data( 'id' ) ] = {
							"type"  : $ele.data( 'type' ),
							"value" : $ele.val()
						};
					});

					i++;

				});

				$wrapper.find( '.repeater-hidden-field' ).val( JSON.stringify( data ) );

			});

			$( document ).on( 'change', '.custom-field.repeater .field', function( e ){
				var data = [], i = 0;

				$( this ).closest( '.custom-field-repeater-wrapper' ).find( '.repeater-single' ).each(function(){

					data[ i ] = {};

					$( this ).find( '.custom-field' ).each(function(){
						var $ele = $( this ).find( '.field' );
						data[ i ][ $ele.data( 'id' ) ] = {
							"type"  : $ele.data( 'type' ),
							"value" : $ele.val()
						};
					});

					i++;

				});

				$( this ).closest( '.custom-field.repeater' ).find( '.repeater-hidden-field' ).val( JSON.stringify( data ) );
				console.log( data );
			});
		}
	};

	var Field = {
		init: function(){
			var _this = this;
			$( document ).on( 'click', '.add-field', function( e ){
				e.preventDefault();
				var html = $( '#sample' ).html();
				$( '.rise-blocks-custom-fields-wrapper' ).append( html );
			});

			$( document ).on( 'change', '.rise-blocks-custom-fields-menu .field', function( e ){
				_this.setData();
			});

			$( document ).on( 'click', '.rise-blocks-custom-fields-wrapper-inner .delete', function( e ){
				if( confirm( 'Are you sure to delete?' ) ){
					$( this ).closest( '.rise-blocks-custom-fields-wrapper-inner' ).remove();
					_this.setData();
				}
			});
		},
		setData: function(){
			var data = {};
			$( '.rise-blocks-custom-fields-wrapper-inner' ).each(function(){
				var post = $( this ).find( 'select[name="post_type"]' ).val();
				if( !data[ post ] ){
					data[ post ] = {};
				}

				var temp = {}, key;
				$( this ).find( '.field' ).each(function(){
					var name = $( this ).attr( 'name' );
					if( name != 'post_type' ){
						var val = $( this ).val();
						if( name == 'name' ){
							key = val;
						}else{
							temp[ name ] = val;
						}
					}
				});

				if( '' != key ){
					data[ post ][ key ] = temp;
				}

			});
			
			$( '.rbcf-data' ).val( JSON.stringify( data ) );
		}
	};

	jQuery( document ).ready( function(){
		
		Tab.init()
		ImageBrowser.init();
		Repeater.init();

		Field.init();

		$( '.custom-field .color-picker' ).wpColorPicker();

		if( $().select2 ){
			jQuery( '.rise-blocks-custom-fields-multi-select' ).each(function(){
				jQuery( this ).find( 'select' ).select2({
					'placeholder' : jQuery( this ).data( 'label' )
				});
			})

			jQuery( '.rise-blocks-custom-fields-dropdown-products' ).each(function(){
				jQuery(this).select2({
					placeholder: jQuery(this).data('placeholder'),
					minimumInputLength: 3,
					allowClear: false,
					ajax: {
						url: RBCF.ajax_url,
						method: 'POST',
						dataType: 'json',
						data: function (params) {
						    var query = {
						        search: params.term,
						        action: 'rise_blocks_custom_fields_get_product'
						    }
						    return query;
						}
					}
				});
			});

			jQuery( '.rise-blocks-custom-fields-dropdown-pages' ).each(function(){
				jQuery(this).select2({
					placeholder: jQuery(this).data('placeholder'),
					minimumInputLength: 3,
					allowClear: false,
					ajax: {
						url: RBCF.ajax_url,
						method: 'POST',
						dataType: 'json',
						data: function (params) {
						    var query = {
						        search: params.term,
						        action: 'rise_blocks_custom_fields_get_pages'
						    }
						    return query;
						}
					}
				});
			});
		
			jQuery( '.rise-blocks-custom-fields-dropdown-navigation' ).each(function(){
				jQuery(this).select2({
					placeholder: jQuery(this).data( 'placeholder' ),
					allowClear: false,
					ajax: {
						url: RBCF.ajax_url,
						method: 'POST',
						dataType: 'json',
						data: function (params) {
						    var query = {
						        search: params.term,
						        action: 'rise_blocks_custom_fields_get_navigation'
						    }
						    return query;
						}
					}
				});
			});
		}
	});

})( jQuery );