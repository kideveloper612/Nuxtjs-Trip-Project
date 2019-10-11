<template>
    <div class="staff-reviews">
        <h2>Tidigare resenäres kommentarer om resor med {{ name }}</h2>
        <ul class="staff-reviews__list">
            <li>
                <div class="staff-reviews__list__top">
                    <strong>Mosel Bernkastel 7d</strong>
                    <span>2019-09-07</span>
                </div>
                <p>En oförglömlig resa, helt fantastisk, med mycket kunnig, trevlig och påläst reseledare, Håkan, och lugn och fin körning av Johan. De får det högsta betyget och vi rekommenderar verkligen det vackra Holland.</p>
            </li>
            <li>
                <div class="staff-reviews__list__top">
                    <strong>Mosel Bernkastel 7d</strong>
                    <span>2019-09-07</span>
                </div>
                <p>En oförglömlig resa, helt fantastisk, med mycket kunnig, trevlig och påläst reseledare, Håkan, och lugn och fin körning av Johan. De får det högsta betyget och vi rekommenderar verkligen det vackra Holland.</p>
            </li>
            <li>
                <div class="staff-reviews__list__top">
                    <strong>Mosel Bernkastel 7d</strong>
                    <span>2019-09-07</span>
                </div>
                <p>En oförglömlig resa, helt fantastisk, med mycket kunnig, trevlig och påläst reseledare, Håkan, och lugn och fin körning av Johan. De får det högsta betyget och vi rekommenderar verkligen det vackra Holland.</p>
            </li>
        </ul>
    </div>
</template>

<script>
  export default {
    props: ['name'],

  }
</script>
