<template>
    <table class="staff-calendar-table">
        <tr>
            <th>Datum</th>
            <th>Resmal</th>
            <th>Pris</th>
            <th>Plats</th>
        </tr>
        <tr v-for="item in calendar">
            <td>{{ item.date }}</td>
            <td>{{ item.tripname}}</td>
            <td>fr {{ item.price }}</td>
            <td>{{ item.seats_left }}</td>
        </tr>
    </table>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    computed: {
      ...mapGetters({
        calendar: 'getCalendar'
      })
    }
  }
</script>
