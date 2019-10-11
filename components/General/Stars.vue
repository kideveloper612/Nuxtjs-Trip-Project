<template>
    <div :class="classes">
        <img v-if="score < 0.5" src="/icons/star-empty.svg" />
        <img v-else-if="score < 1" src="/icons/star-half.svg" />
        <img v-else src="/icons/star-full.svg" />

        <img v-if="score < 1.5" src="/icons/star-empty.svg" />
        <img v-else-if="score < 2" src="/icons/star-half.svg" />
        <img v-else src="/icons/star-full.svg" />

        <img v-if="score < 2.5" src="/icons/star-empty.svg" />
        <img v-else-if="score < 3" src="/icons/star-half.svg" />
        <img v-else src="/icons/star-full.svg" />

        <img v-if="score < 3.5" src="/icons/star-empty.svg" />
        <img v-else-if="score < 4" src="/icons/star-half.svg" />
        <img v-else src="/icons/star-full.svg" />

        <img v-if="score < 4.5" src="/icons/star-empty.svg" />
        <img v-else-if="score < 5" src="/icons/star-half.svg" />
        <img v-else src="/icons/star-full.svg" />
    </div>
</template>

<script>
    export default {
      props: ['score', 'classes']
    }
</script>
