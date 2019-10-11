<template>
    <div class="staff-calendar">
        <h2>Kommande resor med {{ name }}</h2>
        <CalendarTable />
    </div>
</template>

<script>
  import CalendarTable from '~/components/Staff/CalendarTable.vue'

  export default {
    props: ['name'],
    components: {
      CalendarTable
    }
  }
</script>
