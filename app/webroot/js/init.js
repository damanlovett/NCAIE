	$(function() {
	
			$('#tabs').tabs();
			
			$('#tabsbd').tabs();
			
			$('.actions a').button();
			
			$('.actions a').removeClass('button blue');
			
			$('.actions a.new').button({ icons: {primary:'ui-icon-plus'} });
			
			$('.actions a.list').button({ icons: {primary:'ui-icon-folder-collapsed'} });
			
			$('.actions a.report').button({ icons: {primary:'ui-icon-note'} });
			
			$('td.actions a:nth-child(1)').button({ icons: {primary:'ui-icon-search'} });
			
			$('td.actions a:nth-child(2)').button({ icons: {primary:'ui-icon-pencil'} });
			
			$('td.actions a:nth-child(3)').button({ icons: {primary:'ui-icon-close'} });
			
			$('input[type=submit]').button({ icons: {primary:'ui-icon-pencil'} });
			
			$('#flashMessage').removeClass('message').addClass('ui-state-error ui-corner-all');
			
			$('#observation div:even').addClass('altDiv');
			
			$('#ObservationDateOf').datepicker({
			dateFormat: 'yy-mm-dd',
			showOn: 'button',
			buttonImage: '../img/calendar.gif',
			buttonImageOnly: true
		});
		
			$("#dialog").dialog({
			autoOpen: false,			
		});
			
			$('#add-doc')
			.button()
			.click(function() {
				$('#dialog').dialog('open');
			});
			
			$(".DefaultHtmlArea").htmlarea(); // Initialize jHtmlArea's with all default values

			
			
		});
		
		

