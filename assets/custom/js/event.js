$(document).ready(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2015-11-01',
        businessHours: true, // display business hours
  eventLimit: true,
        editable: false,
        events: [
            {
                title: 'VSA Thanksgiving Dinner',
      start: '2015-11-26T19:00:00',
                end: '2015-11-26T21:00:00',
            },
    /*      {
                title: 'Meeting',
                start: '2015-02-13T11:00:00',
                constraint: 'availableForMeeting', // defined below
                color: '#257e4a'
            },
            // areas where "Meeting" must be dropped
            {
                id: 'availableForMeeting',
                start: '2015-02-11T10:00:00',
                end: '2015-02-11T16:00:00',
                rendering: 'background'
            },
            {
                id: 'availableForMeeting',
                start: '2015-02-13T10:00:00',
                end: '2015-02-13T16:00:00',
                rendering: 'background'
            },

            // red areas where no events can be dropped
            {
                start: '2015-02-24',
                end: '2015-02-28',
                overlap: false,
                rendering: 'background',
                color: '#ff9f89'
            },
            {
                start: '2015-02-06',
                end: '2015-02-08',
                overlap: false,
                rendering: 'background',
                color: '#ff9f89'
            }
    */
        ]
    });

});
