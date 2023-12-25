<template>
    <div>
      <h1>Employee Calendar</h1>
      <full-calendar :events="events" :config="config"></full-calendar>
    </div>
  </template>
  
  <script>
  import FullCalendar from 'vue-full-calendar';
  import 'fullcalendar/dist/fullcalendar.css';
  
  export default {
    components: {
      FullCalendar,
    },
    data() {
      return {
        events: [
          {
            title: 'Event 1',
            start: '2023-01-01',
          },
          // Add more events as needed
        ],
        config: {
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
          },
        },
      };
    },
  };
  </script>
  <style>
    
  </style>
  