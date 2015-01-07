$(document).ready(function() {

		$('#calendar').fullCalendar({
			theme: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2014-09-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'PAL Party Meeting',
					start: '2014-09-24T19:00:00',
					url: 'https://docs.google.com/document/d/1XzUy3pASgK45-CWFP-mpUcqsNknt_VY-IGwpx3oZvA0/edit?usp=sharing'
				}
			]
		});
		
	});