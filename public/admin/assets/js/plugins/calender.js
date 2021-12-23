/*
Template: Hope-Ui - Responsive Bootstrap 5 Admin Dashboard Template
Author: iqonic.design
Design and Developed by: iqonic.design
NOTE: This file contains the all calender events.
*/
"use strict"

if (jQuery('#calendar1').length) {
  document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar1');
    let calendar1 = new FullCalendar.Calendar(calendarEl, {
      selectable: true,
      plugins: ["timeGrid", "dayGrid", "list", "interaction"],
      timeZone: "UTC",
      defaultView: "dayGridMonth",
      contentHeight: "auto",
      eventLimit: true,
      dayMaxEvents: 4,
      header: {
          left: "prev,next today",
          center: "title",
          right: "dayGridMonth"
      },
      events: '/jscalender'
  });
  calendar1.render();
  });
  
}